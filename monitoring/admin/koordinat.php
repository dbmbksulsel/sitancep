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
    <title>SISTEM INFORMASI DATA DAN DOKUMENTASI</title>
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
                <input type="text"  value="<?php echo $addendum; ?>" readonly="readonly" class="form-control" name="addendum" >
              </div>
              </div>
           
           



            <div class="form-group">
              <label class="col-sm-4 control-label">Tahun Anggaran</label>
              <div class="col-sm-5">
                <input id="tahun-anggaran" name="tahun_anggaran" type="text"  class="form-control" placeholder="Tahun Anggaran"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Paket</label>
              <div class="col-sm-5">
                <textarea id="paket" name="paket" type="text"  class="form-control" placeholder="Paket"> </textarea>
              </div>
            </div>

            
           
                        
            
            </div>               
            </div><!-- /.box-body -->
            </div><!-- /.box -->
            </div><!-- /.row -->
        </section><!-- /.content -->
   
       


       
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
              <label class="col-sm-4 control-label">Titik Koordinat 1 </label>
            </div> 

            <div class="form-group">
              <label class="col-sm-4 control-label">Latitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="lat[0]"  type="text" class="form-control" placeholder="Titik Koordinat"/>
              </div>
               <label class="col-sm-1 control-label">Longitude </label>
              <div class="col-sm-3">
                <input id="spmk_lokasi_koordinat" name="long[0]"  type="text" class="form-control" placeholder="Titik Koordinat"/>
              
              </div>
              <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="fa fa-plus"></i></button>

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
            <script>
            var i = 1;
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var jenis = document.createElement('td');
                var jumlah = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(jenis);
                row.appendChild(jumlah);
                row.appendChild(aksi);

//                membuat element input
                var jenis_input = document.createElement('input');
                jenis_input.setAttribute('name', 'jenis_input[' + i + ']');
                jenis_input.setAttribute('class', 'input-block-level');

                var jumlah_input = document.createElement('input');
                jumlah_input.setAttribute('name', 'jumlah_input[' + i + ']');
                jumlah_input.setAttribute('class', 'input-block-level');

                var hapus = document.createElement('span');

//                meng append element input
                jenis.appendChild(jenis_input);
                jumlah.appendChild(jumlah_input);
                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="icon-trash"></i></button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
            }
        </script>
        
           
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
