<div class="content-wrapper">
<script>
	function copythis(id){
		var x = document.getElementById(id).innerHTML;
		if(document.getElementById('to').value.indexOf(x) == -1){
			document.getElementById('to').value = document.getElementById('to').value + x + ";";
		}
	}
</script>
	<section class="content">
	<div class="box">
	<div class="box-header">
              <h3 class="box-title">Tin tức</h3>
            </div>
		<div class="box-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
                <tr>
                  <th>Mã Subscribers</th>
                  <th>Email</th>
                  <th>Send email</th>
                </tr>
 		</thead>
        <tbody>
        	<?php foreach($resultset as $ob){?>
	<tr>
		<td><?php echo $ob->ma_sub; ?></td>
		<td id="<?php echo $ob->ma_sub;?>" class="emails"><?php echo $ob->email; ?></td>
		<td><button onClick="copythis('<?php echo $ob->ma_sub;?>');" class="btn btn default">Copy this email to the mail section</button></td>
	</tr>
	<?php } ?>
        </tbody>
        <tfoot>
                <tr>
                  <th>Mã Subscribers</th>
                  <th>Email</th>
                  <th>Send email</th>
                </tr>
        </tfoot>
	</table>
</div>
</div>
<?php include("addnews.php"); ?>
	</section>
</div>