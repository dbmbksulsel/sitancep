<?php

session_start();
include "koneksi.php";
?>
<?php
  if ($_SESSION['username'] !== 'admin')
  {
    echo "<script>window.location = 'index.php'</script>";
  }
?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>SIDIDOK</title>
    <script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
     <script src="process_undangan.js"></script> <!-- Load file process.js -->
    
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="skin-green sidebar-mini fixed">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header"><h5><left>MENU NAVIGASI</left></h5></li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
              <li class="treeview ">
              <a href="#">
              <i class="fa fa-tasks"></i> <span>Data Ruas Jalan</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="addendum_filter.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li>
              <li><a href="lihat_datajalan.php"><i class="fa fa-circle-o"></i><span>Lihat Data</span></a></li>
              
              </ul>
              </li>
              <li class="treeview active"><a href="upload.php"><i class="fa fa-newspaper-o"></i> <span> File Upload</span> </i></a>
              <li class="treeview"><a href="../logout.php"><i class="fa fa-power-off"></i> <span> Keluar</span> </i></a> 
              </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


     
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Informasi Data dan Dokumen
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Informasi Data dan Dokumen</li>
          </ol>
          </section>

        <!-- Main content -->     
     
      
      <!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" action="upload_add.php" method="post" enctype="multipart/form-data" >
		<!-- Modal Popup Dosen -->
    <section class="content">
    <div class="row">    
    <div class="col-xs-12">
    <div class="box box-success">		
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> File Upload</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   

            
            
            <div class="box-body"> 
            <div class="col-md-12">
            <div class="form-group">
            <label class="col-sm-4 control-label"></label>
              <div class="col-md-7">

                <?php
                    $ortu = mysqli_query($konek, "SELECT * FROM datajalan");

                    while ($row=mysqli_fetch_array($ortu)) {
                      $id_datajalan = $row['id_datajalan'] + 1;
                    }
                  ?>
                <input type="hidden"  value="O0<?php echo $id_datajalan; ?>" readonly="readonly" class="form-control" name="kode_datajalan" >
              </div>
              </div>
              </div>
             <!--  </div> -->
           



          <div class="row">
          <div class="col-md-12">
           <div class="form-group">
              <label class="col-sm-2 control-label">Pilih Nama PPTK</label>
              <div class="col-sm-4">
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-list-ol"></i>
                    </div>
                    <select name="pptk" class="form-control" required/>
                    <option selected required>Pilih PPTK</option>
                      <?php
                        
                        $querydatajalan = mysqli_query($konek, "SELECT * FROM datajalan");
                        if($querydatajalan == false){
                          die ("Terdapat Kesalahan : ". mysqli_error($datajalan));  
                        }
                        while($datajalan = mysqli_fetch_array($querydatajalan)){
                          echo "
                            <option value='$datajalan[kode_datajalan]'>$datajalan[tahun_anggaran] $datajalan[paket]  </option>";
                        }
                      ?>
                    </select>
                  </div>
                  </div>
                  <!-- pilih file-->
                 
                  <label class="col-sm-1 control-label">Pilih File</label>
                  <div class="col-sm-3">
                  <div class="input-group">
                    <input type="file" name="attachment[]" class="form-control" multiple required>
                  </div>
                  </div>
                  

                  <!-- cari -->
                  <div class="col-sm-2">
                  <div class="input-group">
                    <input type="submit" name="HandleUpload" value="Upload" class="btn btn-primary">
                  </div>
                  </div>
                  </div>
                 
          </div>
          </div>             
          
          </div>
          <br>
          <br>
          <br>

       
        </form> 

        <!-- <section class="content"> -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">                
                <div class="box-body">        
          <table id="data" class="table table-bordered table-striped table-scalable">
            <?php
              include "dt_upload.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </section>
       
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditPelanggaranSiswa" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Anda Yakin Ingin Menghapus Informasi Ini ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
