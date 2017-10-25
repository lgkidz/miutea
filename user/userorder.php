<div class="col-lg-10  col-md-9 col-sm-12">
<div class="w3-row-padding">
<div class="w3-col m12">
<h2 class="w3-center">Đơn hàng của bạn</h2>
<br>
<br>

<div id="orders">
<table class="table table-hover">
<?php
	if(sizeof($orders) == 0){
?>
	<h3 class="w3-center">Bạn chưa có đơn hàng nào!</h3>
<?php }else{?>
<tr>
		<th>Mã</th>
		<th>Nội dung</th>
		<th>Thành tiền</th>
		<th>Ngày đặt hàng</th>
		<th>Địa chỉ</th>
		<th>Điện thoại</th>
		<th>Trạng thái</th>
		<th></th>
	</tr>
	<?php foreach($orders as $or){ ?>
	<tr>
		<td><?php echo $or->ma_dh?></td>
		<?php
			$details = $this->orderDetails($or->ma_dh);
			setlocale(LC_MONETARY, 'en_US');
			$nd = "";
			$p = 0;
			foreach($details as $a){
				$p +=$a->tong_gia;
				$nd = $nd . $a->ten_ts . " x " . $a->so_luong . "<br>";
			}
		?>
		<td><?php echo $nd;?></td>
		<td><?php echo number_format($p);?> VNĐ</td>
		<td><?php echo date_format(date_create($or->ngay_dh),"H:i d/m/Y")?></td>
		<td><?php echo $or->noi_giao?></td>
		<td><?php echo $or->sdt?></td>
		<td><?php $x=$or->trang_thai;if($x==1){echo "Đã Giao";}else if($x==0){echo "Đang xử lý";}else if($x==-1){echo "Đã Hủy";}?></td>
		<td>
		<?php
			if($x == 0){	
		?>
			<a href="?action=cancelorder&id=<?php echo $or->ma_dh?>"><button type="button" class="w3-button w3-padding-small w3-red ">Hủy đơn hàng</button></a>
		<?php
			}
		?>
		</td>
	</tr>
	<?php }?>
<?php }?>
</table>
</div>
</div>  
</div>
</div>