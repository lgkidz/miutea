<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<?php include("../style_and_script.php"); ?>
<style>
	.aff{
		border: none;
	}
	.aff:active{
		border: none;
	}
	#edit{
		transform: rotate(0deg);
		transition-duration: 0.6s;
	}
	#edit:hover{
		transform: rotate(-360deg);
	}
</style>
<title>Quản lý tin tức</title>
</head>
<?php
	include("tintuc_controller.php");
	$controller = new tintuc_controller();
	$controller->process();
?>
<body>
<?php
include("header.php");
?>
<div class="container-fluid">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<?php include("addnews.php"); ?>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<?php
			if(isset($_GET["page"])){
			$page = $_GET["page"];
			$controller->get_requested($page);
			}
			else{
				$controller->get_requested(1);
			}
		?>
		<?php
			$nof = $controller->get_nof();
			$nop = ($nof%5==0)? $nof/5 :intval($nof/5) + 1; //number of pages, 5 results per page.
			if($nop > 1){
		?>
		<center>
			<ul class="pagination">
			<?php
				for($i = 1;$i<$nop+1;$i++){
			?>
			<li <?php if(isset($_GET["page"])&&$i==$_GET["page"]) echo "class='active';"?>><a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
			<?php
				}
			?>
			</ul>
		<?php } ?>
	</div>
</div>
</body>
</html>