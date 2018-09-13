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
<?php
// including the database connection file


include "koneksi.php";
//getting id from url
$kode_datajalan  = $_GET["kode_datajalan"];
// $pptk  = $_GET["pptk"];


//selecting data associated with this particular id
$result = mysqli_query ($konek, "SELECT 
              id_datajalan
              kode_datajalan,
              tahun_anggaran,
              paket,
              pptk,
              general,
              site_engineer,
              penyedia_jasa,
              no_kontrak_awal,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as tanggal,  
              tanggal,  
              nilai_kontrak,
              waktu_pelaksanaan,
              panjang_perkerasan_aspal,
              panjang_perkerasan_beton,
              jenis_perkerasan_aspal_rencana,
              jenis_perkerasan_aspal_desain,
              jenis_perkerasan_beton_rencana,
              jenis_perkerasan_beton_desain,
              
              spmk_nomor,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as spmk_tanggal,
              spmk_tanggal,
              spmk_konsultan,
              spmk_progress,
              spmk_realisasi,
              spmk_lokasi_nama,
              spmk_lokasi_kabupaten,
              spmk_lokasi_sta,
              spmk_lokasi_koordinat       
              FROM datajalan             
              WHERE kode_datajalan='".$kode_datajalan."'");
              
$res = mysqli_fetch_array($result);

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
              <li class="treeview active">
              <a href="#">
              <i class="fa fa-tasks"></i> <span>Data Ruas Jalan</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="addendum_filter.php"><i class="fa fa-circle-o"></i><span>Input Data</span></a></li>
              <li><a href="lihat_datajalan.php"><i class="fa fa-circle-o"></i><span>Lihat Data</span></a></li>
              
              </ul>
              </li>
              <li class="treeview"><a href="upload.php"><i class="fa fa-newspaper-o"></i> <span> File Upload</span> </i></a> 
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
<form class="form-horizontal" action="datajalan_edit_proses-4.php?kode_datajalan=<?php echo $kode_datajalan; ?>" enctype="multipart/form-data" method="post">
    <!-- Modal Popup Dosen -->
    <section class="content">
    <div class="row">    
    <div class="col-xs-12">
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Bagian I</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Tahun Anggaran</label>
              <div class="col-sm-5">
                <input  name="tahun_anggaran" type="text"  class="form-control" value="<?php echo $res['tahun_anggaran'];?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Paket</label>
              <div class="col-sm-5">
                <textarea id="paket" name="paket" type="text"  class="form-control" ><?php echo $res["paket"]; ?> </textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama PPTK</label>
              <div class="col-sm-5">
                <input id="pptk" name="pptk"  type="text" class="form-control" value="<?php echo $res['pptk']; ?>"/>
              </div>
            </div>       

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama General Superintendent</label>
              <div class="col-sm-5">
                <input id="general" name="general"  type="text" class="form-control" value="<?php echo $res['general']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Site Engineer</label>
              <div class="col-sm-5">
                <input id="site_engineer" name="site_engineer"  type="text" class="form-control" value="<?php echo $res['site_engineer']; ?>"/>
              </div>
            </div>           

            <div class="form-group">
              <label class="col-sm-4 control-label">Penyedia Jasa</label>
              <div class="col-sm-5">
                <input id="penyedia_jasa" name="penyedia_jasa"  type="text" class="form-control" value="<?php echo $res['penyedia_jasa']; ?>"/>
              </div>
            </div>       

           
                        
            
            </div>               
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
          </div><!-- /.row -->
        </section><!-- /.content -->
        <section class="content">
    <div class="row">    
    <div class="col-md-6">
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Surat Perjanjian</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="no_kontrak_awal" name="no_kontrak_awal" type="text"  class="form-control" value="<?php echo $res['no_kontrak_awal']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input id="Tanggal" name="tanggal" type="text" class="form-control" value="<?php echo $res['tanggal']; ?>"/>
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="nilai_kontrak" name="nilai_kontrak" type="text"  class="form-control" value="<?php echo $res['nilai_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="waktu_pelaksanaan" name="waktu_pelaksanaan"  type="text" class="form-control" value="<?php echo $res['waktu_pelaksanaan']; ?>"/>
              </div>
            </div>     

             <div class="form-group">
              <label class="col-sm-4 control-label">PANJANG PENANGANAN </label>
            </div>   
            

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="panjang_perkerasan_aspal" name="panjang_perkerasan_aspal"  type="text" class="form-control" value="<?php echo $res['panjang_perkerasan_aspal']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="panjang_perkerasan_beton" name="panjang_perkerasan_beton"  type="text" class="form-control" value="<?php echo $res['panjang_perkerasan_beton']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI</label>
             
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Rencana </label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_aspal_rencana" name="jenis_perkerasan_aspal_rencana"  type="text" class="form-control" value="<?php echo $res['jenis_perkerasan_aspal_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain </label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_aspal_desain" name="jenis_perkerasan_aspal_desain"  type="text" class="form-control" value="<?php echo $res['jenis_perkerasan_aspal_desain']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Rencana</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_beton_rencana" name="jenis_perkerasan_beton_rencana"  type="text" class="form-control" value="<?php echo $res['jenis_perkerasan_beton_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_beton_desain" name="jenis_perkerasan_beton_desain"  type="text" class="form-control" value="<?php echo $res['jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>  

                        
             
                      
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
         <!-- </div><!-- /.row -->
         </div>

  
   <!-- <div class="row">   -->
    <div class="col-md-6"> 
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> S P M K</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor</label>
              <div class="col-sm-7">
                <input id="spmk_nomor" name="spmk_nomor" type="text"  class="form-control" value="<?php echo $res['add4_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input id="Tanggal" name="spmk_tanggal" type="text" class="form-control" value="<?php echo $res['spmk_tanggal']; ?>"/>
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Konsultan Supervisi</label>
              <div class="col-sm-7">
                <input id="spmk_konsultan" name="spmk_konsultan" type="text"  class="form-control" value="<?php echo $res['spmk_konsultan']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Progres Pekerjaan (%)</label>
              <div class="col-sm-7">
                <input id="spmk_progress" name="spmk_progress"  type="text" class="form-control" value="<?php echo $res['spmk_progress']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Realisasi Kontrak (Rp)</label>
              <div class="col-sm-7">
                <input id="spmk_realisasi" name="spmk_realisasi"  type="text" class="form-control" value="<?php echo $res['spmk_realisasi']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Lokasi Kegiatan</label>
            </div>     


            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Ruas </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_nama" name="spmk_lokasi_nama"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_nama']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Kabupaten/Kota </label>
              <div class="col-sm-7">
                <textarea id="spmk_lokasi_kabupaten" name="spmk_lokasi_kabupaten" type="text"  class="form-control" > <?php echo $res["spmk_lokasi_kabupaten"]; ?> </textarea>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Sta </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_sta" name="spmk_lokasi_sta"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_sta']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat']; ?>"/>
              </div>
            </div>  
                        
             </div><!-- /.box-body --
            </div><!-- /.box --
           
          </div><!-- /.row --
        </section><!-- /.content -->
        </div>
         <section>
        <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
               <div class="col-md-7 control-label">
                <button class="btn btn-success" type="submit" name="update"><i class="fa fa-floppy-o"></i>&nbsp;
                  Simpan &nbsp;
                </button>
                <a href="lihat_datajalan.php" class="btn btn-danger" ><i class="fa fa-backward"></i>&nbsp; Kembali</a>
            </div>
            </div>    
            </div>
            </div>    


            </section>


        </form> 
        </div>

         <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">                
                <div class="box-body">        
          <table id="data" class="table table-bordered table-striped table-scalable">
            <?php
            
              include "dt_upload_edit.php";
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
    include "content_footer.php";
  ?>
    </div><!-- ./wrapper -->
  <!-- Library Scripts -->
  <?php
    include "bundle_script.php";
  ?>
  </body>
</html>

