 <div style="margin-top: 25px;" class="container">
  <div class="panel-group">
   <?php foreach($resultset as $fb){ ?>
    <div style="margin-bottom:25px;" class="panel panel-default">
      <div class="panel-heading">
      	<?php echo $fb->tieu_de; ?> - Đăng lúc <?php echo $fb->gio_dang; ?>
      	<span id="edit" class="glyphicon glyphicon-cog" data-toggle="modal" data-target="#md<?php echo $fb->ma_tin?>" style="margin-left: 15px;"></span>
      	<a style="float: right" href="index.php?action=delete&id=<?php echo $fb->ma_tin?>" onClick="return confirm('Bạn chắc chắn xóa tin này chứ?');"><span class="glyphicon glyphicon-remove"></span></a>
      	<div id="md<?php echo $fb->ma_tin?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi Nội dung tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $fb->ma_tin;?>" method="post">
      					<div class="modal-body">
        					<table style="width:100%;">
        						<tr>
        							<td>Tiêu đề</td>
        							<td><input type="text" name="etitle" value="<?php echo $fb->tieu_de;?>" required></td>
        						</tr>
        						<tr>
        							<td>Nội dung</td>
        							<td><textarea style="width:500px;height:150px;" name="ebody" required><?php echo $fb->noi_dung;?></textarea></td>
        						</tr>
        					</table>
      					</div>
      					<div class="modal-footer">
        					<input class="btn btn-primary" type="submit" name="esubmit">
      					</div>
      					</form>
    				</div>
  				</div>
			</div>
      </div>
      <div class="panel-body">
      	<img style="height: 75px;width: 75px;" src="<?php echo $fb->hinh_anh;?>">
      	<hr>
      	<?php echo $fb->noi_dung; ?>
      </div>
    </div>
   <?php } ?>
  </div>
</div>