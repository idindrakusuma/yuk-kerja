<br>
<div class="container">
<div class="alert alert-info" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <b>Bantu Kami !</b> dengan cara memberikan kritik dan saran Anda agar kami dapat meningkan layanan kami secara maksimal.
        </div>
  <div class="box box-info">
      <div class="box-body">
        <form action="<?=base_url(); ?>main/feedback_h" method="post">
          <div class="form-group has-feedback">
            <textarea type="text" name="user" class="form-control" rows="4" placeholder="Kritik dan Saran Anda.."></textarea>
            <span class="form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-5">
            </div><!-- /.col -->
            <div class="col-xs-5 pull-right">
              <input type="submit" class="btn btn-warning btn-block btn-flat" name="login" value="Kirim"> 
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
</div>
</div>