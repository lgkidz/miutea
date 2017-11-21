<?php
if(isset($_POST["dangnhap"])){
	if(isset($_POST["maildangnhap"])){
		$mdn = $_POST["maildangnhap"];
	}
	else{
		$mdn = "n/a";
	}
	if(isset($_POST["dnpassword"])){
		$pas = $_POST["dnpassword"];
	}
	else{
		$pas ="n/a";
	}
	if($mdn == "n/a"){
		$pas ="n/a";
	}
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	
	$state = $con->prepare("SELECT * FROM thanhvien WHERE email='$mdn'");
	$state->execute();
	$rert = $state->fetch(PDO::FETCH_OBJ);
	if($mdn == "n/a" || $pas == "n/a"){
		header("location: ../dangnhap.php?loginerror=1");
	}
	if($rert->ban == 1){
		header("location: ../dangnhap.php?loginerror=4");
	}
	else if($rert->mat_khau_tv == $pas){
		session_start();
		$_SESSION["user_name"] = $rert->ten_tv;
		$_SESSION["email"] = $rert->email;
		$_SESSION["userlegal"] = true;
		header("location: ../");
	}
	else{
		header("location: ../dangnhap.php?loginerror=1");
	}
}
?>