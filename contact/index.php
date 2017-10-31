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
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body, html {
	height: 100%;
	font-family: Helvetica Neue;
	font-size: 14px;	
}
#lienhe {
	margin-top: -20px;
	margin-bottom: -30px;
    background-image: url('img/bobapop.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>

</head>

<body>
	<?php include('header.php'); ?>
	<div id="lienhe">
<div class=" w3-text-white">
  <div class="w3-display-middle">
	  <p> <h1>Để lại lời nhắn cho chúng tôi </h1>
	  <br> <br> <br><br> <br> <br> <br> <br>
	<p> <button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black w3-display-middle w3-jumbo">Tại đây</button></p>
		
		</div>
	 <div style="margin-bottom: 30px;" class="w3-display-bottomleft w3-container">
	
    <p class="w3-xlarge">Thứ 2 - Thứ 6: 9 - 22h | Thứ 7 - CN: 10h - 2h </p>
    <p class="w3-large">Hà Nội, Việt Nam</p>
  </div>
</div>
<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h2 class="w3-center ">Lời nhắn nhủ</h2>
    </div>
    <div class="w3-container">
		<br>
      <p>Lời nhắn của bạn là món quà tuyệt vời với chúng tôi</p>
      <form action="action.php" method="post">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Tên" required name="name"></p>
		  <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="email"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nội dung lời nhắn" required name="message"></p>
		  <br> <br>
        <p><button class="w3-button w3-display-bottommiddle" type="submit">GỬI ĐI</button></p>
      </form>
    </div>
  </div>
</div>
	</div>
	<br>
	<?php include('footer.php'); ?>
</body>
</html>