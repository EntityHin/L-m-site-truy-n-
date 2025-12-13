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
            margin-bottom: 10px;
            margin-top: 20px;
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="theloai.php">Thể Loại</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Đăng Nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Đăng Ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <div class="container mt-4">
        <div class="p-4 bg-primary text-white rounded-3 shadow">
            <h2 class="fw-bold">Chào mừng đến với Oath of Novels</h2>
            <p>Kho truyện phong phú, cập nhật liên tục mỗi ngày.</p>
        </div>
    </div>

    <!-- TRUYỆN MỚI CẬP NHẬT -->
    <div class="container mt-4">
        <h3 class="section-title">📚 Truyện Mới Cập Nhật</h3>

        <div class="row g-3">
            <!-- Card truyện mẫu -->
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="https://i.imgur.com/Z7AzH2c.jpeg" class="card-img-top" alt="cover">
                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">Tên Truyện 1</h6>
                        <a class="btn btn-sm btn-primary w-100" href="http://entityhin.free.nf/doan/detail.php">Đọc ngay</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="https://i.imgur.com/vxZPppI.jpeg" class="card-img-top" alt="cover">
                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">Tên Truyện 2</h6>
                        <a class="btn btn-sm btn-primary w-100" href="#">Đọc ngay</a>
                    </div>
                </div>
            </div>

            <!-- Copy thêm nhiều card tùy ý -->
        </div>
    </div>

    <!-- TOP TRUYỆN -->
    <div class="container mt-4">
        <h3 class="section-title">🔥 Top Truyện Đọc Nhiều</h3>

        <div class="row g-3">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="https://i.imgur.com/w9YI5l3.jpeg" class="card-img-top" alt="cover">
                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">Top Truyện 1</h6>
                        <a class="btn btn-sm btn-danger w-100" href="#">Đọc ngay</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="card story-card shadow-sm">
                    <img src="https://i.imgur.com/9YcF2JZ.jpeg" class="card-img-top" alt="cover">
                    <div class="card-body p-2">
                        <h6 class="card-title text-truncate">Top Truyện 2</h6>
                        <a class="btn btn-sm btn-danger w-100" href="#">Đọc ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="text-center p-3 bg-dark text-white mt-4">
        © Nhóm 1 - Web Đọc Truyện
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
