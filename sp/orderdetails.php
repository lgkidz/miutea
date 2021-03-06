<?php
	session_start();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		include("../connection/connection.php");
		$con = new connection();
		$con = $con->con;
		$state = $con->prepare("SELECT * FROM trasua WHERE ma_ts='$id'");
		$state->execute();
		$ob = $state->fetch(PDO::FETCH_OBJ);
		
		$state = $con->prepare("SELECT * FROM monthem");
		$state->execute();
		$monthem = $state->fetchAll(PDO::FETCH_OBJ);
	}
	else{
		header("Location: ../sp/trasua.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $ob->ten_ts;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
						.idcs{
							float: left;
							font-size: 32px;
						}
						#sl{
							float: left;
							height: 35px;
							width: 32px;
							text-align: center;
							font-size: 17px;
							margin-left: 15px;
							margin-right: 10px;
							border: none;
							background: white;
						}
						.block{
							display: inline-block;
							width: 20%;
						}
						.ice10+label{background:url(images/x-10.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.ice10:checked+label{background:url(images/x-10.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.ice30+label{background:url(images/x-30.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.ice30:checked+label{background:url(images/x-30.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.ice50+label{background:url(images/x-50.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.ice50:checked+label{background:url(images/x-50.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.ice70+label{background:url(images/x-70.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.ice70:checked+label{background:url(images/x-70.gif) 0px -35px no-repeat;width:22px;height:35px;}
						
						.sugar10+label{background:url(images/x-10.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.sugar10:checked+label{background:url(images/x-10.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.sugar30+label{background:url(images/x-30.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.sugar30:checked+label{background:url(images/x-30.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.sugar50+label{background:url(images/x-50.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.sugar50:checked+label{background:url(images/x-50.gif) 0px -35px no-repeat;width:22px;height:35px;}

						.sugar70+label{background:url(images/x-70.gif) 0px 0px no-repeat;width:22px;height:35px;}
						.sugar70:checked+label{background:url(images/x-70.gif) 0px -35px no-repeat;width:22px;height:35px;}
						
						.monthembox{
							position: relative;
    						width: 270px;
							margin: 0 auto;
							padding: 5px 10px 5px 30px;
							background: #fff;
							border: 1px solid silver;
							cursor: pointer;
							outline: none;
							line-height: normal;
							font-size: 14px;
						}
						#monthemul li{
							padding-left: 20px;
						}
						#monthemul li label{
							padding: 5px 10px 5px 30px;
							border-bottom: 1px dotted #c0c0c0;
							line-height: normal;
							font-size: 14px;
							position: relative;
						}
						.monthemcheckbox{
							border: none;
						}
						.rate-outline{
							height: 4px;
							width: 222px;
							border: 1px solid #FF0004;
						}
						.rate-percentage{
							background: #FF0004;
							height: 3px;
							width: 0px;
						}
					</style>
<script>
	function monthem(chk){
		if(chk.checked){
			var val = " + " + chk.value + " " + chk.name;
			var al = document.getElementById("more").innerHTML;
			al = al + val;
			document.getElementById("more").innerHTML = al;
			document.getElementById("hidden").value = al;
			document.getElementById("price").value = parseInt(document.getElementById("price").value) + parseInt(chk.value);
		}
		else{
			var val = " + " + chk.value + " " + chk.name;
			var al = document.getElementById("more").innerHTML;
			al = al.replace(val,"");
			document.getElementById("more").innerHTML = al;
			document.getElementById("hidden").value = al;
			document.getElementById("price").value = parseInt(document.getElementById("price").value) - parseInt(chk.value);
		}
		
	}
</script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=357388931388947';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="../index.php">MiuTea</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Trang chủ <span class="sr-only">(current)</span></a> </li>
        <li><a href="../news/">Tin tức</a> </li>
        <li><a href="../about/">Giới thiệu</a> </li>
        <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Sản phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../sp/trasua.php">Trà sữa</a> </li>
            <li><a href="../sp/kemcheese.php">Kem cheese</a> </li>
            <li><a href="../sp/dabao.php">Đá bào</a> </li>
            <li role="separator" class="divider"></li>
            <li><a href="../sp/khuyenmai.php">Khuyến mãi</a> </li>
          </ul>
        </li>
        <li><a href="../contact/">Liên hệ</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		  if(isset($_SESSION["user_name"])){
			  include("user_button.php");
		?>
	  <?php	  
		  }else{
			
		?>
		<li><a href="../dangnhap.php">Đăng nhập</a></li>
	  <?php
		  }
		?>
        <li><a href="../cart/"><span class="glyphicon glyphicon-shopping-cart"><span class="badge"><?php echo isset($_SESSION["items"])? sizeof($_SESSION["items"]):0?></span></span></a> </li>
      </ul>
      <form action="../search/" method="post" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- HEADER -->
<div class="container-fluid">
	 <img style="width: 100%;" src="../core_images/content.jpg">
</div>    
<div id="content" class="container" style="margin-top: 50px;">
        <div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        		<img height="600" width="600" src="../core_images/<?php echo $ob->hinh_anh_ts;?>" alt="Thumbnail Image 1" class="img-responsive">
        	</div>
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        	<form action="createoder.php" method="post">
        		<input type="hidden" name="tsid" value="<?php echo $ob->ma_ts;?>">
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2><?php echo $ob->ten_ts;?></h2></div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<h4><span style="color: #B01F21"><?php echo $ob->gia_ts;?></span> VND</h4>
        			<input type="hidden" id="price" name="price" value="<?php echo $ob->gia_ts;?>">
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        		<h5 id="more"></h5>
        		<input type="hidden" name="ghichu" id="hidden">
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<hr>
        		</div>
        		
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<h4>Số lượng</h4>
        			</div>
        			
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<i onClick="if(parseInt(document.getElementById('sl').value)<5) document.getElementById('sl').value = parseInt(document.getElementById('sl').value) + 1;" class="fa fa-plus-circle idcs"></i>
        				<input id="sl" type="number" readonly min="1" value="1" name="sl">
        				<i onClick="if(parseInt(document.getElementById('sl').value)>1) document.getElementById('sl').value = parseInt(document.getElementById('sl').value) - 1;" class="fa fa-minus-circle idcs"></i>
        			</div>
        			
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<hr>
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<h4>% Ice</h4>
        				<div style="display: block">
        					<div class="block">
        						<input style="display:none" type="radio" id="ice70" name="ice" value="70" checked="checked" class="ice70">
        						<label for="ice70"></label>
        						<span>70</span>
        					</div>
        					<div class="block">
        						<input style="display:none" type="radio" id="ice50" name="ice" value="50" class="ice50">
        						<label for="ice50"></label>
        						<span>50</span>
        					</div><div class="block">
        						<input style="display:none" type="radio" id="ice30" name="ice" value="30" class="ice30">
        						<label for="ice30"></label>
        						<span>30</span>
        					</div><div class="block">
        						<input style="display:none" type="radio" id="ice10" name="ice" value="10" class="ice10">
        						<label for="ice10"></label>
        						<span>10</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        				<h4 style="float: right">% Sugar</h4>
        				<div style="display: block;float: right">
        					<div style="float: right" class="block">
        						<input style="display:none" type="radio" id="sugar70" name="sugar" value="70" checked="checked" class="sugar70">
        						<label for="sugar70"></label>
        						<span>70</span>
        					</div>
        					<div style="float: right" class="block">
        						<input style="display:none" type="radio" id="sugar50" name="sugar" value="50" class="sugar50">
        						<label for="sugar50"></label>
        						<span>50</span>
        					</div>
        					<div style="float: right" class="block">
        						<input style="display:none" type="radio" id="sugar30" name="sugar" value="30" class="sugar30">
        						<label for="sugar30"></label>
        						<span>30</span>
        					</div>
        					<div style="float: right" class="block">
        						<input style="display:none" type="radio" id="sugar10" name="sugar" value="10" class="sugar10">
        						<label for="sugar10"></label>
        						<span>10</span>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<hr>
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<h4 style="float: left;margin-right: 10px;" >Món thêm : </h4>
        			<div style="float: left" class="dropdown">
  						<div class="monthembox" data-toggle="dropdown">Chọn món thêm
  						<span style="margin-left:100px;" class="caret"></span></div>
  						<ul style="width: 270px" class="dropdown-menu" id="monthemul">
   						<?php foreach($monthem as $mt){ ?>
    						<li>
								<input class="monthemcheckbox" type="checkbox" onChange="monthem(this);" id="mt<?php echo $mt->ma_mt;?>" name="<?php echo $mt->ten_mt;?>" data-price="<?php echo $mt->gia_mt;?>" value="<?php echo $mt->gia_mt;?>">
								<label for="mt<?php echo $mt->ma_mt;?>"><?php echo $mt->ten_mt;?></label>
							</li>
						<?php }?>
  						</ul>
					</div>
        		</div>
        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        			<input style="border-radius: 0;height: 45px;width: 100px;font-size: 18px;float: right;margin-right: 40px;" type="submit" class="btn btn-primary" value="Chọn">
        		</div>
				</form>
        	</div>
        </div>
</div>
   <div class="container">
   	<h3>Đánh giá</h3>
   	<hr>
   	<?php 
				$totalrate = $ob->saoI + $ob->saoII+ $ob->saoIII+ $ob->saoIV+ $ob->saoV;
				if($totalrate == 0){
					$x5 = 0;
					$x4 = 0;
					$x3 = 0;
					$x2 = 0;
					$x1 = 0;
					$average = 0;
				}
				else{
					$x5 = $ob->saoV/$totalrate * 100;
					$x4 = $ob->saoIV/$totalrate * 100;
					$x3 = $ob->saoIII/$totalrate * 100;
					$x2 = $ob->saoII/$totalrate * 100;
					$x1 = $ob->saoI/$totalrate * 100;
					$average = ($ob->saoI + $ob->saoII*2 + $ob->saoIII*3 + $ob->saoIV *4 + $ob->saoV*5)/$totalrate;
				}
			?>
   	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
   		<div style="border-right: 1px dashed grey;text-align: center;margin-top: 10px;margin-bottom: 10px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
   			<h4>Đánh giá trung bình</h4>
   			<h5 style="opacity: 0.7">(có <?php echo $totalrate;?> lượt đánh giá)</h5>
   			<p style="font-size: 40px;margin: 5px;"><?php echo number_format($average,1);?></p>
   		</div>
   		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
   			
   			<table style="width: 100%;margin-top: 20px;">
   				<tr>
   					<td>Rất tốt</td>
   					<td><div class="rate-outline"><div class="rate-percentage" style="width: <?php echo $x5;?>%;"></div></div></td>
   					<td style="opacity: 0.8"><?php echo $ob->saoV;?> </td>
   					<td style="opacity: 0.7;padding-left: 5px;"><?php $link ="<a href='rate.php?s=5&id=$ob->ma_ts'>đánh giá</a>"; echo isset($_SESSION["userlegal"])?$link:'đánh giá'?></td>
   				</tr>
   				<tr>
   					<td>Tốt</td>
   					<td><div class="rate-outline"><div class="rate-percentage" style="width: <?php echo $x4;?>%;"></div></div></td>
   					<td style="opacity: 0.8"><?php echo $ob->saoIV;?> </td>
   					<td style="opacity: 0.7;padding-left: 5px;"><?php $link ="<a href='rate.php?s=4&id=$ob->ma_ts'>đánh giá</a>"; echo isset($_SESSION["userlegal"])?$link:'đánh giá'?></td>
   				</tr>
   				<tr>
   					<td>Trung bình</td>
   					<td><div class="rate-outline"><div class="rate-percentage" style="width: <?php echo $x3;?>%;"></div></div></td>
   					<td style="opacity: 0.8"><?php echo $ob->saoIII;?> </td>
   					<td style="opacity: 0.7;padding-left: 5px;"><?php $link ="<a href='rate.php?s=3&id=$ob->ma_ts'>đánh giá</a>"; echo isset($_SESSION["userlegal"])?$link:'đánh giá'?></td>
   				</tr>
   				<tr>
   					<td>Không tốt</td>
   					<td><div class="rate-outline"><div class="rate-percentage" style="width: <?php echo $x2;?>%;"></div></div></td>
   					<td style="opacity: 0.8"><?php echo $ob->saoII;?> </td>
   					<td style="opacity: 0.7;padding-left: 5px;"><?php $link ="<a href='rate.php?s=2&id=$ob->ma_ts'>đánh giá</a>"; echo isset($_SESSION["userlegal"])?$link:'đánh giá'?></td>
   				</tr>
   				<tr>
   					<td>Rất tệ</td>
   					<td><div class="rate-outline"><div class="rate-percentage" style="width: <?php echo $x1;?>%;"></div></div></td>
   					<td style="opacity: 0.8"><?php echo $ob->saoI;?> </td>
   					<td style="opacity: 0.7;padding-left: 5px;"><?php $link ="<a href='rate.php?s=1&id=$ob->ma_ts'>đánh giá</a>"; echo isset($_SESSION["userlegal"])?$link:'đánh giá'?></td>
   				</tr>
   			</table>
   		</div>
   	</div>
   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   		<hr>
   		<h3>Bình luận</h3>
   	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   		<div class="fb-comments" data-href="<?php echo $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" data-numposts="5"></div>
   	</div>
   	</div>
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
  <form method="post" action="../mailer.php">
        <div class="col-sm-8 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
         <div class="col-sm-1 form-group">
          <input class="btn btn-default pull-right" type="submit" value="Theo dõi">
        </div>
        </form>
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