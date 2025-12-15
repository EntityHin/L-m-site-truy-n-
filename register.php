<?php
// Xử lý form
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $email    = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $repass   = $_POST["repass"] ?? "";

    if ($username == "" || $email == "" || $password == "" || $repass == "") {
        $error = "Vui lòng nhập đầy đủ thông tin!";
    } elseif ($password !== $repass) {
        $error = "Mật khẩu nhập lại không khớp!";
    } else {
        // Sau này sẽ lưu vào database
        // $hash = password_hash($password, PASSWORD_DEFAULT);
        $success = "Đăng ký thành công! Bạn có thể đăng nhập.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký | Oath of Novels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .register-box {
            max-width: 420px;
            margin: 60px auto;
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Đăng Nhập</a></li>
                    <li class="nav-item"><a class="nav-link active" href="register.php">Đăng Ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- REGISTER FORM -->
<div class="register-box">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="text-center fw-bold mb-3">Đăng Ký Tài Khoản</h4>

            <?php if ($error): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success"><?= $success ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input type="text" name="username" class="form-control"
                           value="<?= htmlspecialchars($username ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= htmlspecialchars($email ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" name="repass" class="form-control">
                </div>

                <button class="btn btn-primary w-100">Đăng Ký</button>
            </form>

            <div class="text-center mt-3">
                <small>Đã có tài khoản? <a href="login.php">Đăng nhập</a></small>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center p-4 bg-dark text-white mt-3">
    © Nhóm 1 - Web Đọc Truyện
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
