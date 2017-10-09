<div class="content-wrapper">
	<section class="content">
		<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Members</h3>

                  <div class="box-tools pull-right">
                  
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php foreach($member as $mb){ ?>
                    <li data-toggle="modal" data-target="#md<?php echo $mb->ma_tv?>">
                      <img height="128" width="128" src="../../core_images/MiuTea.png" alt="User Image">
                      <a class="users-list-name" ><?php echo $mb->ten_tv; ?></a>
                      <span class="users-list-date"><?php echo $mb->email; ?></span>
                      
                    </li>
                    <div id="md<?php echo $mb->ma_tv?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title"><?php echo $mb->ten_tv; ?></h4>
      					</div>
      					<div class="modal-body">
        					<h4>Số điện thoại: <?php echo $mb->sdt; ?></h4>
        					<h4>Địa chỉ: <?php echo $mb->diachi; ?></h4>
        					<h4>Email: <?php echo $mb->email; ?></h4>
        					<h4>Giới tính: <?php echo $mb->gioi_tinh==0?"nữ":"nam"; ?></h4>
      					</div>
      					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
      					</div>
    				</div>
  				</div>
			</div>
                    <?php } ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                 <?php if(isset($_GET["view"]) && $_GET["view"] == "all"){ ?>
                 	<a href="?view=less" class="uppercase">View Less</a>
                 <?php }else{ ?>
                  <a href="?view=all" class="uppercase">View All Members</a>
                  <?php } ?>
                </div>
                <!-- /.box-footer -->
              </div>
	</section>
</div>