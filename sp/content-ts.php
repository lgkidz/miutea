<!-- HEADER -->
<header>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center">Lorem ipsum dolor sit amet</h1>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, dicta, cupiditate consequatur necessitatibus quos libero eius ipsum qui sit molestiae.</p>
          <p>&nbsp;</p>
          <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Xem thêm</a> </p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- / HEADER --> 
<?php
	echo $n_o_p;
?>
<!--  SECTION-1 -->
<section>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>TRÀ SỮA</h2>
    </div>
  </div>
  <div class="container text-center">
	<?php foreach($result as $ob){ ?>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img style="height: 400px;width: 300px;" src="../core_images/<?php echo $ob->hinh_anh_ts;?>" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
			<h4><?php echo $ob->ten_ts;?></h4>
          <span><?php echo $ob->gia_ts;?> VND</span>
          <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
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
  
  <!-- /container -->