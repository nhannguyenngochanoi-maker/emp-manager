<?php
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id']) && $_SESSION['role'] == "admin") {
	include "DB_connection.php";
	include "app/Model/User.php";

	$users = get_all_users($conn);

?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Quản lý người dùng</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<style>
			.verify-btn {
				text-decoration: none;
				display: inline-block;
				background: #00CF22;
				/* Màu xanh lá */
				padding: 10px 15px;
				color: #fff;
				font-size: 16px;
				border-radius: 5px;
				cursor: pointer;
				transition: opacity .6s;
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}

			.verify-btn:hover {
				opacity: .6;
			}
		</style>
	</head>

	<body>
		<input type="checkbox" id="checkbox">
		<?php include "inc/header.php" ?>
		<div class="body">
			<?php include "inc/nav.php" ?>
			<section class="section-1">
				<h4 class="title">Quản lý người dùng <a href="add-user.php">Thêm người dùng</a></h4>
				<?php if (isset($_GET['success'])) { ?>
					<div class="success" role="alert">
						<?php echo stripcslashes($_GET['success']); ?>
					</div>
				<?php } ?>
				<?php if ($users != 0) { ?>
					<table class="main-table">
						<tr>
							<th>#</th>
							<th>Họ và tên</th>
							<th>Tên tài khoản</th>
							<th>Quyền</th>
							<th>Xác thực</th>
							<th>Hành động</th>
						</tr>
						<?php $i = 0;
						foreach ($users as $user) { ?>
							<tr>
								<td><?= ++$i ?></td>
								<td><?= $user['full_name'] ?></td>
								<td><?= $user['username'] ?></td>
								<td><?= $user['role'] ?></td>
								<td>
									<?php if ($user['is_verified']) { ?>
										<span style="color: green; font-weight: bold;">Đã xác thực</span>
									<?php } else { ?>
										<span style="color: orange; font-weight: bold;">Chờ xác thực</span>
									<?php } ?>
								</td>
								<td>
									<a href="edit-user.php?id=<?= $user['id'] ?>" class="edit-btn">Cập nhật</a>
									<a href="delete-user.php?id=<?= $user['id'] ?>" class="delete-btn">Xóa</a>
									<?php if (!$user['is_verified']) { ?>
										<a href="app/verify_user.php?id=<?= $user['id'] ?>"
											class="verify-btn"
											onclick="return confirm('Xác thực tài khoản này?');">
											Xác thực
										</a>
									<?php } ?>
								</td>
							</tr>
						<?php	} ?>
					</table>
				<?php } else { ?>
					<h3>Empty</h3>
				<?php  } ?>

			</section>
		</div>

		<script type="text/javascript">
			var active = document.querySelector("#navList li:nth-child(2)");
			active.classList.add("active");
		</script>
	</body>

	</html>
<?php } else {
	$em = "First login";
	header("Location: login.php?error=$em");
	exit();
}
?>