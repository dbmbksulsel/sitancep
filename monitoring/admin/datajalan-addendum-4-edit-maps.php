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
<?php
// including the database connection file


include "koneksi.php";
//getting id from url
$kode_datajalan  = $_GET["kode_datajalan"];
// $addendum  = $_GET["addendum"];
@$pptk  = $_GET["pptk"];



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
              add1_no_kontrak,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as add1_tanggal,  
              add1_tanggal,  
              add1_nilai_kontrak,
              add1_waktu_pelaksanaan,
              add1_panjang_perkerasan_aspal,
              add1_panjang_perkerasan_beton,
              add1_jenis_perkerasan_aspal_rencana,
              add1_jenis_perkerasan_aspal_desain,
              add1_jenis_perkerasan_beton_rencana,
              add1_jenis_perkerasan_beton_desain,

              add2_no_kontrak,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as add2_tanggal,  
              add2_tanggal,  
              add2_nilai_kontrak,
              add2_waktu_pelaksanaan,
              add2_panjang_perkerasan_aspal,
              add2_panjang_perkerasan_beton,
              add2_jenis_perkerasan_aspal_rencana,
              add2_jenis_perkerasan_aspal_desain,
              add2_jenis_perkerasan_beton_rencana,
              add2_jenis_perkerasan_beton_desain,

              add3_no_kontrak,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as add3_tanggal,  
              add3_tanggal,  
              add3_nilai_kontrak,
              add3_waktu_pelaksanaan,
              add3_panjang_perkerasan_aspal,
              add3_panjang_perkerasan_beton,
              add3_jenis_perkerasan_aspal_rencana,
              add3_jenis_perkerasan_aspal_desain,
              add3_jenis_perkerasan_beton_rencana,
              add3_jenis_perkerasan_beton_desain,

              add4_no_kontrak,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as add4_tanggal,  
              add4_tanggal,  
              add4_nilai_kontrak,
              add4_waktu_pelaksanaan,
              add4_panjang_perkerasan_aspal,
              add4_panjang_perkerasan_beton,
              add4_jenis_perkerasan_aspal_rencana,
              add4_jenis_perkerasan_aspal_desain,
              add4_jenis_perkerasan_beton_rencana,
              add4_jenis_perkerasan_beton_desain,
              
              
              
              spmk_nomor,
              DATE_FORMAT(Tanggal, '%Y-%d-%m')as spmk_tanggal,
              spmk_tanggal,
              spmk_konsultan,
              spmk_progress,
              spmk_realisasi,
              spmk_lokasi_nama,
              spmk_lokasi_kabupaten,
              spmk_lokasi_sta,
              spmk_lokasi_koordinat_lat,   
              spmk_lokasi_koordinat_long,
              spmk_lokasi_koordinat_lat2,   
              spmk_lokasi_koordinat_long2,
              spmk_lokasi_koordinat_lat3,   
              spmk_lokasi_koordinat_long3,
              spmk_lokasi_koordinat_lat4,   
              spmk_lokasi_koordinat_long4      
              FROM datajalan             
              WHERE kode_datajalan='".$kode_datajalan."'");
              
$res = mysqli_fetch_array($result);

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
            <li><i class="fa fa-users"></i> Informasi Data dan Dokumen</li>
          </ol>
          </section>

        <!-- Main content -->     
      
      <!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" action="datajalan_edit_proses-3.php?kode_datajalan=<?php echo $kode_datajalan; ?>" enctype="multipart/form-data" method="post">
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
        
       <!--  <section class="content"> -->
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
                    <!-- <input id="Tanggal" name="tanggal" type="text" class="form-control" value="<?php echo $res['tanggal']; ?>"/> -->
                    <input type="date" class="form-control" value="<?php echo $res['tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="tanggal">
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
              <label class="col-sm-4 control-label">Lebar Existing </label>
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
              <label class="col-sm-4 control-label">Lebar Existing </label>
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
           
          </div><!-- /.row -->

          <div class="col-md-6"> 
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Addendum Kontrak 1</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="add1_no_kontrak" name="add1_no_kontrak" type="text"  class="form-control" value="<?php echo $res['add1_no_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   <!--  <input id="Tanggal" name="add1_tanggal" type="text" class="form-control" value="<?php echo $res['add1_tanggal']; ?>"/> -->
                    <input type="date" class="form-control" value="<?php echo $res['add1_tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="add1_tanggal">
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="add1_nilai_kontrak" name="add1_nilai_kontrak" type="text"  class="form-control" value="<?php echo $res['add1_nilai_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="add1_waktu_pelaksanaan" name="add1_waktu_pelaksanaan"  type="text" class="form-control" value="<?php echo $res['add1_waktu_pelaksanaan']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">PANJANG PENANGANAN </label>
            </div>   
          

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="add1_panjang_perkerasan_aspal" name="add1_panjang_perkerasan_aspal"  type="text" class="form-control" value="<?php echo $res['add1_panjang_perkerasan_aspal']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="add1_panjang_perkerasan_beton" name="add1_panjang_perkerasan_beton"  type="text" class="form-control" value="<?php echo $res['add1_panjang_perkerasan_beton']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI </label>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_aspal_rencana" name="add1_jenis_perkerasan_aspal_rencana"  type="text" class="form-control" value="<?php echo $res['add1_jenis_perkerasan_aspal_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_aspal_desain" name="add1_jenis_perkerasan_aspal_desain"  type="text" class="form-control" value="<?php echo $res['add1_jenis_perkerasan_aspal_desain']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_beton_rencana" name="add1_jenis_perkerasan_beton_rencana"  type="text" class="form-control" value="<?php echo $res['add1_jenis_perkerasan_beton_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_beton_desain" name="add1_jenis_perkerasan_beton_desain"  type="text" class="form-control" value="<?php echo $res['add1_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>  

            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
       
        
  
         <!-- </div><!-- /.row -->
         </div>
 


   <section class="content">
    <div class="row">    
    <div class="col-md-6">
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Addendum Kontrak 2</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="add2_no_kontrak" name="add2_no_kontrak" type="text"  class="form-control" value="<?php echo $res['add2_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
 <!--                    <input id="Tanggal" name="add2_tanggal" type="text" class="form-control" value="<?php echo $res['add2_tanggal']; ?>"/> -->
                     <input type="date" class="form-control" value="<?php echo $res['add2_tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="add2_tanggal">
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="add2_nilai_kontrak" name="add2_nilai_kontrak" type="text"  class="form-control" value="<?php echo $res['add2_nilai_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="add2_waktu_pelaksanaan" name="add2_waktu_pelaksanaan"  type="text" class="form-control" value="<?php echo $res['add2_waktu_pelaksanaan']; ?>"/>
              </div>
            </div>     

            <div class="form-group">
              <label class="col-sm-4 control-label">PANJANG PENANGANAN</label>
            </div>   
           

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="add2_panjang_perkerasan_aspal" name="add2_panjang_perkerasan_aspal"  type="text" class="form-control" value="<?php echo $res['add2_panjang_perkerasan_aspal']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="add2_panjang_perkerasan_beton" name="add2_panjang_perkerasan_beton"  type="text" class="form-control" value="<?php echo $res['add2_panjang_perkerasan_beton']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI </label>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add2_jenis_perkerasan_aspal_rencana" name="add2_jenis_perkerasan_aspal_rencana"  type="text" class="form-control" value="<?php echo $res['add2_jenis_perkerasan_aspal_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add2_jenis_perkerasan_aspal_desain" name="add2_jenis_perkerasan_aspal_desain"  type="text" class="form-control" value="<?php echo $res['add2_jenis_perkerasan_aspal_desain']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add2_jenis_perkerasan_beton_rencana" name="add2_jenis_perkerasan_beton_rencana"  type="text" class="form-control" value="<?php echo $res['add2_jenis_perkerasan_beton_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add2_jenis_perkerasan_beton_desain" name="add2_jenis_perkerasan_beton_desain"  type="text" class="form-control" value="<?php echo $res['add2_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>  
                        
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
 
        
  
         <!-- </div><!-- /.row -->
         </div>

         <section class="content">
    <div class="row">    
    <div class="col-md-6">
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Addendum Kontrak 3</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="add3_no_kontrak" name="add3_no_kontrak" type="text"  class="form-control" value="<?php echo $res['add3_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <!-- <input id="Tanggal" name="add3_tanggal" type="text" class="form-control" value="<?php echo $res['add3_tanggal']; ?>"/> -->
                    <input type="date" class="form-control" value="<?php echo $res['add3_tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="add3_tanggal">

                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="add3_nilai_kontrak" name="add3_nilai_kontrak" type="text"  class="form-control" value="<?php echo $res['add3_nilai_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="add3_waktu_pelaksanaan" name="add3_waktu_pelaksanaan"  type="text" class="form-control" value="<?php echo $res['add3_waktu_pelaksanaan']; ?>"/>
              </div>
            </div>     

            <div class="form-group">
              <label class="col-sm-4 control-label">PANJANG PENANGANAN</label>
            </div>   
           

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="add3_panjang_perkerasan_aspal" name="add3_panjang_perkerasan_aspal"  type="text" class="form-control" value="<?php echo $res['add3_panjang_perkerasan_aspal']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="add3_panjang_perkerasan_beton" name="add3_panjang_perkerasan_beton"  type="text" class="form-control" value="<?php echo $res['add3_panjang_perkerasan_beton']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI </label>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add3_jenis_perkerasan_aspal_rencana" name="add3_jenis_perkerasan_aspal_rencana"  type="text" class="form-control" value="<?php echo $res['add3_jenis_perkerasan_aspal_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add3_jenis_perkerasan_aspal_desain" name="add3_jenis_perkerasan_aspal_desain"  type="text" class="form-control" value="<?php echo $res['add3_jenis_perkerasan_aspal_desain']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add3_jenis_perkerasan_beton_rencana" name="add3_jenis_perkerasan_beton_rencana"  type="text" class="form-control" value="<?php echo $res['add3_jenis_perkerasan_beton_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add3_jenis_perkerasan_beton_desain" name="add3_jenis_perkerasan_beton_desain"  type="text" class="form-control" value="<?php echo $res['add3_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>  
                        
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
 
        
  
         <!-- </div><!-- /.row -->
         </div>
         </div><!-- /.box-body -->
            </div><!-- /.box -->
           
 
        
  
         <!-- </div><!-- /.row -->
         </div>

        <!--  <section class="content"> -->
    <div class="row">    
    <div class="col-md-12">
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i> Addendum Kontrak 4</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="add4_no_kontrak" name="add4_no_kontrak" type="text"  class="form-control" value="<?php echo $res['add4_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <!-- <input id="Tanggal" name="add3_tanggal" type="text" class="form-control" value="<?php echo $res['add3_tanggal']; ?>"/> -->
                    <input type="date" class="form-control" value="<?php echo $res['add4_tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="add4_tanggal">

                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="add4_nilai_kontrak" name="add4_nilai_kontrak" type="text"  class="form-control" value="<?php echo $res['add4_nilai_kontrak']; ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="add4_waktu_pelaksanaan" name="add4_waktu_pelaksanaan"  type="text" class="form-control" value="<?php echo $res['add4_waktu_pelaksanaan']; ?>"/>
              </div>
            </div>     

            <div class="form-group">
              <label class="col-sm-4 control-label">PANJANG PENANGANAN</label>
            </div>   
           

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="add4_panjang_perkerasan_aspal" name="add4_panjang_perkerasan_aspal"  type="text" class="form-control" value="<?php echo $res['add4_panjang_perkerasan_aspal']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="add4_panjang_perkerasan_beton" name="add4_panjang_perkerasan_beton"  type="text" class="form-control" value="<?php echo $res['add4_panjang_perkerasan_beton']; ?>"/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI </label>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add4_jenis_perkerasan_aspal_rencana" name="add4_jenis_perkerasan_aspal_rencana"  type="text" class="form-control" value="<?php echo $res['add4_jenis_perkerasan_aspal_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add4_jenis_perkerasan_aspal_desain" name="add4_jenis_perkerasan_aspal_desain"  type="text" class="form-control" value="<?php echo $res['add4_jenis_perkerasan_aspal_desain']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing </label>
              <div class="col-sm-7">
                <input id="add4_jenis_perkerasan_beton_rencana" name="add4_jenis_perkerasan_beton_rencana"  type="text" class="form-control" value="<?php echo $res['add4_jenis_perkerasan_beton_rencana']; ?>"/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add4_jenis_perkerasan_beton_desain" name="add4_jenis_perkerasan_beton_desain"  type="text" class="form-control" value="<?php echo $res['add4_jenis_perkerasan_beton_desain']; ?>"/>
              </div>
            </div>  
                        
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
 
        
  
         <!-- </div><!-- /.row -->
         </div>
   <!-- <div class="row">   -->
    <div class="col-md-12"> 
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
                <input id="spmk_nomor" name="spmk_nomor" type="text"  class="form-control" value="<?php echo $res['spmk_nomor']; ?>"/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <!-- <input id="Tanggal" name="spmk_tanggal" type="text" class="form-control" value="<?php echo $res['spmk_tanggal']; ?>"/> -->
                     <input type="date" class="form-control" value="<?php echo $res['spmk_tanggal']; ?>" data-toggle="tooltip" title="Format: mm/dd/yyyy" name="spmk_tanggal">
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
              <label class="col-sm-4 control-label">Titik Koordinat</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_lat" name="spmk_lokasi_koordinat_lat"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_lat']; ?>"/>
              </div>
              
            </div>  
            <div class="form-group">
             
              <label class="col-sm-4 control-label">Longitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_long" name="spmk_lokasi_koordinat_long"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_long']; ?>"/>
              </div>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 2</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_lat" name="spmk_lokasi_koordinat_lat2"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_lat2']; ?>"/>
              </div>
              
            </div>  
            <div class="form-group">
             
              <label class="col-sm-4 control-label">Longitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_long" name="spmk_lokasi_koordinat_long2"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_long2']; ?>"/>
              </div>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 3</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_lat" name="spmk_lokasi_koordinat_lat3"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_lat3']; ?>"/>
              </div>
              
            </div>  
            <div class="form-group">
             
              <label class="col-sm-4 control-label">Longitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_long" name="spmk_lokasi_koordinat_long3"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_long3']; ?>"/>
              </div>
            </div>  

            <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 4</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_lat" name="spmk_lokasi_koordinat_lat4"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_lat4']; ?>"/>
              </div>
              
            </div>  
            <div class="form-group">
             
              <label class="col-sm-4 control-label">Longitude</label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat_long" name="spmk_lokasi_koordinat_long4"  type="text" class="form-control" value="<?php echo $res['spmk_lokasi_koordinat_long4']; ?>"/>
              </div>
            </div>  

     
                         
            </div><!-- /.box-body -->
            </div><!-- /.box -->
           
        
        
                        
             </div><!-- /.box-body --
            </div><!-- /.box --
           
          </div><!-- /.row --
        </section><!-- /.content -->
       



        </form> 
        </div>

        <style type="text/css">
      #dvMap {
        width: 100%;
        height: 100%;
        margin: 0 auto;
      }
    </style>

       <!--  <section > -->
        <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">               
                <div class="box-body">
                <!-- maps -->  
                <?php
                include("koneksi.php");
                ?> 
                
               
                <div id="dvMap" style="width: 1200px; height: 550px" ></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjAYxTcLDtwUv4U67sUsbw2LUxJCYj3j4"  async defer  ></script>
  <script type="text/javascript">
    var markers = [
    <?php
    include "koneksi.php";
    $kode_datajalan  = $_GET["kode_datajalan"];
    $sql = mysqli_query($konek, "SELECT * FROM datajalan WHERE kode_datajalan='".$kode_datajalan."'");
    while(($data =  mysqli_fetch_assoc($sql))) {
    ?>
    {
         "spmk_lokasi_koordinat_lat": '<?php echo $data['spmk_lokasi_koordinat_lat']; ?>',
         "spmk_lokasi_koordinat_long": '<?php echo $data['spmk_lokasi_koordinat_long']; ?>',
         "spmk_lokasi_koordinat_lat2": '<?php echo $data['spmk_lokasi_koordinat_lat2']; ?>',
         "spmk_lokasi_koordinat_long2": '<?php echo $data['spmk_lokasi_koordinat_long2']; ?>',
         "spmk_lokasi_koordinat_lat3": '<?php echo $data['spmk_lokasi_koordinat_lat3']; ?>',
         "spmk_lokasi_koordinat_long3": '<?php echo $data['spmk_lokasi_koordinat_long3']; ?>',
         "spmk_lokasi_koordinat_lat4": '<?php echo $data['spmk_lokasi_koordinat_lat4']; ?>',
         "spmk_lokasi_koordinat_long4": '<?php echo $data['spmk_lokasi_koordinat_long4']; ?>',
         "spmk_lokasi_nama": '<?php echo $data['spmk_lokasi_nama']; ?>'

         // "spmk_lokasi_koordinat_lat2": '<?php echo $data['spmk_lokasi_koordinat_lat2']; ?>',
         // "spmk_lokasi_koordinat_long2": '<?php echo $data['spmk_lokasi_koordinat_long2']; ?>',
         // "spmk_lokasi_nama": '<?php echo $data['spmk_lokasi_nama']; ?>'
    },
    <?php
    }
    ?>
    ];
    </script>
    <script type="text/javascript">
        window.onload = function () {

            var mapOptions = {
            center: new google.maps.LatLng(-4.0498845,119.8351739,144097),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }; 
            var infoWindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.spmk_lokasi_koordinat_lat;
        var longnya = data.spmk_lokasi_koordinat_long;
        
        var myLatlng = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.spmk_lokasi_nama
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.spmk_lokasi_nama + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
            // var infoWindow = new google.maps.InfoWindow();
            // var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.spmk_lokasi_koordinat_lat2;
        var longnya = data.spmk_lokasi_koordinat_long2;
        
        var myLatlng2 = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng2,
                    map: map,
                    title: data.spmk_lokasi_nama
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.spmk_lokasi_nama + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.spmk_lokasi_koordinat_lat3;
        var longnya = data.spmk_lokasi_koordinat_long3;
        
        var myLatlng3 = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng3,
                    map: map,
                    title: data.spmk_lokasi_nama
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.spmk_lokasi_nama + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.spmk_lokasi_koordinat_lat4;
        var longnya = data.spmk_lokasi_koordinat_long4;
        
        var myLatlng4 = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng4,
                    map: map,
                    title: data.spmk_lokasi_nama
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.spmk_lokasi_nama + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }

            //menampilkan polyline
              // var rancaekek = new google.maps.LatLng(-6.967274,107.764911);
              // var majalaya = new google.maps.LatLng(-7.051798,107.745856);
              //  var latnya = data.spmk_lokasi_koordinat_lat;
              // var longnya = data.spmk_lokasi_koordinat_long;              
              // var myLatlng1 = new google.maps.LatLng(latnya, longnya);

              // var latnya = data.spmk_lokasi_koordinat_lat2;
              // var longnya = data.spmk_lokasi_koordinat_long2;              
              // var myLatlng2 = new google.maps.LatLng(latnya, longnya);

              // var latnya = data.spmk_lokasi_koordinat_lat3;
              // var longnya = data.spmk_lokasi_koordinat_long3;              
              // var myLatlng3 = new google.maps.LatLng(latnya, longnya);

              // var latnya = data.spmk_lokasi_koordinat_lat4;
              // var longnya = data.spmk_lokasi_koordinat_long4;              
              // var myLatlng4 = new google.maps.LatLng(latnya, longnya);
              


              // var jalurkabel = new google.maps.Polyline({
              //   path: [myLatlng1, myLatlng2, myLatlng3, myLatlng4],
              //   strokeColor: "red",
              //   strokeOpacity: 0.8,
              //   strokeWeight: 2,
              //   fillColor: "red",
              //   fillOpacity: 0.3

              // });
              // jalurkabel.setMap(map);

// coba polyline
// ------------------------------------------------------------ //


          //   for (i = 0; i < markers.length; i++) {
          //       var data = markers[i];
          //       var temp1 = data.spmk_lokasi_koordinat_lat;
          //       var temp2 = data.spmk_lokasi_koordinat_long;
          //       var temp3 = data.spmk_lokasi_koordinat_lat2;
          //       var temp4 = data.spmk_lokasi_koordinat_long2;
          //       var temp5 = data.spmk_lokasi_koordinat_lat3;
          //       var temp6 = data.spmk_lokasi_koordinat_long3;
          //       var temp7 = data.spmk_lokasi_koordinat_lat4;
          //       var temp8 = data.spmk_lokasi_koordinat_long4;
          //   var hasil = eval('(' + temp1 + temp2 + temp3 + temp4 + temp5 + temp6 + temp7 + temp8 + ')');
          //           var pathnya = [];
                    
          //           for(var j=0;j < hasil.polyline.length;j++){
          //               pathnya[j] = {'lat':hasil.polyline[j][0],'lng':hasil.polyline[j][1]};
          //           }

          //           polylinenya = new google.maps.Polyline({
          //               path: pathnya,
          //               geodesic: true,
          //               strokeOpacity: 1.0,
          //               strokeWeight: 2
          //           });

          //           polylinenya.setMap(map);
          // }

    // ----------------------------------------------------------- //

        //      for (i = 0; i < markers.length; i++) {
        //         var data = markers[i];
        // var lat2nya = data.spmk_lokasi_koordinat_lat2;
        // var long2nya = data.spmk_lokasi_koordinat_long2;
        
        // var myLatlng = new google.maps.LatLng(lat2nya, long2nya);
        //         var marker = new google.maps.Marker({
        //             position: myLatlng,
        //             map: map,
        //             title: data.spmk_lokasi_nama
        //         });
        //         (function (marker, data) {
        //             google.maps.event.addListener(marker, "click", function (e) {
        //                 infoWindow.setContent('<b>Lokasi</b> :' + data.spmk_lokasi_nama + '<br>');
        //                 infoWindow.open(map, marker);
        //             });
        //         })(marker, data);
        //     }
        }
    </script>

                <!-- tutup maps -->    

                
            </div><!-- /.box -->
           
        
        
                        
             </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
         <!--  </section> -->

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

             <div class="row">
            <div class="col-md-12">
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

