<div class="w3-col m9">
<div class="w3-row-padding">
<div class="w3-col m12">
<div id="taikhoan" >
<h2 class="w3-center">Thông tin cá nhân</h2>
<form action="?action=edit" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-center">
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-user"></i><br>Họ Tên</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Họ tên" value="<?php echo $info->ten_tv; ?>">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-envelope-o"></i><br>Email</div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-disabled" name="email" type="email" placeholder="email" value="<?php echo $info->email; ?>">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-phone"></i><br>Điện Thoại</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" value="<?php echo $info->sdt; ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:70px"><i class="w3-large fa fa-pencil"></i><br>Địa Chỉ</div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="address" type="text" placeholder="Message" value="<?php echo $info->diachi; ?>">
    </div>
</div>
<div class="w3-row w3-section">
	<input type="submit" class="w3-button w3-padding-large w3-brown w3-margin-bottom" value="Thay đổi" onClick="return confirm('Bạn chắc chắn muôn thay đổi thông tin chứ?');">
</div>
</form>
</div>
</div>  
</div>
</div>