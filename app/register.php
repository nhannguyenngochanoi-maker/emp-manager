<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../DB_connection.php";

    $full_name = trim($_POST['full_name'] ?? '');
    $username  = trim($_POST['username'] ?? '');
    $password  = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';

    if ($full_name === '' || $username === '' || $password === '' || $password2 === '') {
        header("Location: ../register.php?error=Vui lòng nhập đầy đủ thông tin");
        exit();
    }

    if ($password !== $password2) {
        header("Location: ../register.php?error=Mật khẩu nhập lại không khớp");
        exit();
    }

    // Kiểm tra trùng username
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    if ($stmt->rowCount() > 0) {
        header("Location: ../register.php?error=Tên đăng nhập đã tồn tại");
        exit();
    }

    // Hash password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Thêm user mới
    $sql = "INSERT INTO users (full_name, username, password, role, is_verified, created_at)
            VALUES (?, ?, ?, 'employee', 0, NOW())";

    $stmt = $conn->prepare($sql);

    $success = $stmt->execute([$full_name, $username, $hash]);

    if ($success) {
        header("Location: ../login.php?success=Đăng ký thành công, vui lòng chờ admin xác thực");
        exit();
    } else {
        header("Location: ../register.php?error=Đăng ký thất bại");
        exit();
    }
} else {
    header("Location: ../register.php");
    exit();
}
