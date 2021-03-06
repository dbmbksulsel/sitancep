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
            <li><i class="fa fa-users"></i> Informasi Data dan Dokumen</li>
          </ol>
          </section>

        <!-- Main content -->     
     
      
      <!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" action="datajalan_add-1.php" method="post" enctype="multipart/form-data" >
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
            <label class="col-sm-4 control-label"></label>
              <div class="col-sm-7">

                <?php
                    // $id_datajalan = 0;
                    $ortu = mysqli_query($konek, "SELECT * FROM datajalan");
                    while ($row=mysqli_fetch_array($ortu)) {

                      $id_datajalan = $row['id_datajalan'] + 1 ;
                    }
                  ?>
                <input type="hidden"  value="O0<?php echo $id_datajalan; ?>" readonly="readonly" class="form-control" name="kode_datajalan" >
              </div>
              </div>

               <div class="form-group">
              <label class="col-sm-4 control-label"></label>
              <div class="col-sm-7">

                <?php
                    $ortu = mysqli_query($konek, "SELECT * FROM datajalan");

                    while ($row=mysqli_fetch_array($ortu)) {
                      $addendum = 1;
                    }
                  ?>
                <input type="hidden"  value="<?php echo $addendum; ?>" readonly="readonly" class="form-control" name="addendum" >
              </div>
              </div>
           
           



            <div class="form-group">
              <label class="col-sm-4 control-label">Tahun Anggaran</label>
              <div class="col-sm-5">
                <input id="tahun-anggaran" name="tahun_anggaran" type="text"  class="form-control" placeholder="Tahun Anggaran" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Paket</label>
              <div class="col-sm-5">
                <textarea id="paket" name="paket" type="text"  class="form-control" placeholder="Paket" required/> </textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama PPTK</label>
              <div class="col-sm-5">
                <input id="pptk" name="pptk"  type="text" class="form-control" placeholder="Nama PPTK" required/>
              </div>
            </div>       

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama General Superintendent</label>
              <div class="col-sm-5">
                <input id="general" name="general"  type="text" class="form-control" placeholder="Nama General Superintendent" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Site Engineer</label>
              <div class="col-sm-5">
                <input id="site_engineer" name="site_engineer"  type="text" class="form-control" placeholder="Nama Site Engineer" required/>
              </div>
            </div>           

            <div class="form-group">
              <label class="col-sm-4 control-label">Penyedia Jasa</label>
              <div class="col-sm-5">
                <input id="penyedia_jasa" name="penyedia_jasa"  type="text" class="form-control" placeholder="Penyedia Jasa" required/>
              </div>
            </div>  

             <div class="form-group">
              <label class="col-sm-4 control-label">SPMK</label>
             
            </div>  

            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor</label>
              <div class="col-sm-5">
                <input id="spmk_nomor" name="spmk_nomor" type="text"  class="form-control" placeholder="Nomor" required/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-5">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
           <!--          <input  name="spmk_tanggal" type="text" class="form-control" placeholder="YYYY-MM-DD" required/> -->
                    <input  name="spmk_tanggal" type="date" class="form-control" placeholder="YYYY-MM-DD" data-toggle="tooltip" title="Format: mm/dd/yyyy"accept=" " required/>
                  </div>
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
                <input id="no_kontrak_awal" name="no_kontrak_awal" type="text"  class="form-control" placeholder="Nomor" required/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   <!--  <input  name="tanggal" type="text" class="form-control" placeholder="YYYY-MM-DD" required/> -->
                    <input  name="tanggal" type="date" class="form-control" placeholder="YYYY-MM-DD" data-toggle="tooltip" title="Format: mm/dd/yyyy"accept=" " required/>
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="nilai_kontrak" name="nilai_kontrak" type="text"  class="form-control" placeholder="Nilai Kontrak" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="waktu_pelaksanaan" name="waktu_pelaksanaan"  type="text" class="form-control" placeholder="Waktu Pelaksanaan" required/>
              </div>
            </div>     

             <div class="form-group">
              <label class="col-sm-4 control-label">Panjang Penanganan </label>
            </div>   
            

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="panjang_perkerasan_aspal" name="panjang_perkerasan_aspal"  type="text" class="form-control" placeholder="Perkerasan Aspal " required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="panjang_perkerasan_beton" name="panjang_perkerasan_beton"  type="text" class="form-control" placeholder="Perkerasan Beton " required/>
              </div>
            </div>  
            <div class="box-header with-border">  
            <div class="form-group">
            
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI</label>
             
            </div>   
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_aspal_rencana" name="jenis_perkerasan_aspal_rencana"  type="text" class="form-control" placeholder="Lebar Existing" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_aspal_desain" name="jenis_perkerasan_aspal_desain"  type="text" class="form-control" placeholder="Lebar Desain" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_beton_rencana" name="jenis_perkerasan_beton_rencana"  type="text" class="form-control" placeholder="Lebar Existing" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="jenis_perkerasan_beton_desain" name="jenis_perkerasan_beton_desain"  type="text" class="form-control" placeholder="Lebar Desain" required/>
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
    <i class="fa fa-user-md"></i> Addendum Kontrak 1</h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            <div class="form-group">
              <label class="col-sm-4 control-label">Nomor Kontrak Awal</label>
              <div class="col-sm-7">
                <input id="add1_no_kontrak" name="add1_no_kontrak" type="text"  class="form-control" placeholder="Nomor" required/>
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal</label>
                   <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input  name="add1_tanggal" type="date" class="form-control" placeholder="YYYY-MM-DD" data-toggle="tooltip" title="Format: mm/dd/yyyy"accept=" " required/>
                    <!-- <input type="date" class="form-control" required="required" data-toggle="tooltip" title="Format: yyyy/dd/mm" name="tgl_lhr"> -->
                  </div>
                  </div>
              </div>

              <div class="form-group">
              <label class="col-sm-4 control-label">Nilai Kontrak</label>
              <div class="col-sm-7">
                <input id="add1_nilai_kontrak" name="add1_nilai_kontrak" type="text"  class="form-control" placeholder="Nilai Kontrak" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Waktu Pelaksanaan</label>
              <div class="col-sm-7">
                <input id="add1_waktu_pelaksanaan" name="add1_waktu_pelaksanaan"  type="text" class="form-control" placeholder="Waktu Pelaksanaan" required/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Panjang Penanganan </label>
            </div>   
          

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal </label>
              <div class="col-sm-7">
                <input id="add1_panjang_perkerasan_aspal" name="add1_panjang_perkerasan_aspal"  type="text" class="form-control" placeholder="Perkerasan Aspal " required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton </label>
              <div class="col-sm-7">
                <input id="add1_panjang_perkerasan_beton" name="add1_panjang_perkerasan_beton"  type="text" class="form-control" placeholder="Perkerasan Beton " required/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">JENIS KONSTRUKSI </label>
            </div>   

            <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Aspal</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_aspal_rencana" name="add1_jenis_perkerasan_aspal_rencana"  type="text" class="form-control" placeholder="Lebar Existing" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_aspal_desain" name="add1_jenis_perkerasan_aspal_desain"  type="text" class="form-control" placeholder="Lebar Desain" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Perkerasan Beton</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Existing</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_beton_rencana" name="add1_jenis_perkerasan_beton_rencana"  type="text" class="form-control" placeholder="Lebar Rencana " required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Lebar Desain</label>
              <div class="col-sm-7">
                <input id="add1_jenis_perkerasan_beton_desain" name="add1_jenis_perkerasan_beton_desain"  type="text" class="form-control" placeholder="Lebar Desain" required/>
              </div>
            </div>  
                        
                         
            </div><!-- /.box-body -->
            </div><!-- /.box -->
            </div>
           
       


       
   <!-- <div class="row">   -->
    <div class="col-md-12"> 
    <div class="box box-danger">    
    <div class="box-header with-border">
    <h3 class="box-title">
    <i class="fa fa-user-md"></i></h3>
      <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
      <i class="fa fa-minus"></i></a>
    </div>   
            
            <div class="box-body"> 
            

              <div class="form-group">
              <label class="col-sm-4 control-label">Konsultan Supervisi</label>
              <div class="col-sm-7">
                <input id="spmk_konsultan" name="spmk_konsultan" type="text"  class="form-control" placeholder="Konsultan Supervisi" required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Progres Pekerjaan (%)</label>
              <div class="col-sm-7">
                <input id="spmk_progress" name="spmk_progress"  type="text" class="form-control" placeholder="Progres Pekerjaan (%)"/ required>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Realisasi Kontrak (Rp)</label>
              <div class="col-sm-7">
                <input id="spmk_realisasi" name="spmk_realisasi"  type="text" class="form-control" placeholder="Realisasi Kontrak (Rp)" required/>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Lokasi Kegiatan</label>
            </div>     


            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Ruas </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_nama" name="spmk_lokasi_nama"  type="text" class="form-control" placeholder="Nama Ruas" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Kabupaten/Kota </label>
              <div class="col-sm-7">
                <textarea id="spmk_lokasi_kabupaten" name="spmk_lokasi_kabupaten" type="text"  class="form-control" placeholder="Kabupaten/Kota" required> </textarea>
              </div>
            </div>    

            <div class="form-group">
              <label class="col-sm-4 control-label">Sta </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_sta" name="spmk_lokasi_sta"  type="text" class="form-control" placeholder="Sta" required/>
              </div>
            </div>    

             <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 1 </label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_lat"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
               <label class="col-sm-1 control-label">Longitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_long"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
            </div> 
             <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 2 </label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_lat2"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
               <label class="col-sm-1 control-label">Longitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_long2"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
            </div>   

             <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 3</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_lat3"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
               <label class="col-sm-1 control-label">Longitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_long3"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
            </div>  

             <div class="form-group">
              <label class="col-sm-4 control-label">Titik Koordinat 4</label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_lat4"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
               <label class="col-sm-1 control-label">Longitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_long4"  type="text" class="form-control" placeholder="Titik Koordinat" required/>
              </div>
            </div>  

            <!-- <div class="form-group">
              <label class="col-sm-4 control-label">Longitude </label>
              <div class="col-sm-7">
                <input id="spmk_lokasi_koordinat" name="spmk_lokasi_koordinat_long"  type="text" class="form-control" placeholder="Titik Koordinat"/>
              </div>
            </div>   -->

            

             <!-- <div class="form-group">
              <label class="col-sm-4 control-label"></label>
              <div class="col-sm-7">
                <input type="file" name="myfile"/>
                <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 2 MB!</small>
              </div> -->

            
                        
             </div><!-- /.box-body -->
            </div><!-- /.box -->
        
           
          </div><!-- /.row -->
        </section><!-- /.content -->
        <section>
        <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
               <div class="col-md-7 control-label">
                <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;
                  Simpan &nbsp;
                </button>
                <a href="addendum_filter.php" class="btn btn-danger" ><i class="fa fa-backward"></i>&nbsp; Kembali</a>
            </div>
            </div>    
            </div>
            </div>    
            <br>
            <br>

            </section>



        </form> 
       
    
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
