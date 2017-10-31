<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Miutea | Giới thiệu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<style>
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
body {
	font-family: Helvetica Neue;
	font-size: 14px;	
}
</style>

<?php
	include("../connection/connection.php");
	$con = new connection();
	$con = $con->con;
	if(isset($_GET["id"])){
		$id = $_GET["id"];
	}
	else{
		$id = 0;
	}
	$statement = $con->prepare("SELECT * FROM tintuc where ma_tin=$id");
	$statement->execute();
	$new = $statement->fetch(PDO::FETCH_OBJ);
?>
<body>
	<?php include('header.php'); ?>
	<div style="margin-top: -20px;" id="about_us">
		<div class=" w3-sand w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-xxxlarge w3-text-brown">TIN TỨC</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird w3-center">
	  <br><br><br>
   <h1 class="w3-xxxlarge w3-text-brown"><b><?php echo $new->tieu_de; ?></b></h1>
	  <br>
	    <div class="w3-row-padding w3-center">
    <div class="w3">
      <img src="img/gcs_thumb_5768a93f6e0b496d85b65740-2016-06-21-024110.jpg" style="width:100%" onclick="onClick(this)">
      <div id="modal01" class="w3-modal w3-black" style="padding-top:35" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-bottomright">X</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-16">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
			</div>
			<div class="w3-row-padding w3-center">
				<br> <br>
		<p class="w3-padding-16"><?php echo $new->noi_dung;?>
		</p>
	  </div>
  </div>
	</div>
  <div class="w3-third">
    <div class="w3-container  w3-sand w3-justify">
    <h4 class="w3-xxxlarge w3-text-brown w3-center"> Bạn nhất định không thể bỏ qua! </h4>

    </div>
	  <br>
	    <div class="w3-container  w3-light-grey w3-justify">
      <h4 class=" w3-text-red w3-center" style="text-shadow:1px 1px 0 #444"> Những ưu đãi khi đăng kí thành viên </h3>
		<div class="w3-container w3-center">
	<img src="img/gcs_thumb_57f5c2216e0b494c1926a1bf-2016-10-06-031651.jpg" width = "50%"; >
		</div>
		<br>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			  <br>
			<a href="../dangnhap.php" class="w3-text-brown"> Xem thêm >> </a></p>
    </div>
	  <br>
	      <div class="w3-container  w3-light-grey w3-justify">
      <h4 class=" w3-text-red w3-center" style="text-shadow:1px 1px 0 #444"> Cách săn khuyến mại </h3>
		<div class="w3-container w3-center">
	<img src="img/gcs_thumb_57f5c2206e0b494c1c2638a9-2016-10-06-031651.jpg" width = "50%"; >
		</div>
		<br>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
		  <br>
			<a href="../sp/khuyenmai.php" class="w3-text-brown"> Xem thêm >> </a></p>
    </div>
	
  </div>
	
</div>
	</div>
    <br> <br>
    <?php include('footer.php'); ?>
</body>
</html>