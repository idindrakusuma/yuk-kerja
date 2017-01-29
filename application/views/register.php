<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $var_title; ?> | Yuk Kerja !</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="theme-color" content="#3498db">
    <link rel="shortcut icon" href="<?=base_url(); ?>assets/img/fav.png">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/dist/css/style.css">
  </head>
</head>

 <body class="hold-transition login-page login ">
    <div class="login-box wow animated bounceIn">
      <div class="login-logo">
        <center><img src="<?=base_url();?>assets/img/log.png" class="img-responsive img" alt=""></center>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Lengkapi Data ini</p>
        <?php if($this->session->flashdata('info')): ?>
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php echo $this->session->flashdata('info'); ?>
        </div>
      <?php endif; ?>
        <form action="<?=base_url();?>login/daftar" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" required="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password2" class="form-control" placeholder="Retype password" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <a href="<?=base_url();?>" class="btn btn-primary btn-block btn-flat" title=""><i class="fa fa-arrow-left"></i>  Masuk</a>
              
            </div><!-- /.col -->
            <div class="col-xs-6 pull-right">
              <button type="submit" class="btn btn-warning btn-block btn-flat">Daftar Sekarang</button> 
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <footer class="new-footer"> 
    <a href="" title="">Tentang Yuk KerjaID</a> | <a href="" title="">FAQ</a> | <a href="" title="">Umpan Balik</a> <br>    
    Copyright &copy <img src="<?=base_url();?>assets/img/fav.png" class="logo-bawah" alt=""> Yuk Kerja In</footer>

    <!-- jQuery 2.1.4 -->
    <script src="<?=base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>