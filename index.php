<!DOCTYPE html>
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
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    </style>
<script src="Scripts/jquery-1.10.2.js"></script>
  <script src="Scripts/jquery-migrate-1.2.1.min.js"></script>
  <script src="Scripts/slick.min.js"></script>
      <script>
        $(document).ready(function () {

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
	<?php include('includes/header.php'); ?>
    
    <div id="content">
    	<?php include('includes/content index.php'); ?>
    <div class="bestseller">
    	    <h1 class="title">Bestseller</h1>
        <div class="slider" role="toolbar">
           <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
            <div><a href="#"><img src="Content/Images/img20170522072447288.jpg" /></a></div>
        </div>
    </div>
	<div class ="dathang">
        <?php include('includes/dathang.php');?>
		</div>
    </div>
  <div id="footer">
    <?php include('includes/footer.php'); ?>
	</div>
    
</body>
</html>