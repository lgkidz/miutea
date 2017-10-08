<center>
	<form action="index.php?action=add" method="post" enctype="multipart/form-data">

	<h2>Thêm tin mới</h2>
	<table class="table">
		<tr>
			<td>Tiêu đề:</td>
			<td><input class="aff" type="text" name="title" placeholder="Tiêu đề" required></td>
		</tr>
		<tr>
			<td>Hình ảnh:</td>
			<td><input type="file" name="imgx" required></td>
		</tr>
		<tr>
			<td>Nội dung</td>
			<td><textarea class="aff" name="body" placeholder="Nội dung" required></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input class="btn btn-primary" type="submit" name="newsubmit"></td>
		</tr>
	</table>
	</form>
</center>