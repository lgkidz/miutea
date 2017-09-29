<!doctype html>
<?php
	session_start();
	session_unset();
	session_destroy();
?>
<html>
<head>
<meta charset="utf-8">
<style>
	table{
		margin-top: 75px;
		border: 2px dashed black;
		padding: 10px;
		border-radius: 10px;
	}
	td{
		padding: 10px 10px 0 0;
	}
	.err{
		color: red;
		font-size: 20px;
	}
</style>
<title>Login</title>
</head>

<body>
<center>
	<img style="height: 250px;width: 250px;" src="../core_images/MiuTea.png">
	<form action="adlogin.php" method="post">
		<table>
			<tr>
				<td>Tên đăng nhập: </td>
				<td><input name="adid" type="text" required></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input name="adpass" type="password" pattern=".{6,}"   required title="Mật khẩu ít nhất 6 ký tự"></td>
			</tr>
			<tr>
				<td><input type="submit" name="adsubmit" value="Đăng nhập"></td>
				<td><input type="reset" name="adsubmit" value="Nhập lại"></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_GET['err'])){
			if($_GET['err'] == 1){
				echo "<p class='err'>Sai mật khẩu!</p>";	
			}
			else if($_GET['err'] == 2){
				echo "<p class='err'>Are you trying to hack our site?</p>";	
			}
		}
	?>
</center>
</body>
</html>