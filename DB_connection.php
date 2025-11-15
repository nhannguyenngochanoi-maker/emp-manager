<?php

$sName = "localhost";
$uName = "root";
$pass  = "123456";
$db_name = "employee_manager";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
	exit;
}
