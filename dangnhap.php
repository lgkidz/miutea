<!DOCTYPE html>
<?php
	session_start();
	session_unset();
	session_destroy();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="Content/slick.css" rel="stylesheet" />
<link href="Content/slick-theme.css" rel="stylesheet" />
</head>

<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">MiuTea</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang chủ <span class="sr-only">(current)</span></a> </li>
        <li><a href="news/">Tin tức</a> </li>
        <li><a href="about/">Giới thiệu</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Sản phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sp/trasua.php">Trà sữa</a> </li>
            <li><a href="sp/kemcheese.php">Kem cheese</a> </li>
            <li><a href="sp/dabao.php">Đá bào</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="sp/khuyenmai.php">Khuyến mãi</a> </li>
          </ul>
        </li>
        <li><a href="contact/">Liên hệ</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li  class="active"><a href="dangnhap.php">Đăng nhập</a> </li>
        <li><a href="cart/"><span class="glyphicon glyphicon-shopping-cart"></span></a> </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
    
    <div id="content">
        <?php include('includes/formdangnhap.php'); ?>
        
	</div>
    
    <div id="footer">
    <footer>
  <a class="up-arrow" id="to_top" data-toggle="tooltip" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <script>
	  $('#to_top').click(function(){
    $("html, body").animate({
        scrollTop: 0
    }, 500);
});
  </script>
  <div id="contact" class="">
  <div class="row">
    <div class="col-sm-6">
      <h4>Hãy liên hệ với chúng tôi<h4>
      <p><span class="glyphicon glyphicon-map-marker"></span>  Hà Nội, Việt Nam</p>
      <p><span class="glyphicon glyphicon-phone"></span>     09xxxxxxxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span>    miutea@gmail.com</p>
      <br>
      <a href="index.php"><img src="images/logo.png" height="100"/></a>
    </div>
        <div class="col-sm-6">
<h4 align="left">Theo dõi chúng tôi để nhận được những điều thú vị</h4>
<hr />
  <div class="row">
        <div class="col-sm-8 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="text">
        </div>
         <div class="col-sm-1 form-group">
          <a href="news/"><button class="btn btn-default pull-right" type="button">Theo dõi</button></a>
        </div>
			</div>
      <br> <br> <br>
      <div class="row">
		  <div class="col-sm-4 form-group"> </div>
       
        <div class="col-sm-2 form-group" align="right">
      <a href="https://www.facebook.com"><i class="fa fa-facebook-official" style="font-size:36px;color:brown"></i></a>
        <a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:36px;color:brown"></i></a>
         </div>
       </div>
	  </div>
	</div>
  <div class="col-lsm-12" align="center">
<p class="copy" align="center">©MIUTEA VIETNAM. All rights reserved.</p>
			</div>

</footer>
	</div>
    
</body>
</html>