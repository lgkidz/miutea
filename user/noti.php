<div class="w3-col m9">
<div class="w3-row-padding">
<div class="w3-col m12">
<div id="taikhoan" >
<h2 class="w3-center">Thông báo</h2>
<br>
<br>
<br>
<h3 class="w3-center">
<?php
	if($_GET["action"] == "noti"){
		echo "Bạn không có thông báo nào!";
	}
	else if($_GET["action"] == "feedback"){
		echo "Cảm ơn bạn đã gửi phản hồi <3";
	}
?>
</h3>
</div>
</div>  
</div>
</div>