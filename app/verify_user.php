<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== "admin") {
    header("Location: ../login.php?error=Không có quyền truy cập");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: ../user.php?error=Thiếu ID người dùng");
    exit();
}

$id = $_GET['id'];

include "../DB_connection.php";

$sql = "UPDATE users SET is_verified = 1 WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

header("Location: ../user.php?success=Đã xác thực tài khoản");
exit();
