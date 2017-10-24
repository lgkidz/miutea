<?php
if(isset($_POST["dangky"])){
	if(isset($_POST["mailaddress"])){
		$mail = $_POST["mailaddress"];
	}
	else{
		$mail = "n/a";
	}
	if(isset($_POST["fullname"])){
		$name = $_POST["fullname"];
	}
	else{
		$name = "Giấu tên";
	}
	if(isset($_POST["dkpassword"])){
		$pas = $_POST["dkpassword"];
	}
	else{
		$pas = "n/a";
	}
	
	if($mail == "n/a" || $pas == "n/a"){
		header("location: ../dangnhap.php?regiserror=1");
	}
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	
	$state = $con->prepare("SELECT * FROM thanhvien WHERE email='$mail'");
	$state->execute();
	$rert = $state->rowCount();
	if($rert != 0){
		header("location: ../dangnhap.php?regiserror=2");
	}
	else{
		$in = $con->prepare("INSERT INTO `thanhvien`(`ten_tv`,`email`,`mat_khau_tv`) VALUES ('$name','$mail','$pas')");
		$in->execute();
		session_start();
		$_SESSION["user_name"] = $name;
		$_SESSION["email"] = $mail;
		$_SESSION["userlegal"] = true;
		header("location: ../user/");
	}
}
?>