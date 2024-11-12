<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <?php               
              $id_user = $this->session->userdata('id_user'); 
              // $m    = $this->m_admin->get_one($id_user);                            
              // $ambil= $m->row();                                                    
              echo "<img src='assets/panel/icon/".'siswa-pr2.png'."' width='18px' class='img-circle' alt='User Image'>";
              ?>
            </div>
            <div class="pull-left info">
              <p>
                <?php echo $name = $this->session->userdata('nama');  ?>
              </p>
              <a href="panel/home"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php 
          $level = $this->session->userdata('level');
          if($level=='administrator' or $level=='super admin'){
          ?>
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="
            <?php 
            if($isi=='dashboard'){
              echo "active";
            } 
            ?>
            treeview">
              <a href="panel/home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>              
            </li>    

            <li class="
            <?php 
            if($isi=='produk' || $isi=='user' || $isi=='pembayaran_taaruf'){
              echo "active";
            } 
            ?>
            treeview">
              <a href="assets/panel/#">
                <i class="fa fa-pie-chart"></i>
                <span>Administrasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php 
                  if($isi=='produk'){
                    echo "active";
                  } 
                  ?>"><a href="admin/produk"><i class="fa fa-circle-o"></i> Produk</a></li>    
                  <li class="<?php 
                  if($isi=='user'){
                    echo "active";
                  } 
                  ?>"><a href="admin/user"><i class="fa fa-circle-o"></i> User</a></li>  
                  <li class="<?php 
                  if($isi=='pembayaran_taaruf'){
                    echo "active";
                  } 
                  ?>"><a href="pembayaranTaaruf"><i class="fa fa-circle-o"></i> Pembayaran taaruf</a></li>              
              </ul>
            </li>        
            
                      
          </ul>

          <?php 
          }
          ?>


        </section>
        <!-- /.sidebar -->
      </aside>