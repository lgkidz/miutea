
<div class="container-fluid">
     <div class="container-fluid">
          <img style="width: 100%;" src="../core_images/content.jpg">
    </div>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>Đá Bào</h2>
    </div>
  </div>
  <div id="content-ts" class="container text-center">
	<?php foreach($result as $ob){ ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  data-toggle="modal" data-target="#spmodal<?php echo $ob->ma_ts;?>">
      <div class="thumbnail"> <img src="../core_images/<?php echo $ob->hinh_anh_ts;?>" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
			<h4><?php echo $ob->ten_ts;?></h4>
          <span><?php echo $ob->gia_ts;?> VND</span>
          <p><a href="?addtocart=<?php echo $ob->ma_ts;?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Chọn</a> </p>
        </div>
      </div>
    </div>
    <div class="modal fade" id="spmodal<?php echo $ob->ma_ts;?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">trà sữa có id <?php echo $ob->ma_ts;?></h4>
        </div>
        <div class="modal-body">
         <div class="row">
<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" align="center">
<div class="thumbnail detail"><img width="600" height="600" class="img-responsive wp-post-image" alt="" sizes="(max-width: 600px) 100vw, 600px"></div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" align="left">
<!--Giá SP-->
<div class="price" align="left"><span><?php echo $ob->gia_ts?></span><small>&nbsp;VND</small></div>
<!--End giá-->
<!-- Begin Form -->
<form class="form-addcart" name="form_addcart" id="form_addcart" action="?addtocart=<?php echo $ob->ma_ts;?>">
<!--Giá chọn thêm-->
<div class="pr-plus">
<span class="plus-color"> + </span>

</div>
<input type="hidden" value="" name="apid" id="apid">
<!--End thêm-->
<!--Chọn size-->
<hr>
<!--Chọn số lượng-->
<div class="soluong">
<label>Số lượng</label>
<div class="form-group">
<div class="input-group">
<select id="sl<?php echo $i;?>"><?php for($j=1;$j<=5;$j++){ ?><option value="<?php echo $j;?>"><?php echo $j;?></option><?php }?></select>
</div>
</div>
</div><!--End số lượng-->
<hr>
<div class="ice-sugar">
  <style>
	  .monthem_items{
		  margin: 5px;
	  }
	  .block{
		  float: left;
		  margin: 5px;
	  }
</style>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<label>ICE-%</label>
	<div class="radio-ice">
		<div class="block">
			<input style="width: 100%;" type="radio" id="ice70" name="ice" value="70" checked="checked" class="ice70">
			<label for="ice70"></label>
			<span style="width: 100%;">70</span>
		</div>
		<div class="block">
			<input type="radio" id="ice50" name="ice" value="50" class="ice50">
			<label for="ice50"></label>
			<span>50</span>
		</div>
		<div class="block">
			<input type="radio" id="ice30" name="ice" value="30" class="ice30">
			<label for="ice30"></label>
			<span>30</span>
		</div>
		<div class="block">
			<input type="radio" id="ice10" name="ice" value="10" class="ice10">
			<label for="ice10"></label>
			<span>10</span>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<label>SUGAR-%</label>
	<div class="radio-sugar">
		<div class="block">
			<input type="radio" id="sugar70" name="sugar" value="70" checked="checked" class="sugar70">
			<label for="sugar70"></label>
			<span>70</span>
		</div>
		<div class="block">
			<input type="radio" id="sugar50" name="sugar" value="50" class="sugar50">
			<label for="sugar50"></label>
			<span>50</span>
		</div>
		<div class="block">
			<input type="radio" id="sugar30" name="sugar" value="30" class="sugar30">
			<label for="sugar30"></label>
			<span>30</span>
		</div>
		<div class="block">
			<input type="radio" id="sugar10" name="sugar" value="10" class="sugar10">
			<label for="sugar10"></label>
			<span>10</span>
		</div>
	</div>
</div>
<div class="clearfix"></div></div>
<hr>
<!--Chọn món thêm-->
<div class="monthem"><label>Món thêm</label>
<div class="dropdown">
<button id="dd" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chọn món thêm
  <span class="caret"></span></button>

	<ul class="dropdown-menu form-group">
				<li class="monthem_items">
			<input type="checkbox" id="el-24" name="el-24" data-price="3000" value="24">
			Thạch QQ sữa tươi
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-199" name="el-199" data-price="3000" value="199">
			Thạch QQ Cà Phê
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-200" name="el-200" data-price="3000" value="200">
			QQ Sương Sáo
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-201" name="el-201" data-price="3000" value="201">
			QQ Sôcôla
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-202" name="el-202" data-price="3000" value="202">
			QQ Dâu
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-203" name="el-203" data-price="3000" value="203">
			QQ Flan
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-205" name="el-205" data-price="5000" value="205">
			Trân Châu
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-206" name="el-206" data-price="5000" value="206">
			Thuỷ Tinh Chanh Dây
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-207" name="el-207" data-price="5000" value="207">
			Thuỷ Tinh Yogurt
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-208" name="el-208" data-price="5000" value="208">
			Thuỷ Tinh Kiwi
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-209" name="el-209" data-price="5000" value="209">
			Hạt Nguyên Vị
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-210" name="el-210" data-price="5000" value="210">
			Hạt Đường Phèn
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-211" name="el-211" data-price="5000" value="211">
			Hạt Trà Xanh
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-212" name="el-212" data-price="5000" value="212">
			Hạt Cà Phê
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-213" name="el-213" data-price="5000" value="213">
			Nha Đam
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-214" name="el-214" data-price="5000" value="214">
			Hạt Trái Cây
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-215" name="el-215" data-price="12000" value="215">
			Sủi Bọt
		</li>
				<li class="monthem_items">
			<input type="checkbox" id="el-242" name="el-242" data-price="5000" value="242">
			Thuỷ Tinh Dâu
		</li>
			</ul>

</div>
</div><!--End chọn món thêm-->
</form>
<!-- End Form  add-to-cart buttons -->
			<div class="add-to-cart buttons"><a id="button_C" class="buy-now addtocart add-to-cart" onclick="return add_to_cart(form_addcart)" href="#">CHỌN</a></div>
			</div>
<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Chọn</button>
        </div>
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