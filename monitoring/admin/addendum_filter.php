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
            <li><i class="fa fa-users"></i>Informasi Data dan Dokumen</li>
          </ol>
          </section>

        <!-- Main content -->     
     
      
      <!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" action="datajalan_add.php" method="post" enctype="multipart/form-data" >
		<!-- Modal Popup Dosen -->
    <section class="content">
    <div class="row">    
    <div class="col-xs-12">
    <div class="box box-success">		
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Data Kontrak</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   

            
            
            <div class="box-body"> 

            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div><h4>Surat Kontrak</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="data-jalan-addendum-5.php">
                            <div class="panel-footer">
                                <span class="pull-left">Input Data</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div><h4>1 Addendum</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="data-jalan-addendum-1.php">
                            <div class="panel-footer">
                                <span class="pull-left">Input Data</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div><h4>2 Addendum</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="data-jalan-addendum-2.php">
                            <div class="panel-footer">
                                <span class="pull-left">Input Data</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div><h4>3 Addendum</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="data-jalan-addendum-3.php">
                            <div class="panel-footer">
                                <span class="pull-left">Input Data</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div><h4>4 Addendum</h4></div>
                                </div>
                            </div>
                        </div>
                        <a href="data-jalan-addendum-4.php">
                            <div class="panel-footer">
                                <span class="pull-left">Input Data</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
           
                        
            
            </div>               
            </div><!-- /.box-body -->
            </div><!-- /.box -->
            </div><!-- /.row -->
        </section><!-- /.content -->
               
		
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
