<?php
require_once "config/db.php";

/* Validate params */
if (
    !isset($_GET['truyen_id'], $_GET['chuong']) ||
    !is_numeric($_GET['truyen_id']) ||
    !is_numeric($_GET['chuong'])
) {
    die("Thiếu thông tin.");
}

$truyen_id = (int)$_GET['truyen_id'];
$so_chuong = (int)$_GET['chuong'];

/* Get novel */
$sql = $conn->prepare("SELECT * FROM truyen WHERE truyen_id = ?");
$sql->execute([$truyen_id]);
$truyen = $sql->fetch();
if (!$truyen) die("Truyện không tồn tại.");

/* Get chapter */
$sql = $conn->prepare("
    SELECT * FROM chuong 
    WHERE truyen_id = ? AND so_chuong = ?
");
$sql->execute([$truyen_id, $so_chuong]);
$chuong = $sql->fetch();
if (!$chuong) die("Chương không tồn tại.");

/* Prev & Next */
$sql = $conn->prepare("
    SELECT so_chuong FROM chuong 
    WHERE truyen_id = ? AND so_chuong < ?
    ORDER BY so_chuong DESC LIMIT 1
");
$sql->execute([$truyen_id, $so_chuong]);
$prev = $sql->fetch();

$sql = $conn->prepare("
    SELECT so_chuong FROM chuong 
    WHERE truyen_id = ? AND so_chuong > ?
    ORDER BY so_chuong ASC LIMIT 1
");
$sql->execute([$truyen_id, $so_chuong]);
$next = $sql->fetch();

/* Fake user */
$user_id = 1;
$conn->prepare("
    INSERT INTO lich_su_doc (user_id, truyen_id, chuong_id)
    VALUES (?, ?, ?)
")->execute([$user_id, $truyen_id, $chuong['chuong_id']]);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title><?= htmlspecialchars($truyen['tieu_de']) ?> - Chương <?= $so_chuong ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ---------- LIGHT MODE ---------- */
body {
    background: #f7f7f7;
    color: #000;
    transition: background .3s, color .3s;
}
.reading-box {
    background: #fff;
    padding: 32px;
    border-radius: 10px;
    line-height: 1.9;
    font-size: 18px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);
}

/* ---------- DARK MODE ---------- */
body.dark {
    background: #121212;
    color: #e0e0e0;
}
body.dark .reading-box {
    background: #1e1e1e;
    color: #e0e0e0;
}
body.dark hr {
    border-color: #333;
}
body.dark .navbar,
body.dark footer {
    background: #000 !important;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
<div class="container d-flex justify-content-between">
    <a class="navbar-brand" href="index.php">Oath of Novels</a>

    <div>
        <button id="toggleDark" class="btn btn-sm btn-outline-light me-2">
            🌙 Dark
        </button>
        <a class="btn btn-sm btn-outline-light"
           href="detail.php?id=<?= $truyen_id ?>">
           ← Truyện
        </a>
    </div>
</div>
</nav>

<!-- CONTENT -->
<div class="container my-4">
<div class="reading-box">

    <h3 class="fw-bold text-center">
        <?= htmlspecialchars($truyen['tieu_de']) ?>
    </h3>

    <h5 class="text-center mb-4">
        Chương <?= $chuong['so_chuong'] ?>:
        <?= htmlspecialchars($chuong['ten_chuong']) ?>
    </h5>

    <hr>

    <?= nl2br(htmlspecialchars($chuong['noi_dung'])) ?>

    <hr>

    <div class="d-flex justify-content-between mt-4">
        <?php if ($prev): ?>
            <a class="btn btn-secondary"
               href="read.php?truyen_id=<?= $truyen_id ?>&chuong=<?= $prev['so_chuong'] ?>">
               ← Trước
            </a>
        <?php else: ?><span></span><?php endif; ?>

        <?php if ($next): ?>
            <a class="btn btn-primary"
               href="read.php?truyen_id=<?= $truyen_id ?>&chuong=<?= $next['so_chuong'] ?>">
               Sau →
            </a>
        <?php endif; ?>
    </div>

</div>
</div>

<footer class="text-center p-3 bg-dark text-white">
© Oath of Novels
</footer>

<!-- DARK MODE SCRIPT -->
<script>
const btn = document.getElementById("toggleDark");
const body = document.body;

if (localStorage.getItem("darkMode") === "on") {
    body.classList.add("dark");
    btn.textContent = "☀ Light";
}

btn.onclick = () => {
    body.classList.toggle("dark");
    const isDark = body.classList.contains("dark");
    localStorage.setItem("darkMode", isDark ? "on" : "off");
    btn.textContent = isDark ? "☀ Light" : "🌙 Dark";
};
</script>

</body>
</html>
