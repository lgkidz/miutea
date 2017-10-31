<div style="margin-bottom: 60px;" class="page-register">
<div class="container-fluid">
	 <img style="width: 100%;" src="core_images/content.jpg">
</div>
<div style="margin-top: 50px;" class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 border-right">
<form role="form" id="dangnhapForm" name="dangnhapForm" action="includes/user_login.php" method="post"  enctype="multipart/form-data">
<h3>ĐĂNG NHẬP</h3>
<div class="form-group has-feedback">
<input type="email" id="maildangnhap" name="maildangnhap" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Name@email.com" data-error="Địa chỉ mail hoặc định dạng không đúng." required>
<span class="help-block with-errors"></span>
</div>
<div class="form-group has-feedback">
<input type="password" id="dnpassword" name="dnpassword" class="form-control" placeholder="Password" required>
<span class="help-block with-errors"></span>
</div>
<span style="color: red"><?php if(isset($_GET["loginerror"])) echo "Tài khoản đăng nhập hoặc mật khấu sai";?></span>
<input type="submit" id="dangnhap" name="dangnhap" value="ĐĂNG NHẬP" class="btn btn-default btn-lg btn-block">
</form>

</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<form id="dangkyForm" name="dangkyForm" action="includes/user_regis.php" method="post"  enctype="multipart/form-data">
<h3>ĐĂNG KÝ</h3>
<div class="form-group has-feedback">
<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Fullname" data-error="Vui lòng cho biết họ tên." required>
</div>
<div class="form-group has-feedback">
<input type="email" id="mailaddress" name="mailaddress" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Name@email.com" data-error="Địa chỉ mail hoặc định dạng không đúng." required="">
<span class="help-block with-errors"></span>
</div>
<div class="form-group has-feedback">
<input type="password" id="dkpassword" name="dkpassword" class="form-control" placeholder="Password" data-error="Mật khẩu không được để trống." required="">
<span class="help-block with-errors"></span>
</div>
<span style="color: red">
<?php 
	if(isset($_GET["regiserror"])){
		$err = $_GET["regiserror"];
		if($err = 1){
			echo "Có lỗi xảy ra! Bạn đã nhập đúng các trường chưa?";
		}
		else if($err = 2){
			echo "Tên đăng nhập đã tồn tại";
		}
	}

?>

</span>
<input type="submit" id="dangky" name="dangky" value="ĐĂNG KÝ TÀI KHOẢN" class="btn btn-default btn-lg btn-block">
</form></div>
<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
</div>
</div>
</div>