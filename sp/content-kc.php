
<div class="container-fluid">
     <div class="container-fluid">
          <img src="../core_images/content.jpg">
    </div>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>KEM CHEESE</h2>
    </div>
  </div>
  <div id="content-ts" class="container text-center">
	<?php foreach($result as $ob){ ?>
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
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
     <?php
		if(isset($_GET["page"])){
			$p = $_GET["page"];
		}
		else{
			$p = 1;
		}
	 ?>
      <li <?php if($p==1)echo "class='disabled'"; ?>> <a <?php if($p!=1)echo "href=?page=".($p-1);?> aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
      <?php
      	for($i = 1;$i<=$n_o_p;$i++){
		?>
		<li><a href="?page=<?php echo $i;?>"><?php echo $i;?></a></li>
		
		<?php		
		}
	  ?>
      <li <?php if($p==$n_o_p)echo "class='disabled'"; ?>> <a <?php if($p!=$n_o_p)echo "href=?page=".($p+1);?> aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
    </ul>
  </nav>
  </div>
</div>
</div>
  
  <!-- /container -->