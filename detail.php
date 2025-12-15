<?php
require_once "config/db.php";

/* Kiểm tra id truyện */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Truyện không tồn tại.");
}

$truyen_id = (int) $_GET['id'];

/* Lấy thông tin truyện */
$sql_truyen = $conn->prepare("
    SELECT * FROM truyen WHERE truyen_id = ?
");
$sql_truyen->execute([$truyen_id]);
$truyen = $sql_truyen->fetch();

if (!$truyen) {
    die("Không tìm thấy truyện.");
}

/* Lấy danh sách chương */
$sql_chuong = $conn->prepare("
    SELECT * FROM chuong
    WHERE truyen_id = ?
    ORDER BY so_chuong ASC
");
$sql_chuong->execute([$truyen_id]);
$chuong_list = $sql_chuong->fetchAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($truyen['tieu_de']) ?> | Oath of Novels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f7f7;
        }
        .cover {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
        }
        .chapter-list a {
            text-decoration: none;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Oath of Novels</a>
        <a class="btn btn-outline-light btn-sm" href="index.php">← Trang chủ</a>
    </div>
</nav>

<!-- THÔNG TIN TRUYỆN -->
<div class="container mt-4">
    <div class="row bg-white shadow rounded p-3">
        <div class="col-md-3">
            <img src="<?= $truyen['anh_bia'] ?: 'images/no-cover.jpg' ?>"
                 class="cover rounded" alt="cover">
        </div>

        <div class="col-md-9">
            <h3 class="fw-bold"><?= htmlspecialchars($truyen['tieu_de']) ?></h3>

            <p class="mb-1">
                <strong>Tác giả:</strong>
                <?= htmlspecialchars($truyen['tac_gia'] ?? 'Đang cập nhật') ?>
            </p>

            <p class="mb-1">
                <strong>Trạng thái:</strong>
                <span class="badge bg-secondary">
                    <?= $truyen['trang_thai'] ?>
                </span>
            </p>

            <p class="mt-2">
                <?= nl2br(htmlspecialchars($truyen['mo_ta'] ?? 'Chưa có mô tả.')) ?>
            </p>

            <?php if (!empty($chuong_list)): ?>
                <a href="read.php?truyen_id=<?= $truyen_id ?>&chuong=<?= $chuong_list[0]['so_chuong'] ?>"
                   class="btn btn-danger mt-2">
                   📖 Đọc từ đầu
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- DANH SÁCH CHƯƠNG -->
<div class="container mt-4">
    <div class="bg-white shadow rounded p-3">
        <h4 class="fw-bold mb-3">📚 Danh sách chương</h4>

        <?php if (empty($chuong_list)): ?>
            <p class="text-muted">Chưa có chương nào.</p>
        <?php else: ?>
            <div class="list-group chapter-list">
                <?php foreach ($chuong_list as $chuong): ?>
                    <a class="list-group-item list-group-item-action"
                       href="read.php?truyen_id=<?= $truyen_id ?>&chuong=<?= $chuong['so_chuong'] ?>">
                        Chương <?= $chuong['so_chuong'] ?>:
                        <?= htmlspecialchars($chuong['ten_chuong']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center p-3 bg-dark text-white mt-4">
    © Oath of Novels
</footer>

</body>
</html>
