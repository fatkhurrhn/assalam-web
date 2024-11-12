<base href="<?php echo base_url(); ?>" />
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $judul1; ?>
    <small><?php echo $judul2; ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="panel/home"><i class="fa fa-dashboard"></i> Home</a></li>    
    <li class="active"><?php echo $judul1; ?></li>
  </ol>
  </section>
  <section class="content">
    <?php 
    if($set=="insert"){
    ?>

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">
          <a href="adm/guru">
            <button class="btn bg-maroon btn-flat margin"><i class="fa fa-eye"></i> Lihat Data</button>
          </a>
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php                       
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {                    
            ?>                  
            <div class="alert alert-<?php echo $_SESSION['tipe'] ?> alert-dismissable">
                <strong><?php echo $_SESSION['pesan'] ?></strong>
                <button class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>  
                </button>
            </div>
            <?php
            }
                $_SESSION['pesan'] = '';                        
                    
            ?>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" action="produk/save" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required id="nama" placeholder="Nama" name="nama">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" required placeholder="Harga" name="harga">
                  </div>
                </div>        

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputEmail3" placeholder="Gambar" name="gambar">
                  </div>                                    
                </div>

              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="save" value="save" class="btn btn-info">Save</button>
                <button type="reset" class="btn btn-default pull-right">Reset</button>                
              </div><!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.box -->

    <?php 
    }elseif($set=="edit"){
      $row = $one_post->row(); 
    ?>

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">
          <a href="produk">
            <button class="btn bg-maroon btn-flat margin"><i class="fa fa-eye"></i> Lihat Data</button>
          </a>
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php                       
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {                    
            ?>                  
            <div class="alert alert-<?php echo $_SESSION['tipe'] ?> alert-dismissable">
                <strong><?php echo $_SESSION['pesan'] ?></strong>
                <button class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>  
                </button>
            </div>
            <?php
            }
                $_SESSION['pesan'] = '';                        
                    
            ?>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" action="produk/process" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $row->id_produk ?>" name="id">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required id="nama" value="<?php echo $row->nama ?>" placeholder="Nama" name="nama">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga *</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required id="harga" value="<?php echo $row->harga ?>" placeholder="Harga" name="harga">
                  </div>
                </div>      
                                              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputEmail3" placeholder="Gambar" name="gambar">
                  </div>                                    
                </div>
                

              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="s_process" value="edit" class="btn btn-info">Update</button>
                <button type="reset" class="btn btn-default pull-right">Reset</button>                
              </div><!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.box -->

    <?php 
    }elseif($set=="detail"){
      $row = $one_post->row(); 
    ?>

    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">
          <a href="produk">
            <button class="btn bg-maroon btn-flat margin"><i class="fa fa-eye"></i> Lihat Data</button>
          </a>
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php                       
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {                    
            ?>                  
            <div class="alert alert-<?php echo $_SESSION['tipe'] ?> alert-dismissable">
                <strong><?php echo $_SESSION['pesan'] ?></strong>
                <button class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>  
                </button>
            </div>
            <?php
            }
                $_SESSION['pesan'] = '';                        
                    
            ?>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" action="produk/process" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $row->id_produk; ?>" name="id">
              <div class="box-body">
                <table width="100%" border="0">
                  <tr>
                    <td width="20%">
                      <label class="control-label">Nama</label>
                    </td>
                    <td>
                      <input type="hidden" id="nama" value="<?php echo $row->nama; ?>">
                      <?php echo $row->nama; ?></td>
                    <td width="20%" align="right" rowspan="10">
                      <img src="assets/panel/images/<?php echo $row->gambar; ?>" width="200px">
                    </td>                    
                  </tr>
                  <tr>
                    <td>
                      <label class="control-label">Nama</label>
                    </td>
                    <td><?php echo $row->nama; ?></td>
                  </tr>
                  <tr>
                    <td>
                      <label class="control-label">Harga</label>
                    </td>
                    <td><?php echo $row->harga; ?></td>
                  </tr>
                                 
                </table>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="s_process" value="ubah" class="btn btn-info">Edit</button>
                <a href="produk">
                  <button type="button" class="btn btn-default pull-right">Cancel</button>                
                </a>
              </div><!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.box -->

    <?php
    }elseif($set=="view"){
    ?>

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
                      
          <a href="produk/add">
            <button type="button" class="btn bg-maroon btn-flat margin"><i class="fa fa-plus"></i> Tambah Data</button>
            <!--button onclick="return confirm('Anda Yakin Ingin Menghapus Semua Data yang Ditandai ?')" type="button" class="btn bg-red btn-flat margin"><i class="fa fa-trash-o"></i> Hapus Banyak</button-->              
          </a>
          <button class="btn bg-maroon btn-flat margin" onclick="bulk_delete()"><i class="fa fa-trash"></i> Bulk Delete</button>                            
          
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <?php                       
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {                    
            ?>                  
            <div class="alert alert-<?php echo $_SESSION['tipe'] ?> alert-dismissable">
                <strong><?php echo $_SESSION['pesan'] ?></strong>
                <button class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>  
                </button>
            </div>
            <?php
            }
                $_SESSION['pesan'] = '';                        
                    
            ?>
        <table id="example2" class="table table-bordered table-hovered">
          <thead>
            <tr>
              <th width="1%"><input type="checkbox" id="check-all"></th>              
              <th width="5%">No</th>
              
              <th>Nama</th>
              <th>Harga</th>                            
              <th width="16%">Aksi</th>
            </tr>
          </thead>
          <tbody>            
          <?php 
          $no=1; 
          foreach($dt_produk->result() as $row) {   
          echo "          
            <tr>
              <td><input type='checkbox' class='data-check' value='$row->id_produk'></td>            
              <td>$no</td>              
              <td>$row->nama</td>
              <td>$row->harga</td>
              <td>";
              ?>
                <form method="post" action="produk/process">
                <input type="hidden" name="id" value="<?php echo $row->id_produk ?>" />
                <input type="hidden" name="nama" value="<?php echo $row->nama ?>" />
                <input type="hidden" name="harga" value="<?php echo $row->harga ?>" />
                <button data-toggle='tooltip' onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')" title='Hapus' name="s_process" type="submit" value="hapus" class='btn btn-danger btn-flat btn-sm'><i class='fa fa-trash-o'></i></button>
                <button data-toggle='tooltip' title='Edit' name="s_process" type="submit" value="ubah" class='btn btn-primary btn-flat btn-sm'><i class='fa fa-edit'></i></button>
                <button data-toggle='tooltip' title='Detail' name="s_process" type="submit" value="detail" class='btn btn-info btn-flat btn-sm'><i class='fa fa-eye'></i></button>
                
              </form>
              </td>
            </tr>
          <?php
          $no++;
          }
          ?>
          </tbody>
        </table>        
        
      </div><!-- /.box-body -->
    </div><!-- /.box -->

    <?php
    }
    ?>
  </section>
</div>

<script type="text/javascript">
function bulk_delete(){
  var list_id = [];
  $(".data-check:checked").each(function() {
    list_id.push(this.value);
  });
  if(list_id.length > 0){
    if(confirm('Are you sure delete this '+list_id.length+' data?'))
      {
        $.ajax({
          type: "POST",
          data: {id:list_id},
          url: "<?php echo site_url('produk/ajax_bulk_delete')?>",
          dataType: "JSON",
          success: function(data)
          {
            if(data.status){
              window.location.reload();
            }else{
              alert('Failed.');
            }                  
          },
          error: function (jqXHR, textStatus, errorThrown){
            alert('Error deleting data');
          }
        });
      }
    }else{
      alert('no data selected');
  }
}
</script>