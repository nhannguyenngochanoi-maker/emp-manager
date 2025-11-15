<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="login-body">

    <form method="POST" action="app/register.php" class="shadow p-4 bg-white rounded">

        <h2 class="text-center mb-4" style="font-size:38px; font-weight:700;">ĐĂNG KÝ</h2>

        <!-- Hiển thị lỗi -->
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php } ?>

        <!-- Hiển thị thông báo thành công -->
        <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_GET['success']) ?>
            </div>
        <?php } ?>

        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tên đăng nhập</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Nhập lại mật khẩu</label>
            <input type="password" name="password2" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Đăng ký</button>

        <div class="text-center mt-3">
            <a href="login.php" class="text-decoration-none">Đã có tài khoản? Đăng nhập</a>
        </div>

    </form>

</body>

</html>