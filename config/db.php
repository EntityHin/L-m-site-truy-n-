<?php
$host = "localhost";
$dbname = "if0_40292902_web_doc_truyen";
$username = "root";      // XAMPP mặc định
$password = "";          // XAMPP mặc định

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối CSDL: " . $e->getMessage());
}
