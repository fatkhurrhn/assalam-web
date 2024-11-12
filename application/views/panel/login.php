<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIAKAD | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="assets/panel/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/panel/dist/ionicons.min.css">
    <link rel="stylesheet" href="assets/panel/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/panel/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="assets/panel/font-awesome/css/font-awesome.min.css">
    
    
</head>

<body background="assets/web/bg-1.jpg" style="background-repeat: no-repeat;background-size: cover;">    
    <div class="login-box">
        <div class="login-logo">
            
        </div>

        <div class="login-box-body" style="border-radius: 5px;">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="admin/login" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" required class="form-control" placeholder="Username" autocomplete="off" autofocus="true">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" required class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        &nbsp;
                    </div>
                    <div class="col-md-8">
                        <a href="web" class="btn btn-danger btn-md pull-right"><i class="fa fa-times"></i> Cancel</a>
                        <button type="submit" class="btn btn-primary btn-md pull-right" style="margin-right: 5px;"><i class="fa fa-sign-in"></i> Sign In</button>
                    </div>
                </div>
            </form>      
            <br><br>
        </div>

        <br>
        <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {?>
            <div class="alert alert-<?php echo $_SESSION['tipe'] ?> alert-dismissable">
                <strong><?php echo $_SESSION['pesan'] ?></strong>
                <button class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>  
                </button>
            </div>
        <?php } $_SESSION['pesan'] = '';?>
    </div>

    <script src="assets/panel/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="assets/panel/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/panel/plugins/iCheck/icheck.min.js"></script>
</body>
</html>