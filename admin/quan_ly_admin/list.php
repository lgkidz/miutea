<div id="header" class="container-fluid">
	<div style="float: left;margin-right: 20px;">
		<div style="float: left">
			<img style="height: 40px;width: 40px;margin: 5px;" src="../../core_images/ava.png";>
		</div>
		<div style="float:left;margin-left: 15px;">
			<h5 style="line-height:25px;"><?php echo $_SESSION['admin_name'];?></h5>
		</div>
		<div class="dropdown" style="float: left;margin: 20px 0 0 20px">
  			<span class="glyphicon glyphicon-cog dropdown-toggle" type="button" data-toggle="dropdown">
  			<span class="caret"></span></span>
  			<ul class="dropdown-menu">
   				<li data-toggle="modal" data-target="#inmd"><a href="#">Thêm 1 admin mới vào ban quàn trị</a></li>
    			<li><a href="../adminpage.php">Quay Lại</a></li>
    			<li><a href="../index.php" onClick="return confirm('Bạn thực sự muốn thoát?');">Đăng xuất</a></li>
  			</ul>
		</div>	
	</div>
</div>
<div id="inmd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm tài khoản admin</h4>
      </div>
      <form action="index.php?action=insert" method="post">
      <div class="modal-body">
        <table>
        	<tr>
        		<td>Tên đăng nhập: </td>
        		<td><input type="text" name="newadlid" required></td>
        	</tr>
        	<tr>
        		<td>Tên Admin: </td>
        		<td><input type="text" name="newadname" required></td>
        	</tr>
        	<tr>
        		<td>Password: </td>
        		<td><input type="text" name="newadpass" required></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="insubmit">
      </div>
      </form>
    </div>

  </div>
</div>
<table id="listAll">
	<tr>
		<th>Mã admin</th>
		<th>Tên đăng nhập</th>
		<th>Tên admin</th>
		<th>Chỉnh sửa</th>
		<th style="color:red;">Nguy Hiểm!</th>
	</tr>
	<?php foreach($result as $ob){?>
	<tr>
		<td><?php echo $ob->ma_ad; ?></td>
		<td><?php echo $ob->ten_dn_ad; ?></td>
		<td><?php echo $ob->ten_ad; ?></td>
		<td>
			<?php if($ob->ma_ad == $_SESSION["admin_id_no"]){ ?>
			<button type="button" data-toggle="modal" data-target="#md<?php echo $ob->ma_ad?>">Chỉnh sửa</button>
			<div id="md<?php echo $ob->ma_ad?>" class="modal fade" role="dialog">
  				<div class="modal-dialog">
    			<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Thay đổi thông tin</h4>
      					</div>
      					<form action="index.php?action=edit&id=<?php echo $ob->ma_ad?>"  method="post">
      					<div class="modal-body">
        					<table style="width:100%;">
        						<tr>
        							<td>Mã admin</td>
        							<td><input type="text" name="editadid" value="<?php echo $ob->ma_ad;?>" readonly></td>
        						</tr>
        						<tr>
        							<td>Tên đăng nhập</td>
        							<td><input type="text" name="editadlid" value="<?php echo $ob->ten_dn_ad;?>" required></td>
        						</tr>
        						<tr>
        							<td>Mật khẩu</td>
        							<td><input id="pass" type="password" name="editadpass" value="<?php echo $ob->mat_khau;?>" required>
        							<span id="show" class="glyphicon glyphicon-eye-open" onClick="showpass();"></span>
        							<script>
									function showpass(){
										var x = document.getElementById("show").getAttribute("class");
										if(x == "glyphicon glyphicon-eye-open"){
											document.getElementById("pass").setAttribute("type", "text");
											document.getElementById("show").setAttribute("class", "glyphicon glyphicon-eye-close");
										}
										else if(x == "glyphicon glyphicon-eye-close"){
											document.getElementById("pass").setAttribute("type", "password");
											document.getElementById("show").setAttribute("class", "glyphicon glyphicon-eye-open");
										}
									}	
									</script>
        							</td>
        						</tr>
        						<tr>
        							<td>Tên admin</td>
        							<td><input type="text" name="editadname" value="<?php echo $ob->ten_ad;?>" required></td>
        						</tr>
        					</table>
      					</div>
      					<div class="modal-footer">
        					<input type="submit" class="btn btn-default" name="editadsubmit">
      					</div>
      					</form>
    				</div>
  				</div>
			</div>
			<?php 
				}
				else{
					echo "<p style='color:grey;font-size:12px'>bạn không có quyền chỉnh sửa</p>";
				}
			?>
		</td>
		<td>
			<?php if($ob->ma_ad != $_SESSION["admin_id_no"]){ ?>
				<p style="color:grey;font-size: 12px">Bạn không thể xóa tài khoản này</p>
			<?php 
				}
				else{
			?>
			<a style="color:red" href="index.php?action=delete&id=<?php echo $ob->ma_ad;?>" onClick="return confirm('Bạn thật sự muốn xóa tài khoản này? Bạn không thể khôi phục lại tài khoản sau khi xóa!');">Xóa Tài Khoản này</a>
			<?php
				}
			
			?>
		</td>
	</tr>
	<?php } ?>
</table>