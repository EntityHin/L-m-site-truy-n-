<?php
session_start();

$error = "";

// Demo account (sau này thay bằng database)
$demo_user = "admin";
$demo_pass = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username == "" || $password == "") {
        $error = "Vui lòng nhập đầy đủ thông tin!";
    } elseif ($username == $demo_user && $password == $demo_pass) {
        // Login thành công
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập | Web Đọc Truyện</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-box {
            max-width: 400px;
            margin: 70px auto;
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
                    <li class="nav-item"><a class="nav-link" href="theloai.php">Thể Loại</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.php">Đăng Nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Đăng Ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- LOGIN FORM -->
<div class="login-box">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="text-center fw-bold mb-3">Đăng Nhập</h4>

            <?php if ($error): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button class="btn btn-primary w-100">Đăng Nhập</button>
            </form>

            <div class="text-center mt-3">
                <small>Chưa có tài khoản? <a href="register.php">Đăng ký</a></small>
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
