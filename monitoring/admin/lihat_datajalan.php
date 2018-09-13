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
    <title>SIDADOK</title>    
    
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
              <li><a href="index.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
               <li class="treeview active">
              <a href="#">
              <i class="fa fa-tasks"></i> <span>Data Ruas Jalan</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="addendum_filter.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li>
              <li><a href="lihat_datajalan.php"><i class="fa fa-circle-o"></i><span>Lihat Data</span></a></li>
              
              </ul>
              </li>
              <li class="treeview"><a href="upload.php"><i class="fa fa-newspaper-o"></i> <span> File Upload</span> </i></a> 
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

		<!-- Modal Popup Dosen -->
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">                
                <div class="box-body">
              <!--   <a href="addendum_filter.php" class="btn btn-danger" id="delete_link">Kembali</a> -->
                 
                 <div class="form-group">
               <div class="col-md-7 control-label">
                
                <a href="addendum_filter.php" align="right" class="btn btn-success " ><i class="fa fa-plus"></i> &nbsp;Tambah</a>
            </div>
            </div>    
            <br>
            <br>

      <!--  <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah</button></a>
                  <br></br>-->
          <table id="data" class="table table-bordered table-striped table-scalable table-condensed">
            <?php
              include "dt_datajalan.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        


		<!-- Modal Popup Dosen -->
		
		
		<!-- Modal Popup Dosen Edit -->
		
		
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
