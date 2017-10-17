<div class="page-register">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 border-right">
<form data-toggle="validator" role="form" id="dangnhapForm" name="dangnhapForm" action="http://store.bobapop.com.vn/wp-admin/admin-ajax.php?action=user-login" novalidate="true">
<h3>ĐĂNG NHẬP</h3>
<div class="form-group has-feedback">
<input type="email" id="maildangnhap" name="maildangnhap" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="name@email.com" data-error="Địa chỉ mail hoặc định dạng không đúng." required="">
<span class="help-block with-errors"></span>
</div>
<div class="form-group has-feedback">
<input type="password" id="dnpassword" name="dnpassword" class="form-control" placeholder="Password">
<span class="help-block with-errors"></span>
</div>
<input type="button" id="dangnhap" name="dangnhap" onclick="return user_login(dangnhapForm)" value="ĐĂNG NHẬP" class="btn btn-default btn-lg btn-block">
</form></div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<form data-toggle="validator" role="form" id="dangkyForm" name="dangkyForm" action="http://store.bobapop.com.vn/wp-admin/admin-ajax.php?action=user-register" novalidate="true">
<h3>ĐĂNG KÝ</h3>
<div class="form-group has-feedback has-error">
<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Fullname" data-error="Vui lòng cho biết họ tên." required="">
<span class="help-block with-errors"><ul class="list-unstyled"><li>Vui lòng cho biết họ tên.</li></ul></span>
</div>
<div class="form-group has-feedback">
<input type="email" id="mailaddress" name="mailaddress" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="name@email.com" data-error="Địa chỉ mail hoặc định dạng không đúng." required="">
<span class="help-block with-errors"></span>
</div>
<div class="form-group has-feedback">
<input type="password" id="dkpassword" name="dkpassword" class="form-control" placeholder="Password" data-error="Mật khẩu không được để trống." required="">
<span class="help-block with-errors"></span>
</div>
<input type="button" id="dangky" name="dangky" onclick="return user_register(dangkyForm)" value="ĐĂNG KÝ TÀI KHOẢN" class="btn btn-default btn-lg btn-block">
</form></div>
<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
</div>
</div>
</div>