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
		background-color: #9E5618;
		height: 50px;
	}
</style>

  <?php include("style_and_script.php"); ?>

<title>Admin: <?php echo $_SESSION['admin_name'];?></title>
</head>

<body>
<?php include("headerad.php"); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2 col-md-2">
			<ul class="list-group">
    			<li class="list-group-item"><a href="quan_ly_mat_hang/">Quản lý mặt hàng</a></li>
    			<li class="list-group-item"><a href="quan_ly_nhan_su/">Quản lý nhân sự</a></li>
    			<li class="list-group-item"><a href="thong_ke/">Thống kê</a></li>
    			<li class="list-group-item"><a href="don_hang/">Đơn Hàng</a></li>
    			<li class="list-group-item"><a href="quan_ly_admin/">Quản lý admin</a></li>
    			<li class="list-group-item"><a href="quan_ly_tin_tuc/">Quản lý tin tức</a></li>
    			<li class="list-group-item"><a href="quan_ly_feedback/">Quản lý feedback</a></li>
  			</ul>
		</div>
	</div>
</div>
</body>
</html>