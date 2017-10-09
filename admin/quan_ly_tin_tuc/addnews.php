<div class="box box-primary">
            <form action="?action=add" method="post" enctype="multipart/form-data">
            <div class="box-header with-border">
              <h3 class="box-title">Viêt bài mới</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="title" placeholder="Tiêu đề" required>
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="body" required>
                      
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Hình ảnh
                  <input type="file" name="img" required>
                </div>
                <p class="help-block">Max. 8MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" name="subnew" class="btn btn-primary"><i class="fa fa-pencil"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
            </form>
</div>