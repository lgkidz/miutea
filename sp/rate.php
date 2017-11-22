<?php
session_start();

if(isset($_GET["s"]) && isset($_GET["id"])){
	$id = $_GET["id"];
	$star = $_GET["s"];
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	switch($star){
		case 1:{
			$state = $con->prepare("UPDATE `trasua` SET `saoI`= saoI + 1 WHERE ma_ts = $id");
			$state->execute();
			break;
		}
		case 2:{
			$state = $con->prepare("UPDATE `trasua` SET `saoII`= saoII + 1 WHERE ma_ts = $id");
			$state->execute();
			break;
		}
		case 3:{
			$state = $con->prepare("UPDATE `trasua` SET `saoIII`= saoIII + 1 WHERE ma_ts = $id");
			$state->execute();
			break;
		}
		case 4:{
			$state = $con->prepare("UPDATE `trasua` SET `saoIV`= saoIV + 1 WHERE ma_ts = $id");
			$state->execute();
			break;
		}
		case 5:{
			$state = $con->prepare("UPDATE `trasua` SET `saoV`= saoV + 1 WHERE ma_ts = $id");
			$state->execute();
			break;
		}
	}
	header("Location: trasua.php");
}
else{
	header("Location: trasua.php");
}
?>