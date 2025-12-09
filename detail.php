<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Truyện | Web Đọc Truyện</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .story-cover {
            width: 100%;
            height: 330px;
            object-fit: cover;
            border-radius: 8px;
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
            <a class="navbar-brand fw-bold" href="#">Web Đọc Truyện</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.html">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Thể Loại</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đăng Nhập</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTAINER -->
    <div class="container mt-4">

        <div class="row g-4">

            <!-- Ảnh -->
            <div class="col-md-4">
                <img src="https://i.imgur.com/Z7AzH2c.jpeg" class="story-cover shadow" alt="cover">
            </div>

            <!-- Thông tin truyện -->
            <div class="col-md-8">
                <h2 class="fw-bold">Tên Truyện Mẫu</h2>

                <p><strong>Tác giả:</strong> Tên tác giả</p>
                <p><strong>Thể loại:</strong> Huyền huyễn, Phiêu lưu</p>
                <p><strong>Tình trạng:</strong> Đang cập nhật</p>

                <p class="mt-3">
                    <strong>Mô tả truyện:</strong><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                    Nội dung mô tả truyện hiển thị ở đây, có thể dài nhiều dòng.
                </p>

                <a href="#" class="btn btn-primary btn-lg mt-3">📖 Đọc từ đầu</a>
                <a href="#" class="btn btn-success btn-lg mt-3">➡ Tiếp tục đọc</a>
            </div>
        </div>

        <!-- Danh sách chương -->
        <div class="mt-5">
            <h3>📜 Danh Sách Chương</h3>
            <div class="list-group chapter-list shadow">

                <a href="read.html" class="list-group-item list-group-item-action">
                    Chương 1: Bắt đầu cuộc hành trình
                </a>

                <a href="read.html" class="list-group-item list-group-item-action">
                    Chương 2: Bí mật trong rừng tối
                </a>

                <a href="read.html" class="list-group-item list-group-item-action">
                    Chương 3: Gặp gỡ người lạ mặt
                </a>

                <!-- Copy thêm chương tùy ý -->
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
