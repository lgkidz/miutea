<!doctype html>
<?php
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>MiuMember - <?php echo $_SESSION["user_name"]; ?></title>
</head>

<body>
<?php include("header.php"); ?>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px; padding-top: 25px;">    
  <!-- The Grid -->
   <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-sand">
        <div class="w3-container">
         <h4 class="w3-center"> Chào bạn! </h4>
         <p class="w3-center"><img src="../images/logo.jpg" class="w3-circle" style="height:70px;width:70px" alt="Avatar"></p>
			 <h4 class="w3-center"> Họ tên xxx </h4>
         <hr>
      <div class="w3-bar-block w3-sand w3-center">
  <a href="#taikhoan" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-user  w3-xxlarge"></i><br>Thông tin </a> 
  <hr>
	<a href="#" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-bell  w3-xxlarge"></i><br>Thông báo</a> 
  <hr>
		 <a href="#" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-shopping-cart  w3-xxlarge"></i><br>Đơn hàng của bạn </a> 
  <hr>
		  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('phanhoi').style.display='block'"><i class="glyphicon glyphicon-comment w3-xxlarge"></i><br>Gửi phản hồi</a>
		  <hr>
		 <a href="#" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-log-in w3-xxlarge"></i><br>Đăng xuất</a> 
  <hr>
		  
</div>
        </div>
      </div>
      <br>
      </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
      <div class="w3-row-padding">
        <div class="w3-col m12">
			<div id="taikhoan" >
				<h2 class="w3-center">Thông tin cá nhân</h2>
<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-center">
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-user"></i><br>Họ tên</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Họ tên">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-envelope-o"></i><br>Email</div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-disabled" name="email" type="text" placeholder="email">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-phone"></i><br>Điện thoại</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-pencil"></i><br>Địa chỉ</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
    </div>
</div>
</form>
			</div>
			<br>
			
<div id="phanhoi" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('phanhoi')style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">Cảm nhận khách hàng</h2>
      <p>Mời bạn nêu nhận xét về dịch vụ và sản phẩm của Miutea! Trân trọng .</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Nhận xét..."></p>
      <button type="button" class="w3-button w3-padding-large w3-brown w3-margin-bottom" onclick="document.getElementById('phanhoi').style.display='none'">Gửi đi</button>
    </div>
  </div>

			</div>
            </div>  
          </div>
        </div>
      </div>
	
<!-- Page Container -->
<?php include("footer.php"); ?>
</body>
</html>