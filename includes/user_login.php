<?php
if(isset($_POST["dangnhap"])){
	if(isset($_POST["maildangnhap"])){
		$mdn = $_POST["maildangnhap"];
	}
	else{
		$mdn = "";
	}
	if(isset($_POST["dnpassword"])){
		$pas = $_POST["dnpassword"];
	}
	else{
		$pas ="NOT_AVAILABLE";
	}
	if($mdn == ""){
		$pas ="NOT_AVAILABLE";
	}
	$con = new PDO("mysql:host=localhost;dbname=miutea", "root", "");
	
	$state = $con->prepare("SELECT * FROM thanhvien WHERE email='$mdn'");
	$state->execute();
	$rert = $state->fetch(PDO::FETCH_OBJ);
	if($rert->mat_khau_tv == $pas){
		session_start();
		$_SESSION["user_name"] = $rert->ten_tv;
		header("location: ../");
	}
	else{
		header("location: ../dangnhap.php?loginerror=1");
	}
}
?>