<!doctype html>
<?php
	session_start();
	if(!isset($_SESSION['legal'])){
		header("Location: index.php?err=2");
	}
?>
<html>
<head>
<meta charset="utf-8">
<style>
	#header{
		background-color: aqua;
		height: 50px;
	}
	#choice{
		height: 200px;
		width: 200px;
		margin: 25px;
		border-radius: 20px;
		box-shadow: 7px 7px 7px grey;
		padding: auto;
		background-color: antiquewhite;
		line-height: 200px;
		text-align: center;
		font-size: 20px;
		color: black;
	}
	#choice:active{
 		box-shadow: 3px 3px 7px #888888;
 	}
	.ch-choice{
		text-decoration: none;
		line-height: 200px;
		text-align: justify;
		font-size: 20px;
		color: black;
	}
</style>

  <?php include("style_and_script.php"); ?>

<title>Admin: <?php echo $_SESSION['admin_name'];?></title>
</head>

<body>
<?php include("headerad.php"); ?>
<div class="container-fluid">
	<div class="row">
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			Quản lý mặt hàng
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			Quản lý nhân sự
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			Thống kê
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			Đơn Hàng
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" href="quan_ly_admin/index.php">
			Quản lý admin
		</a>
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" href="#">
			Quản lý tin tức
		</a>
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" href="quan_ly_feedback/">
			Quản lý feedback
		</a>
		<a id="choice" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" href="index.php" onClick="return confirm('Bạn thực sự muốn thoát?');">
			Đăng xuất
		</a>
	</div>
</div>
</body>
</html>