<?php
session_start();
include "../koneksi.php";
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
    <title>SIBILING</title>    
    
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="skin-red sidebar-mini fixed">
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
              <i class="fa fa-tasks"></i> <span>Data Master</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li class="active"><a href="admin.php"><i class="fa fa-circle-o"></i><span>Admin</span></a></li>
              <li><a href="siswa1.php"><i class="fa fa-circle-o"></i><span>Siswa</span></a></li>
              <li><a href="kelas.php"><i class="fa fa-circle-o"></i><span>Kelas</span></a></li>
              <li><a href="siswa_pindah_kelas.php"><i class="fa fa-circle-o"></i><span>Pindah Kelas</span></a></li>
              <li><a href="jurusan.php"><i class="fa fa-circle-o"></i><span>Jurusan</span></a></li>
              <li><a href="pelanggaran.php"><i class="fa fa-circle-o"></i><span>Pelanggaran</span></a></li>
              <li><a href="sanksi.php"><i class="fa fa-circle-o"></i><span>Sanksi</span></a></li>
              <li><a href="ortu.php"><i class="fa fa-circle-o"></i><span>Orang Tua / Wali</span></a></li>
              <li><a href="guru.php"><i class="fa fa-circle-o"></i><span>Wali Kelas</span></a></li>

              </ul>
              </li>
               <li class="treeview"><a href="pelanggaran_siswa.php"><i class="fa fa-legal"></i> <span> Bimbingan & Konseling</span> </i></a>              
              </li>
              <li class="treeview"><a href="undangan_ortu.php"><i class="fa fa-paper-plane"></i><span> SMS Undangan</span> </a>             
              </li>
              <li class="treeview"><a href="laporan_pelanggaran_siswa.php"><i class="fa fa-newspaper-o"></i><span> Laporan BK</span> </a>             
              </li>
               
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>     
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Admin
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i>  Data Admin</li>
          </ol>
       
        </section>

     

        <!-- Main content -->     
     
      
      <!-- Content Wrapper. Contains page content -->

		<!-- Modal Popup Dosen -->
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
        <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah</button></a>
                  <br></br>
          <table id="data" class="table table-bordered table-striped table-scalable">
            <?php
              include "dt_admin.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
    <!-- Modal Popup Dosen -->
    <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Admin</h4>
          </div>
          <div class="modal-body">
            <form action="admin_add.php" name="modal_popup" enctype="multipart/form-data" method="post">

            
                <?php
                    $admin = mysqli_query($konek, "SELECT * FROM admin");

                    while ($row=mysqli_fetch_array($admin)) {
                      $id = $row['id'] + 1;
                    }
                  ?>
                <input type="hidden"  value="A0<?php echo $id; ?>" readonly="readonly" class="form-control" name="kode_admin" required>
              

            <div class="form-group">
                <label>Nama Admin</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Admin" required/>
                  </div>
              </div>

              <div class="form-group">
                <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-id-card"></i>
                    </div>
                    <input name="username" type="text" class="form-control" placeholder="Username" required/>
                  </div>
              </div>
              

              <div class="form-group">
                <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input name="password" type="text" class="form-control" placeholder="Password" required/>
                  </div>
              </div>

              



              <div class="modal-footer">
                <button class="btn btn-success" type="submit">
                  Simpan
                </button>
                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                  Kembali
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditAdmin" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
						<button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
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
