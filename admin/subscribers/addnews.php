<script>
function copye(){
	var x = document.querySelectorAll(".emails");
	document.getElementById("to").value = "";
	for(var i = 0;i<x.length;i++){
		document.getElementById("to").value = document.getElementById("to").value + x[i].innerHTML + ";";
	}	
}
</script>
<div class="box box-primary">
           <form method="post" action="mailer.php">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
              <div class="pull-right">
                <button type="button" onClick="copye();" class="btn btn-default">Copy all email addresses to send email</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
               <label for="to"><h4>To: </h4><span style="opacity: 0.7;font-size: 14px">(Each email separated by a ';' . Be really aware!)</span> </label>
                <input type="text" class="form-control" id="to" placeholder="To:" name="to" required>
              </div>
              <label for="subject"><h4>Subject: </h4></label>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject:" name="subject">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="body" class="form-control" style="height: 300px" required>
                      
                    </textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
            </form>
</div>