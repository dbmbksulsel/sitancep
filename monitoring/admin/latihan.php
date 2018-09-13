<?php

session_start();
include "koneksi.php";
?>
<?php
  if ($_SESSION['sebagai'] !== 'admin')
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
              <li><a href="data-jalan.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li>
              <li><a href="lihat_datajalan.php"><i class="fa fa-circle-o"></i><span>Lihat Data</span></a></li>
              
              </ul>
              </li>
              <li class="treeview active"><a href="upload.php"><i class="fa fa-legal"></i> <span> File</span> </i></a> 
              </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


     
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Informasi  dan Dokumentasi Kontrak
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Data Informasi  dan Dokumentasi Kontrak</li>
          </ol>
          </section>

        <!-- Main content -->     
     
      
      <!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" action="addendum_add.php" method="post" enctype="multipart/form-data" >
		<!-- Modal Popup Dosen -->
    <section class="content">
    <div class="row">    
    <div class="col-xs-12">
    <div class="box box-danger">		
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
              <div class="col-sm-7">

                <?php
                    $ortu = mysqli_query($konek, "SELECT * FROM latihan");

                    while ($row=mysqli_fetch_array($ortu)) {
                      $id = $row['id'] + 1;
                    }
                  ?>
                <input type="hidden"  value="A0<?php echo $id; ?>" readonly="readonly" class="form-control" name="kode_addendum" >
              </div>
              </div>
            

              <div class="form-group">
              <label class="col-sm-4 control-label">Addendum</label>
              <div class="col-sm-5">
                <input id="addendum" name="addendum" type="text"  class="form-control" placeholder="Addendum"/>
              </div>
            </div>

                       
              
              </div>
           



             
         
              
                        
            
            </div>               
            </div><!-- /.box-body -->
            </div><!-- /.box -->
          <!--   </div>/.row -->

          <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
               <div class="col-md-7 control-label">
                <button class="btn btn-success" type="submit">
                  Simpan &nbsp;
                </button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                  Kembali
                </button>
            </div>
            </div>    
            </div>
            </div>    
        </section><!-- /.content -->
        </form> 
      
        <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">                
                <div class="box-body">        
          <table id="data" class="table table-bordered table-striped table-scalable">
            <?php
              include "dt_latihan.php";
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
