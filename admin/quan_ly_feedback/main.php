 <div style="margin-top: 25px;" class="container">
  <div class="panel-group">
   <?php foreach($resultset as $fb){ ?>
    <div style="margin-bottom:25px;" class="panel panel-default">
      <div class="panel-heading"><?php echo $fb->ten_nguoi_lh; ?> / <?php echo $fb->email_nguoi_lh; ?><span style="float: right"><?php echo $fb->ngay_lh; ?></span></div>
      <div class="panel-body"><?php echo $fb->noi_dung; ?></div>
    </div>
   <?php } ?>
  </div>
</div>