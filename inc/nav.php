<nav class="side-bar">
	<div class="user-p">
		<img src="img/user.png">
		<h4>@<?= $_SESSION['username'] ?></h4>
	</div>

	<?php

	if ($_SESSION['role'] == "employee") {
	?>
		<!-- Thanh điều hướng (nav) của nhân viên (employee) -->
		<ul id="navList">
			<li>
				<a href="index.php">
					<i class="fa fa-tachometer" aria-hidden="true"></i>
					<span>Trang tổng quan</span>
				</a>
			</li>
			<li>
				<a href="my_task.php">
					<i class="fa fa-tasks" aria-hidden="true"></i>
					<span>Nhiệm vụ của tôi</span>
				</a>
			</li>
			<li>
				<a href="profile.php">
					<i class="fa fa-user" aria-hidden="true"></i>
					<span>Thông tin</span>
				</a>
			</li>
			<li>
				<a href="notifications.php">
					<i class="fa fa-bell" aria-hidden="true"></i>
					<span>Thông báo</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Đăng xuất</span>
				</a>
			</li>
		</ul>
	<?php } else { ?>
		<!-- Thanh điều hướng (nav) quản trị viên (admin) -->
		<ul id="navList">
			<li>
				<a href="index.php">
					<i class="fa fa-tachometer" aria-hidden="true"></i>
					<span>Trang tổng quan</span>
				</a>
			</li>
			<li>
				<a href="user.php">
					<i class="fa fa-users" aria-hidden="true"></i>
					<span>Quản lý người dùng</span>
				</a>
			</li>
			<li>
				<a href="create_task.php">
					<i class="fa fa-plus" aria-hidden="true"></i>
					<span>Tạo nhiệm vụ</span>
				</a>
			</li>
			<li>
				<a href="tasks.php">
					<i class="fa fa-tasks" aria-hidden="true"></i>
					<span>Tất cả nhiệm vụ</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Đăng xuất</span>
				</a>
			</li>
		</ul>
	<?php } ?>
</nav>