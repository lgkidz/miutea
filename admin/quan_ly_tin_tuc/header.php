<div id="header" style="background-color: aqua;height: 50px;" class="container-fluid">
	<div style="float: left;margin-right: 20px;">
		<div style="float: left">
			<img style="height: 40px;width: 40px;margin: 5px;" src="../../core_images/ava.png";>
		</div>
		<div style="float:left;margin-left: 15px;">
			<h5 style="line-height:25px;"><?php echo $_SESSION['admin_name'];?></h5>
		</div>
		<div class="dropdown" style="float: left;margin: 20px 0 0 20px">
  			<span class="glyphicon glyphicon-cog dropdown-toggle" type="button" data-toggle="dropdown">
  			<span class="caret"></span></span>
  			<ul class="dropdown-menu">
    			<li><a href="../adminpage.php">Quay Lại</a></li>
    			<li><a href="../index.php" onClick="return confirm('Bạn thực sự muốn thoát?');">Đăng xuất</a></li>
  			</ul>
		</div>	
	</div>
	<a style="margin:10px;float: right;" href="../adminpage.php"><button type="button" class="btn btn-primary">Quay lại</button></a>
</div>