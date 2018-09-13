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
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="skin-green sidebar-mini fixed">
    <div class="wrapper">
      <?php
        include "content_header.php";  
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
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
              <li class="treeview">
              <a href="#">
              <i class="fa fa-tasks"></i> <span>Data Ruas Jalan</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="addendum_filter.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li>
              <!-- <li><a href="data-jalan.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li> -->
              <li><a href="lihat_datajalan.php"><i class="fa fa-circle-o"></i><span>Lihat Data</span></a></li>             
              </ul>
              </li>
              <li class="treeview"><a href="upload.php"><i class="fa fa-newspaper-o"></i> <span> File Upload</span> </i></a>
              
              <li class="treeview"><a href="../logout.php"><i class="fa fa-power-off"></i> <span> Keluar</span> </i></a>
              <!-- <li class="treeview"><a href="latihan.php"><i class="fa fa-legal"></i> <span> Latihan</span> </i></a>   -->
              </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <br>
       <div style="margin-right:10%;margin-left:15%" class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><center><i class="icon fa fa-info"></i>
        Selamat Datang di Sistem Informasi Data dan Dokumen
        </center>
        </h4>
        </div>
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
          <h1><strong>
            Beranda
          </strong></h1>
          <ol class="breadcrumb">

            <li><i class="fa fa-home"></i>Beranda</li>
          </ol>
        </section> -->
       
        
       <!--  <section class="content">
          <!-- Info boxes -
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box with-border">
                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><strong>Jalan</strong></span>
                  <span class="info-box-number" style="font-size: 40px;"><?php echo $datajalan ;?></span>
                </div><!-- /.info-box-content -
              </div><!-- /.info-box 
            </div><!-- /.col -
           
           
            </section> -->

<style type="text/css">
      .content {
        padding:0px;
         margin left:0;
      }
      .img {
        position: relative;
        width: 100%;
        height: 100%;
        margin: 0 auto;
      }
    </style>
        <!-- Main content -->
        <!-- <section class="content"> -->
          <!-- div class="row1">
            <div class="col-xs-12">
             <! <div class="box box-danger"> -->
                 
                <center><img src="../aset/foto/img_5.png" width="1095" height="580" /></center>
                <!-- </div> -->
                
				<!-- 	<h1><center><b></b></center></h1> -->


				
               <!--  </div><!- /.box-header
                <!- div class="box-body">
					
                </div>/.box-body -->
              
            <!-- </div><!/.col 
          </div><!.row -
        </section>/.content -->
       </div><!-- ./wrapper -->
     <?php
		include	"content_footer.php"; 
	?> 
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
