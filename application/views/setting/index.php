<!DOCTYPE html>
<html lang="en">

<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $judul ?></title>

		<!-- Bootstrap core CSS -->

		<link href="assets/web/setting/css/bootstrap.min.css" rel="stylesheet">

		<link href="assets/web/setting/fonts/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/web/setting/css/animate.min.css" rel="stylesheet">

		<!-- Custom styling plus plugins -->
		<link href="assets/web/setting/css/custom.css" rel="stylesheet">
		<link href="assets/web/setting/css/icheck/flat/green.css" rel="stylesheet">


		<script src="assets/web/setting/js/jquery.min.js"></script>

		<!--[if lt IE 9]>
				<script src="assets/web/setting/../assets/js/ie8-responsive-file-warning.js"></script>
				<![endif]-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
					<script src="assets/web/setting/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
					<script src="assets/web/setting/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
<style type="text/css">
.progress {
    margin-top: 30px;
    width: 400px;
}

</style>
</head>
<body>

<div class="container body">
	<div class="main_container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
							<div class="x_title">
									<h1>Installation Assistant</h1>
									<p>Selamat datang di <red>web_absence</red> installation process. Ikuti langkah-langkah proses instalasi aplikasi ini dengan benar.</p>
									<div class="clearfix"></div>
							</div>
							<div class="x_content">


									<!-- Smart Wizard -->									
									<div id="wizard" class="form_wizard wizard_horizontal">
											<ul class="wizard_steps">
													<li>
															<a href="assets/web/setting/#step-1">
																	<span class="step_no">1</span>
																	<span class="step_descr">
													Step #1<br />
													<small>Compability Check</small>
											</span>
															</a>
													</li>
													<li>
															<a href="assets/web/setting/#step-2">
																	<span class="step_no">2</span>
																	<span class="step_descr">
													Step #2<br />
													<small>System Configuration</small>
											</span>
															</a>
													</li>
													<li>
															<a href="assets/web/setting/#step-3">
																	<span class="step_no">3</span>
																	<span class="step_descr">
													Step #3<br />
													<small>Installation System</small>
											</span>
															</a>
													</li>
													<li>
															<a href="assets/web/setting/#step-4">
																	<span class="step_no">4</span>
																	<span class="step_descr">
													Step #4<br />
													<small>Final</small>
											</span>
															</a>
													</li>
											</ul>
											<div id="step-1">
												<div class="col-md-12">
													<div class="col-md-6">
														<h5>Kami sedang melakukan proses verifikasi kompabilitas sistem anda.</h5>
														<div class="progress">
												        <div id="proses_awal" class="progress-bar progress-bar-success" style="width: 0%;"></div>
												    </div>
													</div>
													<div class="col-md-6">
														<div id="hasil">
															<div class="alert alert-success alert-dismissible fade in" role="alert">                                  
                                  <h2><strong><i class="fa fa-check"></i> Sukses!</strong> Sistem anda sudah memenuhi untuk proses instalasi!</h2>
                              </div>
											    	</div>
													</div>
												</div>																								    
											</div>
											<div id="step-2">
												<div class="col-md-12">
													<div class="col-md-6">
														<h5>Konfigurasi database Anda dengan mengisi field berikut ini.</h5>
														<form class="form-horizontal form-label-left">

                              <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat server 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="localhost" id="server" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Database 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="text" value="dbs_absence" id="dbname" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">User Database</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="user" value="root" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password Database</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="password" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                  </div>
                              </div>
                              <div class="form-group">                                  
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <button type="button" onclick="buat_db()" class="btn btn-primary">Buat Database dan cek koneksi!</button>
                                  </div>
                              </div>
                                                           

                          </form>
													</div>
													<div class="col-md-6">
														<div id="hasil2">
															<div class="alert alert-success alert-dismissible fade in" role="alert">                                  
                                  <h2><strong><i class="fa fa-check"></i> Sukses!</strong> Koneksi ke database berhasil!</h2>
                              </div>
											    	</div>
											    	<div id="hasil3">
															<div class="alert alert-danger alert-dismissible fade in" role="alert">                                  
                                  <h2><strong><i class="fa fa-close"></i> Gagal!</strong> Koneksi gagal atau database sudah ada!</h2>
                              </div>
											    	</div>
													</div>
												</div>	
											</div>
											<div id="step-3">
												<div class="col-md-12">
													<div class="col-md-6">
														<h5>Proses import database.</h5>														                             
                          	<div class="progress">
												        <div id="proses_bar" class="progress-bar progress-bar-success" style="width: 0%;"></div>
												    </div>
													</div>
													<div class="col-md-6">
														<div id="hasil4">
															<div class="alert alert-success alert-dismissible fade in" role="alert">                                  
                                  <h2><strong><i class="fa fa-check"></i> Sukses!</strong> Import database berhasil!</h2>
                              </div>
											    	</div>
											    	<div id="hasil5">
															<div class="alert alert-danger alert-dismissible fade in" role="alert">                                  
                                  <h2><strong><i class="fa fa-close"></i> Gagal!</strong> Import database gagal!</h2>
                              </div>
											    	</div>
													</div>
												</div>
											</div>
											<div id="step-4">
													<div class="alert alert-success alert-dismissible fade in" role="alert">                                  
                              <h2><strong><i class="fa fa-check"></i> Selamat!</strong> Aplikasi siap digunakan!</h2>
                          </div>
											</div>

									</div>
									<!-- End SmartWizard Content -->





									<!-- End SmartWizard Content -->


							</div>
					</div>
			</div>
		</div>
	</div>
</div>

		<div id="custom_notifications" class="custom-notifications dsp_none">
				<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
				</ul>
				<div class="clearfix"></div>
				<div id="notif-group" class="tabbed_notifications"></div>
		</div>

		<script src="assets/web/setting/js/bootstrap.min.js"></script>

		<!-- chart js -->
		<script src="assets/web/setting/js/chartjs/chart.min.js"></script>
		<!-- bootstrap progress js -->
		<script src="assets/web/setting/js/progressbar/bootstrap-progressbar.min.js"></script>
		<script src="assets/web/setting/js/nicescroll/jquery.nicescroll.min.js"></script>
		<!-- icheck -->
		<script src="assets/web/setting/js/icheck/icheck.min.js"></script>

		<script src="assets/web/setting/js/custom.js"></script>
		<!-- form wizard -->
		<script type="text/javascript" src="assets/web/setting/js/wizard/jquery.smartWizard.js"></script>
		<script type="text/javascript">
				$(document).ready(function () {
						// Smart Wizard 	
						$('#wizard').smartWizard({

						});

						function onFinishCallback() {
								//$('#wizard').smartWizard('showMessage', 'Finish Clicked');
								//window.location.href = 'http://localhost/web_absence';
								alert("ok");
						}
				});

				$(document).ready(function () {
						// Smart Wizard	
						$('#wizard_verticle').smartWizard({
								transitionEffect: 'slide'
						});

				});
		</script>
<script type="text/javascript">
function buat_db(){		
  var dbname    = $("#dbname").val();
  var server    = $("#server").val();
  var user    	= $("#user").val();
  var password  = $("#password").val();  

  if(dbname==""){
      alert("Pastikan nama database sudah benar...!");
      return false;
  }else{
      $.ajax({
          url : "<?php echo site_url('setting/set_db')?>",
          type:"POST",
          data:"dbname="+dbname+"&server="+server+"&user="+user+"&password="+password,
          cache:false,
          success:function(msg){            
              data=msg.split("|");
              if(data[0]=="nihil"){
                $('#hasil2').show();
                //proses();
                import_db();
                proses();
              }else{
                $('#hasil3').show();
                import_db();                
                proses();
              }                
          }
      })    
  }
}
function import_db(){		
  var file    = $("#file").val();  
  if(file==""){
      alert("Pastikan nama database sudah benar...!");
      return false;
  }else{
      $.ajax({
          url : "<?php echo site_url('import/index')?>",
          type:"POST",
          data:"file="+file,
          cache:false,
          success:function(msg){            
              data=msg.split("|");
              if(data[0]=="nihil"){
                //$('#hasil2').show();
                //proses();
              }                
          }
      })    
  }
}

function proses(){
	var progress = setInterval(function() {
    var $bar = $('#proses_bar');
    
    if ($bar.width()==400) {
        clearInterval(progress);
        $('.progress').removeClass('active');
        $('#hasil4').show();
        setTimeout(function () {
				   window.location.href='http://localhost/web_absence';
				}, 4000);
        //window.location.href='http://localhost/web_absence';
    } else {
        $bar.width($bar.width()+40);
    }
    $bar.text($bar.width()/4 + "%");
}, 800);
}
</script>
<script>
$(document).on('click','#import', function(e) {
import_db();
proses();
});

</script>
<script>
	$('#hasil2').hide();
	$('#hasil3').hide();
	$('#hasil').hide();
	$('#hasil4').hide();
	$('#hasil5').hide();

  var progress = setInterval(function() {
    var $bar = $('#proses_awal');
    
    if ($bar.width()==400) {
        clearInterval(progress);
        $('.progress').removeClass('active');
        $('#hasil').show();
    } else {
        $bar.width($bar.width()+40);
    }
    $bar.text($bar.width()/4 + "%");
}, 800);

</script>
</body>

</html>