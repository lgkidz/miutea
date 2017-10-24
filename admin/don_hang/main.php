<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
            </div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
                		<tr>
                  			<th>Mã đơn hàng</th>
                  			<th>Khách hàng</th>
                  			<th>điện thoại</th>
                  			<th>Địa chỉ nhận hàng</th>
                  			<th>Chi tiết đơn hàng</th>
                  			<th>Thành tiền</th>
                  			<th>Nhân viên lập đơn hàng</th>
                  			<th>Trạng thái</th> 
                  			<th>Thời gian</th>

                		</tr>
 					</thead>
        			<tbody>
        			<?php foreach($resultset as $fb){ 
						$dh = $this->model->SelectById($fb->ma_dh);
					?>
        				
						<tr>
							<td><a  href="#"><?php echo $fb->ma_dh; ?></a></td>
							<td><?php echo $fb->ten_kh; ?></td>
							<td><?php echo $fb->sdt; ?></td>
							<td><?php echo $fb->noi_giao; ?></td>
							<td>
								<?php
									foreach($dh as $d){
										echo "$d->ten_ts x $d->so_luong <br>";
									}
								?>
							</td>
							<td>
								<?php
									$p = 0;
									foreach($dh as $d){
										$p += $d->tong_gia;
									}
									echo "$p VNĐ";
								?>
							</td>
							<td><?php echo $fb->ten_nv; ?></td>
							<td ><span class="dropdown"><?php if($fb->trang_thai==1){echo "<span class='label label-success'>Shipped</span>";}else if($fb->trang_thai==0){echo "<span class='label label-warning'>Pending</span>";}else if($fb->trang_thai==-1){echo "<span class='label label-danger'>Canceled</span>";} ?><i class="fa fa-angle-down pull-right dropdown-toggle" data-toggle="dropdown"></i><ul class="dropdown-menu">
   								<li><a>Thay đổi trạng thái</a></li>
   								<li class="divider"></li>
    							<li><a href="?status=1&id=<?php echo $fb->ma_dh; ?>">Shipped</a></li>
    							<li><a href="?status=0&id=<?php echo $fb->ma_dh; ?>">Pending</a></li>
    							<li><a href="?status=-1&id=<?php echo $fb->ma_dh; ?>">Canceled</a></li>
  							</ul></span></td>
							<td><?php echo $fb->ngay_dh; ?></td>
						</tr>
					<?php } ?>
       				 </tbody>
        			<tfoot>
                		<tr>
                  			<th>Mã đơn hàng</th>
                  			<th>Khách hàng</th>
                  			<th>điện thoại</th>
                  			<th>Địa chỉ nhận hàng</th>
                  			<th>Chi tiết đơn hàng</th>
                  			<th>Thành tiền</th>
                  			<th>Nhân viên lập đơn hàng</th>
                  			<th>Thời gian</th>
                  			<th>Trạng thái</th>
                		</tr>
        			</tfoot>
				</table>
			</div>
		</div>
	</section>
</div>