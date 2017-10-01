<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<?php include("../style_and_script.php"); ?>
<title>Quản lý Feedback</title>
</head>
<body>
<?php
include("header.php");
?>
<?php
include("get_feedback_controller.php");
$controller = new get_feedback_controller();
if(isset($_GET["page"])){
	$page = $_GET["page"];
	$controller->get_requested($page);
}
else{
	$controller->invoke();
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
</center>
</body>
</html>