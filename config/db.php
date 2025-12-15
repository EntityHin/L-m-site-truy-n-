<?php
$host = "sql108.infinityfree.com";
$dbname = "if0_40292902_web_doc_truyen";
$username = "if0_40292902";      // XAMPP mặc định
$password = "Hin09634030661";          // XAMPP mặc định

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
