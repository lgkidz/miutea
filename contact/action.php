<?php
$n = $_POST["name"];
$e = $_POST["email"];
$m = $_POST["message"];

	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	$statement = $con->prepare("INSERT INTO `feedback`(`ten_nguoi_lh`, `email_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES ('$n','$e','$m',NOW())");
	$statement->execute();
	header("location: ../index.php");
?>