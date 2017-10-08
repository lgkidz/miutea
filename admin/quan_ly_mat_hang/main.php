<div class="content-wrapper">
<section class="content">

<div class="box">
<div class="box-header">
              <h3 class="box-title">Trà sữa</h3>
            </div>
<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
                <tr>
                  <th>Mã</th>
                  <th>Tên</th>
                  <th>Loại</th>
                  <th>Giá</th>
                  <th>Hình ảnh</th>
                  <th>Mô tả</th>
                  <th>Chỉnh sửa</th>
                  <th style="color:red;">Nguy Hiểm!</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($result as $ob){?>
	<tr>
		<td><?php echo $ob->ma_ts; ?></td>
		<td><?php echo $ob->ten_ts; ?></td>
		<td><?php echo $ob->ten_loai; ?></td>
		<td><?php echo $ob->gia_ts; ?></td>
		<td><img height="128" width="128" src="../../core_images/<?php echo $ob->hinh_anh_ts; ?>"></td>
		<td><?php echo $ob->mo_ta; ?></td>
		<td>
			<button type="button" data-toggle="modal" data-target="#md<?php echo $ob->ma_ts?>">Chỉnh sửa</button>
			<div id="md<?php echo $ob->ma_ts?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi thông tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $ob->ma_ts?>"  method="post">
      					<div class="modal-body">
        					<table style="width:100%;">
        						<tr>
        							<td>Mã ts</td>
        							<td><input type="text" name="eid" value="<?php echo $ob->ma_ts;?>" readonly></td>
        						</tr>
        						<tr>
        							<td>Tên</td>
        							<td><input type="text" name="ename" value="<?php echo $ob->ten_ts;?>" required></td>
        						</tr>
        						<tr>
        							<td>Loại</td>
        							<td>
        								<select name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai_ts; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr>
        							<td>Giá</td>
        							<td><input type="number" name="eprice" value="<?php echo $ob->gia_ts;?>" required></td>
        						</tr>
        						<tr>
        							<td>Mô tả</td>
        							<td><input type="text" name="edes" value="<?php echo $ob->mo_ta;?>" required></td>
        						</tr>
        					</table>
      					</div>
      					<div class="modal-footer">
        					<input type="submit" class="btn btn-default" name="esub">
      					</div>
      					</form>
    				</div>
  				</div>
			</div>
		</td>
		<td>
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ts;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');">Xóa Sản phẩm</a>
		</td>
	</tr>
	<?php } ?>
        </tbody>
        <tfoot>
                <tr>
                  <th>Mã</th>
                  <th>Tên</th>
                  <th>Loại</th>
                  <th>Giá</th>
                  <th>Hình ảnh</th>
                  <th>Mô tả</th>
                  <th>Chỉnh sửa</th>
                  <th style="color:red;">Nguy Hiểm!</th>
                </tr>
        </tfoot>
	</table>
</div>
</div>
<?php include("addform.php"); ?>
</section>
</div>