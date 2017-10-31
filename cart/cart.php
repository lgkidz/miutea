<style>
body {
	font-family: Helvetica Neue;
	font-size: 14px;	
}
* {
    box-sizing: border-box;
	
}
.Tintuc {
    background-color: white;
	margin-bottom: -30px;
	margin-top: -20px;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    word-break: break-all;
	text-align: center;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
    text-align: center;
}
.content:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	border: 5px solid #963;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
    <div class="Tintuc">
<!-- MAIN (Center website) -->
<div style="margin-top: -20px;" id="about_us">
		<div class=" w3-sand w3-padding-64 w3-margin-bottom w3-center">
  <?php if(isset($_GET["success"])) echo '<h1 class="w3-xxxlarge w3-text-brown">Bạn đã đặt hàng thành công <3</h1>'; else echo '<h1 class="w3-xxxlarge w3-text-brown">Giỏ hàng của tôi</h1>'; ?>
</div>
<!-- Portfolio Gallery Grid -->
<div class="container-fluid">
  <div style="padding-left: 20px" class="col-lg-7 col-md-7 col-sm-12">
   <?php
	$final = 0;
	if($items == 0){
	?>
   	<h3 class="w3-center">Không có sản phẩm nào trong giỏ hàng</h3>
   <?php }else{ ?>
	<table class="table table-striped">
		<tr>
			<th colspan="2"><h5><?php echo $items ?> sản phẩm</h5></th>
			<th><h5>Đơn giá</h5></th>
			<th><h5>Số lượng</h5></th>
			<th></th>
		</tr>
		<?php 	
				
			   for($i=0;$i<$items;$i++){
				$item = $this->getItem($_SESSION["items"][$i][0]);
				   $final = $final + $_SESSION["items"][$i][1] * $item->gia_ts;
		?>
		
		<tr>
			<td width="200px"><img style="height:150px;width:150px;" src="../core_images/<?php echo $item->hinh_anh_ts;?>"></td>
			<td><h5><?php echo $item->ten_ts?></h5></td>
			<td><h5><?php echo number_format($item->gia_ts)?> VNĐ</h5></td>
			<script>
				function changesl<?php echo $i;?>(){
					var sl = document.getElementById("sl<?php echo $i;?>").value;
					var location = "?editsl=<?php echo $i;?>&sl=" + sl;
					window.location = location;
				}
			</script>
			<td><h5><select id="sl<?php echo $i;?>" onChange="changesl<?php echo $i;?>();"><?php for($j=1;$j<=5;$j++){ ?><option <?php echo $j==$_SESSION["items"][$i][1]?"selected":"" ?> value="<?php echo $j;?>"><?php echo $j;?></option><?php }?></select></h5></td>
			<td><a href="?delete=<?php echo $i; ?>"><span style="margin-top: 15px;" class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
		<?php } ?>
	</table>
    <?php } ?>
    </div>
    <div style="padding-left: 50px" class="col-lg-5 col-md-5 col-12">
    	<h4>Thông tin đơn hàng</h4>
    	<table class="table">
    		<tr>
    			<td><h5>Tạm tính:</h5></td>
    			<td><h5><?php echo number_format($final);?> VNĐ</h5></td>
    		</tr>
    		<tr><h5>
    			<td><h5><b>Tổng tiền</b> (Tổng số tiền thanh toán):</h5></td>
    			<td><h5><b><?php echo number_format($final);?> VNĐ</b></h5></td>
    			</h5>
    		</tr>
    		<tr>
    			<td colspan="2" align="center">
    				<?php if($items > 0){?><form action="checkout/index.php" method="post"><button type="submit" value="<?php echo $final; ?>" name="price" class="btn btn-success"><h5>Tiến hành thanh toán</h5></button></form><?php }?>
    			</td>
    		</tr>
    	</table>
    </div>
</div>
    <div style="margin-top: 30px;margin-bottom: 50px;" class="container">
    <center>
    	<a href="<?php echo $_SESSION["backtoshop"];?>"><button class="btn btn-warning"><h4><span class="glyphicon glyphicon-arrow-left"></span>Tiếp tục mua hàng</h4></button></a>
    </center>
    </div>
</div>
</div>