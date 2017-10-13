<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo: Boxed Thumbnails - Bootstrap Carousel</title>
<meta name="description" content="Boxed Thumbnails - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


<style>
.carousel-inner .active.left { left: -33%; }
.carousel-inner .next        { left:  33%; }
.carousel-inner .prev        { left: -33%; }
.carousel-control.left,.carousel-control.right {background-image:none;}
.item:not(.prev) {visibility: visible;}
.item.right:not(.prev) {visibility: hidden;}
.rightest{ visibility: visible;}

</style>

</head>

<body>

<div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">4</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">5</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">6</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">7</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">8</a></div>
                </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>

<script>
$('#myCarousel').carousel({
  interval: 40000
});

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
 
      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
      
  }
  else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     
  }
});
</script>
</body>
</html>