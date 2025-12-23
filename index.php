<?php
require_once "config/db.php";

/* Truyện mới cập nhật */
$sql_new = $conn->query("
    SELECT * FROM truyen
    ORDER BY ngay_cap_nhat DESC
    LIMIT 12
");
$truyen_moi = $sql_new->fetchAll();

/* Top truyện đọc nhiều */
$sql_top = $conn->query("
    SELECT t.*, COUNT(l.id) AS luot_doc
    FROM truyen t
    LEFT JOIN lich_su_doc l ON t.truyen_id = l.truyen_id
    GROUP BY t.truyen_id
    ORDER BY luot_doc DESC
    LIMIT 12
");
$top_truyen = $sql_top->fetchAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ | Oath of Novels</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .story-card img {
            height: 220px;
            object-fit: cover;
        }
        .section-title {
            font-size: 22px;
            font-weight: bold;
            margin: 20px 0 10px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Oath of Novels</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="theloai.php">Thể Loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Đăng Ký</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- BANNER -->
<div class="container mt-4">
    <div class="p-4 bg-primary text-white rounded-3 shadow">
        <h2 class="fw-bold">Chào mừng đến với Oath of Novels Trương Chấn Hưng</h2>
        <p>Kho truyện phong phú, cập nhật liên tục mỗi ngày.</p>
    </div>
</div>

<!-- TRUYỆN MỚI CẬP NHẬT -->
<div class="container mt-4">
    <h3 class="section-title">📚 Truyện Mới Cập Nhật</h3>

    <div class="row g-3">
        <?php foreach ($truyen_moi as $truyen): ?>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="<?= $truyen['anh_bia'] ?: 'images/no-cover.jpg' ?>"
                         class="card-img-top" alt="cover">

                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">
                            <?= htmlspecialchars($truyen['tieu_de']) ?>
                        </h6>

                        <a class="btn btn-sm btn-primary w-100"
                           href="detail.php?id=<?= $truyen['truyen_id'] ?>">
                           Đọc ngay
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- TOP TRUYỆN -->
<div class="container mt-4">
    <h3 class="section-title">🔥 Top Truyện Đọc Nhiều</h3>

    <div class="row g-3">
        <?php foreach ($top_truyen as $truyen): ?>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="<?= $truyen['anh_bia'] ?: 'images/no-cover.jpg' ?>"
                         class="card-img-top" alt="cover">

                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">
                            <?= htmlspecialchars($truyen['tieu_de']) ?>
                        </h6>
                        

                        <a class="btn btn-sm btn-danger w-100"
                           href="detail.php?id=<?= $truyen['truyen_id'] ?>">
                           Đọc ngay
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center p-3 bg-dark text-white mt-4">
    © Nhóm 1 - Web Đọc Truyện
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
