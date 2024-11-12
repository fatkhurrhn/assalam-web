
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        
        <strong>Copyright &copy; 2016 <a target="_blank"></a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="assets/panel/#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="assets/panel/#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="assets/panel/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="assets/panel/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="assets/panel/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/panel/plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <!-- jQuery UI 1.11.4 -->
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      // $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->    
    <!-- Morris.js charts -->  
    <!-- ChartJS 1.0.1 -->
  



    <!-- FastClick -->    
    
    <script src="assets/panel/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/panel/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="assets/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/panel/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    
    <script src="assets/panel/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="assets/panel/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="assets/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="assets/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="assets/panel/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/panel/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="assets/panel/dist/js/pages/dashboard.js"></script-->
    <!-- AdminLTE for demo purposes -->
    <script src="assets/panel/dist/js/demo.js"></script>          
    <script src="assets/panel/plugins/iCheck/icheck.min.js"></script>
    <script src="assets/panel/plugins/select2/select2.full.min.js"></script>
    <script src="assets/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="assets/panel/timepicker/timepicker.min.js"></script>
    <!-- diatas adalah library untuk select jam dengan format 24 -->
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>

    <script>
    $(function() {
      $('#tanggal').datepicker({
            format:"dd-mm-yyyy"            
        });
    });
    $(function() {
      $('#tanggal2').datepicker({
            format:"dd-mm-yyyy"            
        });
    });
    $(function() {
      $('#tanggal6').datepicker({
            format:"DD, dd-mm-yyyy"            
        });
    });
       

    scrollDown = function(){
      var rowH = $$('dtable1').config.rowHeight;  
      var length = $$('dtable1').count();    
      for ( var i=0; i<Math.floor(length/4); i++){
      (function(ind) {
        setTimeout(function(){          
              $$('dtable1').scrollTo(0, ind*rowH);
            }, (500 * ind));
      })(i); 
      }
    };

    

      $(function () {
        $('#example3').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
        $('#example2').DataTable({
          paging: true,
          lengthChange: true,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: true         
        });
        $('#example_auto').DataTable({
          paging: true,
          lengthChange: true,
          scrollY:"200px",
          scrollCollapse: true,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: true         
        });
      });

     //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
      });

    </script>

    <script type="text/javascript" src="assets/panel/plugins/tinymce/tinymce.min.js"></script>
    <!-- ASC Elearning start : tambahkan validasi, khusus non elearning -->
    <?php if ( $this->uri->segment(1) != 'elearning' ) : ?>
    <script type="text/javascript">
    tinymce.init({
        selector:"textarea",
        theme:"modern",
        //min_width: 400,
      //  width: 500,
        //height: 400,
        plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
       style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
      ]

        })
    </script>
    <?php endif; ?>
    <!-- ASC Elearning end -->
      <script type="text/javascript" src="assets/panel/jquery.maskedinput.js"></script>
    
      <script>
        jQuery(function($){
            $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#jam_awal").mask("99:99");
            $("#jam_akhir").mask("99:99");
            $("#jam").mask("99:99");
        });
      

        $(document).ready(function() {
          $("#check-all").click(function () {
              $(".data-check").prop('checked', $(this).prop('checked'));
          });
        });
      </script>
      <!-- ASC Elearning start -->
      <script type="text/javascript">
        function init_datatable(tableId, ajaxUri, columnDefs)
        {
            let table = $(tableId).DataTable
            ({
              'select'      : true,
              'paging'      : true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              "scrollX"     : true,
              "scrollY"     : "400px",
              'autoWidth'   : true,
              "scrollCollapse" : false,
              "processing"  : true,
              "serverSide"  : true,
              "order"       : [],
              "colReorder"  : false,
              "columnDefs" : columnDefs,
              "ajax"        :
              {
                "url"   : "<?php echo base_url().'elearning/asc_ajax_dt/'; ?>" + ajaxUri,
                "type"  : "POST"
              }
            }); // datatable init
            // hide column 0
            table.column(0).visible(false);
            return table;
        }

        function init_select2(cbId, ajaxUri)
        {
            let cbMapel = $(cbId).select2({
                ajax: {
                    url: "<?php echo base_url().'elearning/asc_ajax_dt/';?>" + ajaxUri,
                    delay : 150, //milisecond
                    dataType: 'json',
                    data: function (params)
                    {
                      var query = {
                        search: params.term
                      }
                      // Query parameters will be ?search=[term]&type=public
                      return query;
                    },
                    processResults: function (data)
                    {
                      return {
                        results: data.items
                      };
                    }
                }
            });
        }
      </script>
      <?php
            $js = $this->session->flashdata('js_page');
            if ( !empty($js) )
            {
                $this->load->view($js);
            }
            $this->session->set_flashdata('js_page','');
      ?>
      <!-- InputMask -->
    <script src="assets/panel/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="assets/panel/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="assets/panel/plugins/input-mask/jquery.inputmask.extensions.js"></script>
      <!-- ASC Elearning end -->
  </body>
</html>

