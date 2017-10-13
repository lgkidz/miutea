<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
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
            width: 800px;
            margin: 0 auto;
        }
        .title {
            text-align: center;
            margin-top: 50px;
        }
        .slick-dots li button:before {
            font-size: 40px;
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
			height: 250px;
			width: 180px;
			
        }
    </style>
<script src="Scripts/jquery-1.10.2.js"></script>
  <script src="Scripts/jquery-migrate-1.2.1.min.js"></script>
  <script src="Scripts/slick.min.js"></script>
      <script>
        $(document).ready(function () {

            $('.center').slick({
                dots:true,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
				autoplay: true,
				autoplaySpeed: 2000,
                responsive: [
                  {
                      breakpoint: 768,
                      settings: {
                          arrows: false,
                          centerMode: true,
                          centerPadding: '40px',
						  autoplay: true,
						   autoplaySpeed: 2000,
                          slidesToShow: 3
                      }
                  },
                  {
                      breakpoint: 480,
                      settings: {
                          arrows: false,
                          centerMode: true,
                          centerPadding: '40px',
						  autoplay: true,
						    autoplaySpeed: 2000,
                          slidesToShow: 1
                      }
                  }
                ]
            });
            //-------------------------------------------
            //--------------------------------------------

            //----------------------------------------
            //----------------------------------------------
            var slideIndex = $('.add-remove >div').length;
            $('.add-remove').slick({
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            $('.js-add-slide').on('click', function () {
                slideIndex++;
                $('.add-remove').slick('slickAdd', '<div><h1>' + slideIndex + '</h1></div>');
            });

            $('.js-remove-slide').on('click', function () {
                $('.add-remove').slick('slickRemove', slideIndex - 1);
                if (slideIndex !== 0) {
                    slideIndex--;
                }
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
        <div class="slider center" role="toolbar">
           <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
            <div><img src="Content/Images/img20170522072447288.jpg" /></div>
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