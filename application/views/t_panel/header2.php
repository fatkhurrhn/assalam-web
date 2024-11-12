
<!DOCTYPE html>
<html>
  <head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <?php 
    $s = "select * from tabel_setting where id_setting = 1";
    $r = $this->db->query($s)->row();
    ?>
    <link rel="shortcut icon" href="assets/web/images/<?php echo $r->logo_favicon ?>">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/panel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="assets/panel/font-awesome/css/font-awesome.min.css">

    
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/panel/dist/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/panel/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/panel/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/panel/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="assets/panel/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="assets/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="assets/panel/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/panel/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="assets/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="assets/panel/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="assets/panel/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/panel/plugins/iCheck/all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="assets/panel/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="assets/panel/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
    
    ?>
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    
      

      <!-- Content Wrapper. Contains page content -->
