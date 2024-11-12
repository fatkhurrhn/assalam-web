<!--?php 
$tgl  = date('d');
if($tgl=='01' or $tgl=='10'){
  echo "<meta http-equiv='refresh' content='0; url=".base_url()."adm/tunggakan/mailku'>";
}
?-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="assets/panel/#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">                                              

        

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
            
              $d  = "SELECT COUNT(tabel_user.id_user) as jum FROM tabel_user";
            
            $in = $this->db->query($d);
            $re  = $in->row();
            ?>
              <h3><?php echo $re->jum ?> orang</h3>
              <p>User Aktif</p>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <?php
            $level = $this->session->userdata('level');
            if($level=='administrator' or $level=='super admin'){ 
            ?>
            <a href="user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            <?php } ?>
          </div>
        </div><!-- ./col -->
        

        </div><!-- /.row -->
        <!-- Main row -->
        <!-- <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-graphic"></i>
              <h3 class="box-title">Infografis Siswa</h3>
              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>                    
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <div id="container" style="min-width: 500px; height: 400px; margin: 0 auto"></div>
            </div>
          </div>
        </section>
        </div> -->

        

        </div>

  </section>
</div>

<script src="assets/panel/js_chart/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="assets/panel/js_chart/highcharts.js" type="text/javascript"></script>
<script src="assets/panel/js_chart/exporting.js" type="text/javascript"></script>
<script type="text/javascript">
    var chart1; // globally available
$(document).ready(function() {
      
}); 
</script>
<script type="text/javascript">
    var chart1; // globally available
$(document).ready(function() {
     
}); 
</script>
<script type="text/javascript">
    var chart1; // globally available
$(document).ready(function() {
}); 
</script>