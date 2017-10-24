<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Miutea</title>
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
<body>
	<?php include('header.php'); ?>
	<div style="margin-top: -20px;" id="about_us">
		<div class=" w3-sand w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-xxxlarge w3-text-brown">VỀ CHÚNG TÔI</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird w3-center">
    <img src="img/21765169_1089251934545011_7844197691680673624_n.jpg" alt="Notebook" style="width:100%">
	  <br><br><br>
   <h1 class="w3-xxxlarge w3-text-brown"><b>Miutea</b></h1>
    <div class="w3-justify w3-left">
		<br> <br> 
      <p>Miutea là một thương hiệu trà sữa vô cùng nổi tiếng với các bạn trẻ Không chỉ có kem cheese ngon đặc sắc làm nức lòng các milktea lover, mà trà hoa quả với vị trà thanh mát từ lá trà được chắt lọc ở những đồi chè nổi tiếng kết hợp với trái cây tươi thật sự chinh phục trái tim thực khách.
		  <br> <br>
		  Bên cạnh đó việc kết hợp trang trí đa dạng nhiều không gian phù hợp với sở thích cũng là một trong những điểm nhấn đặc biệt của Miutea..</p>
    </div>
	  <br>
	    <div class="w3-row-padding">
    <div class="w3-half">
      <img src="img/mau-thiet-ke-quan-tra-sua-dep1.jpg"style="width:100%" onclick="onClick(this)" alt="<br>Phong cách hiện đại, trẻ trung">
		
		<p class="w3-padding-64" align="left"> Để thu hút đặc biệt đến khách hàng thì việc thiết kế không gian cùng những hình ảnh ấn tượng, độc đáo mang nét cá tính riêng biệt cũng được lựa chọn. Ở đây từ thiết kế nội thất quán trà sữa đến cách trang trí, sắp xếp rồi màu sắc luôn có sự sáng tạo, độc đáo riêng của quán. </p>
			</div>
    <div class="w3-half">
      <p class="w3-padding-24" align="left"> Phong cách quán trà sữa được thiết kế hiện đại vẫn là xu hướng yêu thích của một bộ phận khách hàng trẻ. Hình ảnh, đường nét đơn giản kết hợp những màu sắc trang nhã, thanh lịch tạo nên nét cuốn hút vừa hiện đại vừa trẻ trung. Bên cạnh đó là các điểm nhấn ấn tượng, nhiều ý tưởng sáng tạo bắt kịp xu hướng thị trường sẽ tạo cảm giác thích thú cho khách hàng </p>
		<br> <br> <br> <br> <br>
      <img src="img/mau-thiet-ke-quan-tra-sua-dep2.jpg"style="width:100%" onclick="onClick(this)" alt="<br>Trang trí bằng hình ảnh ấn tượng">
    </div>
<br> <br>
			<div class="w3-row-padding w3-center">
				<br> <br>
		<p class="w3-padding-16">Ngoài ra còn có góc sử dụng các vật nuôi chủ yếu như chó, mèo cũng sẽ là một nguồn cảm hứng lớn nếu bạn là người yêu thú cưng. Hãy cùng xem qua 1 số hình ảnh của chúng ta nhé!
		</p>
			<div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="" onclick="onClick(this)">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" class="w3-hover-opacity" alt=""  onclick="onClick(this)">
    </div>

    <div class="w3-col m3">
      <img src="img/thiet-ke-quan-cafe-teen-01.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>
	
	  </div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:35" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-bottomright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-16">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  </div>
	</div>
  <div class="w3-third">
    <div class="w3-container  w3-sand w3-justify">
    <h4 class="w3-xxxlarge w3-text-brown w3-center"> Bạn nhất định không thể bỏ qua! </h1>

    </div>
	  <br>
	    <div class="w3-container  w3-light-grey w3-justify">
      <h4 class=" w3-text-red w3-center" style="text-shadow:1px 1px 0 #444"> Những ưu đãi khi đăng kí thành viên </h3>
		<div class="w3-container w3-center">
	<img src="img/livingroom.jpg" width = "50%"; >
		</div>
		<br>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			  <br>
			<a href="../dangnhap.php" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
	  <br>
	      <div class="w3-container  w3-light-grey w3-justify">
      <h4 class=" w3-text-red w3-center" style="text-shadow:1px 1px 0 #444"> Cách săn khuyến mại </h3>
		<div class="w3-container w3-center">
	<img src="img/livingroom.jpg" width = "50%"; >
		</div>
		<br>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
		  <br>
			<a href="../khuyenmai.php" class="w3-text-blue-gray"> Xem thêm >> </a></p>
    </div>
	
  </div>
	
</div>
	</div>
    <br> <br>
    <?php include('footer.php'); ?>
</body>
</html>