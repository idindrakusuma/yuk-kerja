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
       <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url(); ?>plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->

    <!-- jvectormap -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/dist/css/style.css">
  </head>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
	    <!-- header -->
	    <?php $this->load->view('layout/header'); ?>
	    <!-- header end-->
        
	    <!-- left menu -->
	    <?php $this->load->view('layout/leftmenu'); ?>
	    <!-- left menu end-->


	      <!-- Content Wrapper. Contains page content -->
	      <br><br>
          <div class="content-wrapper">
	        <!-- breadcumb menu-->
	        <?php //$this->load->view('layout/breadcumb');?>
	      <!-- main content -->
	      	<?php $this->load->view($var_modul); ?>
	      <!-- main content end-->
	      </div><!-- /.content-wrapper -->

	     <!-- footer -->
	     <?php //$this->load->view('layout/footer'); ?>

	     <!-- rightmenu -->
	     <?php $this->load->view('layout/rightmenu'); ?>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- assets -->
    <?php $this->load->view('assets/js'); ?>
  </body>
</html>