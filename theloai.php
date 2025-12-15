<?php
// Danh sách thể loại (demo – sau này lấy từ database)
$categories = [
    1 => "Light Novel",
    2 => "Tiên Hiệp",
    3 => "Huyền Huyễn",
    4 => "Ngôn Tình",
    5 => "Kiếm Hiệp",
    6 => "Xuyên Không",
    7 => "Học Đường",
    8 => "Hài Hước"
];

// Truyện demo theo thể loại
$stories = [
    ["id"=>1, "title"=>"Truyện A", "img"=>"https://i.imgur.com/Z7AzH2c.jpeg", "cat"=>1],
    ["id"=>2, "title"=>"Truyện B", "img"=>"https://i.imgur.com/vxZPppI.jpeg", "cat"=>1],
    ["id"=>3, "title"=>"Truyện C", "img"=>"https://i.imgur.com/w9YI5l3.jpeg", "cat"=>2],
    ["id"=>4, "title"=>"Truyện D", "img"=>"https://i.imgur.com/9YcF2JZ.jpeg", "cat"=>4],
];

// Lấy thể loại được chọn
$cat_id = $_GET["id"] ?? 0;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thể Loại | Web Đọc Truyện</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f7f7f7; }
        .story-card img {
            height: 220px;
            object-fit: cover;
        }
        .category-link {
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Oath of Novels</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link active" href="theloai.php">Thể Loại</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Đăng Nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Đăng Ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-4">
    <div class="row">
        <!-- DANH SÁCH THỂ LOẠI -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">📚 Thể Loại</div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($categories as $id => $name): ?>
                        <li class="list-group-item">
                            <a class="category-link <?= ($cat_id==$id?'fw-bold text-primary':'') ?>"
                               href="theloai.php?id=<?= $id ?>">
                                <?= $name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- TRUYỆN THEO THỂ LOẠI -->
        <div class="col-md-9">
            <h4 class="fw-bold mb-3">
                <?= $cat_id && isset($categories[$cat_id])
                    ? "Thể loại: ".$categories[$cat_id]
                    : "Chọn thể loại" ?>
            </h4>

            <div class="row g-3">
                <?php
                $found = false;
                foreach ($stories as $story):
                    if ($cat_id == 0 || $story["cat"] != $cat_id) continue;
                    $found = true;
                ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card story-card shadow-sm">
                            <img src="<?= $story["img"] ?>" class="card-img-top">
                            <div class="card-body p-2">
                                <h6 class="card-title text-truncate"><?= $story["title"] ?></h6>
                                <a href="detail.php?id=<?= $story["id"] ?>"
                                   class="btn btn-sm btn-primary w-100">
                                    Đọc ngay
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php if ($cat_id && !$found): ?>
                    <p class="text-muted">Chưa có truyện cho thể loại này.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<footer class="text-center p-3 bg-dark text-white mt-4">
    © Nhóm 1 - Web Đọc Truyện
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
