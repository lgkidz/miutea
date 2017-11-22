<div class="container-fluid">

<form action="checkout.php" method="post">
	<div class="row">
		<div style="padding-left: 20px" class="col-lg-7 col-md-7 col-sm-12">
		<?php
			if(isset($info)){
				$name = $info->ten_tv;
				$email = $info->email;
				$tel = $info->sdt;
				$addr = $info->diachi;
			}
			else{
				$name = "";
				$email = "";
				$tel = "";
				$addr = "";
			}
		?>
		<div class="panel panel-success">
			<div class="panel-heading"><h3>Chọn địa chỉ giao hàng</h3></div>
			<div class="panel-body">
			<div class="form-group">
    			<label for="name">Họ tên:</label>
    			<input type="text" class="form-control" value="<?php echo $name;?>" id="name" name="name" placeholder="Họ tên" required>
  			</div>
			<div class="form-group">
    			<label for="email">Email:</label>
    			<input type="email" class="form-control" placeholder="Email" value="<?php echo $email;?>" id="email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
  			</div>
			<div class="form-group">
    			<label for="tel">Số điện thoại:</label>
    			<input type="number" class="form-control" placeholder="Số điện thoại" value="<?php echo $tel;?>" id="tel" name="tel" min="0" max="99999999999"  required>
  			</div>
  			<div class="form-group">
    			<label for="addr">Địa chỉ:</label>
    			<input type="text" class="form-control" placeholder="Địa chỉ" value="<?php echo $addr;?>" id="addr" name="addr" required>
  			</div>
  			</div>
  		</div>
		</div>
		<div style="padding-left: 50px" class="col-lg-5 col-md-5 col-12">
			<h4 style="float: left">Thông tin đơn hàng</h4>
   			<h5 style="float: right;margin-right: 30px;"><?php echo $items ?> sản phẩm</h5>
    	<table class="table table-bordered">
    		<tr>
    			<td>Sản phẩm</td>
    			<td>Số lượng</td>
    			<td>Giá</td>
    		</tr>
    		<?php
				for($i=0;$i<$items;$i++){
					$item = $this->getItem($_SESSION["items"][$i]->id);
			?>
			<tr class="success">
				<td><h5><?php echo $item->ten_ts?> (<?php echo $_SESSION["items"][$i]->gc;?>, ice <?php echo $_SESSION["items"][$i]->ice;?>%, sugar <?php echo $_SESSION["items"][$i]->sugar;?>%)</h5></td>
				<td><h5><?php echo $_SESSION["items"][$i]->sl;?></h5></td>
				<td><h5><?php echo number_format($_SESSION["items"][$i]->sl * $_SESSION["items"][$i]->price)?> VNĐ</h5></td>
			</tr>
			<?php } ?>
    		<tr>
    			<td colspan="2"><h5>Tạm tính:</h5></td>
    			<td><h5><?php echo number_format($final);?> VNĐ</h5></td>
    		</tr>
    		<tr><h5>
    			<td colspan="2"><h5><b>Tổng tiền</b> (Tổng số tiền thanh toán):</h5></td>
    			<td><h5><b><?php echo number_format($final);?> VNĐ</b></h5></td>
    			</h5>
    		</tr>
    		<tr>
    			<td colspan="3" align="center">
    				<button type="submit" name="submit" class="btn btn-success"><h5>Đặt hàng</h5></button>
    			</td>
    		</tr>
    	</table>
		</div>
	</div>
</form>
</div>