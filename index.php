<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MiuTea</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css"/>

<link href="Content/slick.css" rel="stylesheet" />
<link href="Content/slick-theme.css" rel="stylesheet" />
  
    <style>
		.bestseller{
			background-color: bisque;
		}

        .slider {
			width: 1200px;
            margin: 0 auto;
        }
        .title {
            text-align: center;
            margin-top: 50px;
        }

        .slider img {
            margin: auto;
			line-height: 100px;
            margin: auto;
            padding: 2%;
			padding-top: 15px;
            padding-bottom: 15px;
            position: relative;
            text-align: center;
			height: 300px;
			width: 240px;
			
        }
		#sub{
			position:fixed;
			width: 250px;
			top: 7%;
			margin-left: -125px;
			left: 50%;
			box-shadow: 0 0 5px 3px #27ae60;
			opacity:0;
			z-index: 1000;
			}
    </style>
<script src="Scripts/jquery-1.10.2.js"></script>
  <script src="Scripts/jquery-migrate-1.2.1.min.js"></script>
  <script src="Scripts/slick.min.js"></script>
      <script>
        $('document').ready(function () {

            $('.slider').slick({
                infinite: true,
  				slidesToShow: 5,
  				slidesToScroll: 1,
				centerPadding: '60px',
				autoplay: true,
  				autoplaySpeed: 1500,
            });
        });
    </script>
    
</head>
<body>
<?php
	if(isset($_GET["sub"])){
?>
<div class="alert alert-success" id="sub" label="alert">Cảm ơn bạn đã đăng ký theo dõi.</div>
<script>
$(document).ready(function(){
	$('#sub').animate({opacity: 1,});
	setTimeout(function(){
		$('#sub').animate({opacity: 0,});
	},1500);
});
</script>
<?php
	}
?>
	<?php include('includes/header.php'); ?>
    
    <div id="content">
    	<?php include('includes/content index.php'); ?>
    <div class="bestseller">
    	    <h1 class="title" style="padding-top: 20px;">Bestseller</h1>
        <div class="slider" role="toolbar">
            <div><a href="sp/trasua.php"><img src="Content/Images/06-dau-tay-300x300.jpg" /></a></div>
            <div><a href="sp/dabao.php"><img src="Content/Images/07-gao-sb-300x300.jpg" /></a></div>
            <div><a href="sp/kemcheese.php"><img src="Content/Images/07-tra-xanh-300x300.jpg" /></a></div>
            <div><a href="sp/dabao.php"><img src="Content/Images/08-o-long-300x300.jpg" /></a></div>
            <div><a href="sp/trasua.php"><img src="Content/Images/08-quan-am-sb-300x300.jpg" /></a></div>
            <div><a href="sp/kemcheese.php"><img src="Content/Images/08-xoai-300x300.jpg" /></a></div>
            <div><a href="sp/trasua.php"><img src="Content/Images/09-o-long-sb-300x300.jpg" /></a></div>
            <div><a href="sp/kemcheese.php"><img src="Content/Images/09-tachi-300x300.jpg" /></a></div>
            <div><a href="sp/dabao.php"><img src="Content/Images/10-4-mua-xuan-sb-300x300.jpg" /></a></div>
            <div><a href="sp/trasua.php"><img src="Content/Images/10-socola-300x300.jpg" /></a></div>
        </div>
    </div>
	<div class ="dathang">
        <?php include('includes/dathang.php');?>
		</div>
    </div>
  <div id="footer">
    <?php include('includes/footer.php'); ?>
	</div>
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a0eae2abb0c3f433d4c9be0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--> 
</body>
</html>