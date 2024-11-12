<?php date_default_timezone_set("Asia/Jakarta");?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link type="text/css" rel="stylesheet" href="assets/panel/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/dist/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/dist/css/AdminLTE.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/dist/css/skins/_all-skins.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/iCheck/flat/blue.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/morris/morris.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/datepicker/datepicker3.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/daterangepicker/daterangepicker-bs3.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/select2/select2.min.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/datatables/dataTables.bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/plugins/iCheck/all.css">
    <link type="text/css" rel="stylesheet" href="assets/panel/timepicker/timepicker.min.css"/>
    
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
        
            <!-- Logo -->
            <a href="panel/home" class="logo">
                <span class="logo-mini"><b>As</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Assalam</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                
                <!-- Sidebar toggle button-->
                <a href="assets/panel/#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <?php 
                            $id_user = $this->session->userdata('id_user'); 
                            $m = $this->m_admin->get_one($id_user);                            
                            $ambil = $m->row();       
                            // $tgl1 = $ambil->tgl_daftar;
                            // $tgl = date("F Y", strtotime($tgl1));
                        ?>
                        <li class="dropdown user user-menu">
                            <a href="assets/panel/#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo "<img src='assets/panel/icon/".'siswa-pr2.png'."' width='18px' class='img-circle' alt='User Image'>";?>
                                <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                            </a>

                            <ul class="dropdown-menu">

                                <!-- User image -->
                                <li class="user-header">
                                    <?php echo "<img src='assets/panel/icon/".'siswa-pr2.png'."' class='img-circle' alt='User Image'>";?>
                                    <p>
                                    <?php 
                                        echo $name = $this->session->userdata('nama'); 
                                        echo " <br> ";
                                        echo $name = $this->session->userdata('level');                                             
                                        // echo "<small>Registered since $tgl</small>";
                                    ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left"><a href="panel/profil" class="btn btn-default btn-flat">Profile</a></div>
                                    <div class="pull-right"><a href="panel/logout" class="btn btn-default btn-flat">Sign out</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
      </header>