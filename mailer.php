<?php
session_start();
if(isset($_POST["email"])){
	$email = $_POST["email"];
	include("connection/connection.php");
	$con = new connection();
	$con = $con->con;
	$state = $con->prepare("INSERT INTO `subscribers`(`email`) VALUES ('$email')");
	$state->execute();
	header("Location: index.php?sub=1");
}
?>