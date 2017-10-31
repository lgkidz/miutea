<div class="content-wrapper">
	<section class="content">
	<div class="box">
	<div class="box-header">
              <h3 class="box-title">Tin tức</h3>
            </div>
		<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
                <tr>
                  <th>Mã tin</th>
                  <th>Tiêu đề</th>
                  <th>Hình ảnh</th>
                  <th>Nội Dung</th>
                  <th>Giờ đăng</th>
                  <th style="color:red;">Nguy Hiểm!</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($resultset as $ob){?>
	<tr>
		<td><?php echo $ob->ma_tin; ?></td>
		<td><?php echo $ob->tieu_de; ?></td>
		<td><img height="128" width="128" src="../../news/img/<?php echo $ob->hinh_anh; ?>"></td>
		<td><textarea style="width:400px" readonly><?php echo $ob->noi_dung; ?></textarea></td>
		<td><?php echo $ob->gio_dang; ?></td>
		<td>
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_tin;?>" onClick="return confirm('Bạn thật sự muốn xóa sản phẩm này?');">Xóa tin này</a>
		</td>
	</tr>
	<?php } ?>
        </tbody>
        <tfoot>
                <tr>
                  <th>Mã tin</th>
                  <th>Tiêu đề</th>
                  <th>Hình ảnh</th>
                  <th>Giờ đăng</th>
                  <th>Giờ đăng</th>
                  <th style="color:red;">Nguy Hiểm!</th>
                </tr>
        </tfoot>
	</table>
</div>
</div>
<?php include("addnews.php"); ?>
	</section>
</div>