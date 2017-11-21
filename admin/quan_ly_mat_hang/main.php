<style>
	.trr{
		height: 42px;
	}
</style>
<div class="content-wrapper">
	<section class="content">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#all" data-toggle="tab">All</a></li>
              <li><a href="#ts" data-toggle="tab">Trà Sữa</a></li>
              <li><a href="#kc" data-toggle="tab">Kem Cheese</a></li>
              <li><a href="#db" data-toggle="tab">Đá bào</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="all">
                <table class="table table-bordered table-striped tablex">
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
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mda<?php echo $ob->ma_ts?>">Chỉnh sửa</button>
			<div id="mda<?php echo $ob->ma_ts?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi thông tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $ob->ma_ts?>"  method="post">
      					<div class="modal-body">
        					<table style="width: 100%">
        						<tr class="trr">
        							<td>Mã ts</td>
        							<td><input class="form-control" type="text" name="eid" value="<?php echo $ob->ma_ts;?>" readonly></td>
        						</tr>
        						<tr class="trr">
        							<td>Tên</td>
        							<td><input class="form-control" type="text" name="ename" value="<?php echo $ob->ten_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Loại</td>
        							<td>
        								<select class="form-control" name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai_ts; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr class="trr">
        							<td>Giá</td>
        							<td><input class="form-control" type="number" name="eprice" value="<?php echo $ob->gia_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Mô tả</td>
        							<td><input class="form-control" type="text" name="edes" value="<?php echo $ob->mo_ta;?>" required></td>
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
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ts;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');"><button class="btn btn-danger">Xóa Sản phẩm</button></a>
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
			<div class="tab-pane" id="ts">
                <table class="table table-bordered table-striped tablex">
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
        	<?php foreach($ts as $ob){?>
	<tr>
		<td><?php echo $ob->ma_ts; ?></td>
		<td><?php echo $ob->ten_ts; ?></td>
		<td><?php echo $ob->ten_loai; ?></td>
		<td><?php echo $ob->gia_ts; ?></td>
		<td><img height="128" width="128" src="../../core_images/<?php echo $ob->hinh_anh_ts; ?>"></td>
		<td><?php echo $ob->mo_ta; ?></td>
		<td>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdt<?php echo $ob->ma_ts?>">Chỉnh sửa</button>
			<div id="mdt<?php echo $ob->ma_ts?>" class="modal fade" role="dialog">
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
        						<tr class="trr">
        							<td>Mã ts</td>
        							<td><input class="form-control" class="form-control" type="text" name="eid" value="<?php echo $ob->ma_ts;?>" readonly></td>
        						</tr>
        						<tr class="trr">
        							<td>Tên</td>
        							<td><input class="form-control" type="text" name="ename" value="<?php echo $ob->ten_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Loại</td>
        							<td>
        								<select class="form-control" name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai_ts; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr class="trr">
        							<td>Giá</td>
        							<td><input class="form-control" type="number" name="eprice" value="<?php echo $ob->gia_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Mô tả</td>
        							<td><input class="form-control" type="text" name="edes" value="<?php echo $ob->mo_ta;?>" required></td>
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
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ts;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');"><button class="btn btn-danger">Xóa Sản phẩm</button></a>
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
              <div class="tab-pane" id="kc">
                <table class="table table-bordered table-striped tablex">
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
        	<?php foreach($kc as $ob){?>
	<tr>
		<td><?php echo $ob->ma_ts; ?></td>
		<td><?php echo $ob->ten_ts; ?></td>
		<td><?php echo $ob->ten_loai; ?></td>
		<td><?php echo $ob->gia_ts; ?></td>
		<td><img height="128" width="128" src="../../core_images/<?php echo $ob->hinh_anh_ts; ?>"></td>
		<td><?php echo $ob->mo_ta; ?></td>
		<td>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdk<?php echo $ob->ma_ts?>">Chỉnh sửa</button>
			<div id="mdk<?php echo $ob->ma_ts?>" class="modal fade" role="dialog">
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
        						<tr class="trr">
        							<td>Mã ts</td>
        							<td><input class="form-control" type="text" name="eid" value="<?php echo $ob->ma_ts;?>" readonly></td>
        						</tr>
        						<tr class="trr">
        							<td>Tên</td>
        							<td><input class="form-control" type="text" name="ename" value="<?php echo $ob->ten_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Loại</td>
        							<td>
        								<select class="form-control" name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai_ts; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr class="trr">
        							<td>Giá</td>
        							<td><input class="form-control" type="number" name="eprice" value="<?php echo $ob->gia_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Mô tả</td>
        							<td><input class="form-control" type="text" name="edes" value="<?php echo $ob->mo_ta;?>" required></td>
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
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ts;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');"><button class="btn btn-danger">Xóa Sản phẩm</button></a>
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
              <div class="tab-pane" id="db">
                <table class="table table-bordered table-striped tablex">
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
        	<?php foreach($db as $ob){?>
	<tr>
		<td><?php echo $ob->ma_ts; ?></td>
		<td><?php echo $ob->ten_ts; ?></td>
		<td><?php echo $ob->ten_loai; ?></td>
		<td><?php echo $ob->gia_ts; ?></td>
		<td><img height="128" width="128" src="../../core_images/<?php echo $ob->hinh_anh_ts; ?>"></td>
		<td><?php echo $ob->mo_ta; ?></td>
		<td>
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdd<?php echo $ob->ma_ts?>">Chỉnh sửa</button>
			<div id="mdd<?php echo $ob->ma_ts?>" class="modal fade" role="dialog">
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
        						<tr class="trr">
        							<td>Mã ts</td>
        							<td><input class="form-control" type="text" name="eid" value="<?php echo $ob->ma_ts;?>" readonly></td>
        						</tr>
        						<tr class="trr">
        							<td>Tên</td>
        							<td><input class="form-control" type="text" name="ename" value="<?php echo $ob->ten_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Loại</td>
        							<td>
        								<select class="form-control" name="ek">
        									<?php foreach($ml as $m){ ?>
												<option value="<?php echo $m->ma_loai_ts; ?>"><?php echo $m->ten_loai; ?></option>
        									<?php }?>
        								</select>
        							</td>
        						</tr>
        						<tr class="trr">
        							<td>Giá</td>
        							<td><input class="form-control" type="number" name="eprice" value="<?php echo $ob->gia_ts;?>" required></td>
        						</tr>
        						<tr class="trr">
        							<td>Mô tả</td>
        							<td><input class="form-control" type="text" name="edes" value="<?php echo $ob->mo_ta;?>" required></td>
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
			
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ts;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');"><button class="btn btn-danger">Xóa Sản phẩm</button></a>
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
            <!-- /.tab-content -->
          </div>
          <?php include("addform.php"); ?>
	</section>
</div>