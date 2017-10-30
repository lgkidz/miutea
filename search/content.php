
<div class="container-fluid">
     <div class="container-fluid">
          <img src="../core_images/content.jpg">
    </div>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>Tìm kiếm</h2>
    </div>
  </div>
  <div id="content-ts" class="container text-center">
  <h4 style="margin-bottom: 20px;">Hiển thị kết quả tìm kiếm cho "<?php echo $this->query;?>"</h4>
	<?php 
	if(sizeof($result) == 0){
		echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><center><h5>Không tìm thấy kết quả nào :(</h5></center></div>';
	}
	  else
	foreach($result as $ob){ 
	?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
      <div class="thumbnail"> <img src="../core_images/<?php echo $ob->hinh_anh_ts;?>" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
			<h4><?php echo $ob->ten_ts;?></h4>
          <span><?php echo $ob->gia_ts;?> VND</span>
          <p><a href="?addtocart=<?php echo $ob->ma_ts;?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Chọn</a> </p>
        </div>
      </div>
    </div>
    <?php }?>
</div>
</div>
  
  <!-- /container -->