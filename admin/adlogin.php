<?php
	$inid = $_POST['adid'];
	$inpass = $_POST['adpass'];
	$con = new PDO("mysql:host=localhost;dbname=miutea", "root", "");
	
	$state = $con->prepare("SELECT * FROM admin WHERE ten_dn_ad='$inid'");
	$state->execute();
	$rert = $state->fetch(PDO::FETCH_OBJ);
	if(strlen($inpass) < 6){
		header("location: index.php?err=2");
	}
	else if($inpass == $rert->mat_khau){
		session_start();
		$_SESSION["admin_name"] = $inid;
		$_SESSION["admin_id_no"] = $rert->ma_ad;
		$_SESSION["legal"] = 1;
		header("location: adminpage.php");
	}
	else{
		header("location: index.php?err=1");
	}
?>