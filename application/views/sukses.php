<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $var_title; ?> | Yuk Kerja !</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

 <body class="hold-transition login-page login">
    <div class="wow animated bounceIn">
      <div class="login-logo">
        <center><br><br><img src="<?=base_url();?>assets/img/log.png" class="img-responsive img" alt=""></center>
      </div><!-- /.login-logo -->
      <div class="container">
        <?php if($this->session->flashdata('info')): ?>
        <div class="alert alert-success" role="alert">
          
          <?php echo $this->session->flashdata('info'); ?>
          <br><br><center><a href="<?=base_url(); ?>" title="Login">Klik Disini</a> untuk Login</center>
        </div>
      <?php endif; ?>
        
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