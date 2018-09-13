<?php

session_start();
include "../koneksi.php";
?>
<?php
  if ($_SESSION['username'] !== 'admin')
  {
    echo "<script>window.location = 'admin/index.php'</script>";
  }
?>
<?php
include "koneksi.php";
$kode_datajalan = $_GET['kode_datajalan'];
if(isset($_POST['update']))
{ 


  


$tahun_anggaran                       = mysqli_real_escape_string($konek, $_POST["tahun_anggaran"]);
$paket                                = mysqli_real_escape_string($konek, $_POST["paket"]);
$pptk                                 = mysqli_real_escape_string($konek, $_POST["pptk"]);
$general                              = mysqli_real_escape_string($konek, $_POST["general"]);
$site_engineer                        = mysqli_real_escape_string($konek, $_POST["site_engineer"]);
$penyedia_jasa                        = mysqli_real_escape_string($konek, $_POST["penyedia_jasa"]);
$no_kontrak_awal                      = mysqli_real_escape_string($konek, $_POST["no_kontrak_awal"]);
$tanggal                              = mysqli_real_escape_string($konek, $_POST["tanggal"]);
$nilai_kontrak                        = mysqli_real_escape_string($konek, $_POST["nilai_kontrak"]);
$waktu_pelaksanaan                    = mysqli_real_escape_string($konek, $_POST["waktu_pelaksanaan"]);
$panjang_perkerasan_aspal             = mysqli_real_escape_string($konek, $_POST["panjang_perkerasan_aspal"]);
$panjang_perkerasan_beton             = mysqli_real_escape_string($konek, $_POST["panjang_perkerasan_beton"]);
$jenis_perkerasan_aspal_rencana       = mysqli_real_escape_string($konek, $_POST["jenis_perkerasan_aspal_rencana"]);
$jenis_perkerasan_aspal_desain        = mysqli_real_escape_string($konek, $_POST["jenis_perkerasan_aspal_desain"]);
$jenis_perkerasan_beton_rencana       = mysqli_real_escape_string($konek, $_POST["jenis_perkerasan_beton_rencana"]);
$jenis_perkerasan_beton_desain        = mysqli_real_escape_string($konek, $_POST["jenis_perkerasan_beton_desain"]);

$add1_no_kontrak                      = mysqli_real_escape_string($konek, $_POST["add1_no_kontrak"]);
$add1_tanggal                         = mysqli_real_escape_string($konek, $_POST["add1_tanggal"]);
$add1_nilai_kontrak                   = mysqli_real_escape_string($konek, $_POST["add1_nilai_kontrak"]);
$add1_waktu_pelaksanaan               = mysqli_real_escape_string($konek, $_POST["add1_waktu_pelaksanaan"]);
$add1_panjang_perkerasan_aspal        = mysqli_real_escape_string($konek, $_POST["add1_panjang_perkerasan_aspal"]);
$add1_panjang_perkerasan_beton        = mysqli_real_escape_string($konek, $_POST["add1_panjang_perkerasan_beton"]);
$add1_jenis_perkerasan_aspal_rencana  = mysqli_real_escape_string($konek, $_POST["add1_jenis_perkerasan_aspal_rencana"]);
$add1_jenis_perkerasan_aspal_desain   = mysqli_real_escape_string($konek, $_POST["add1_jenis_perkerasan_aspal_desain"]);
$add1_jenis_perkerasan_beton_rencana  = mysqli_real_escape_string($konek, $_POST["add1_jenis_perkerasan_beton_rencana"]);
$add1_jenis_perkerasan_beton_desain   = mysqli_real_escape_string($konek, $_POST["add1_jenis_perkerasan_beton_desain"]);

$add2_no_kontrak                      = mysqli_real_escape_string($konek, $_POST["add2_no_kontrak"]);
$add2_tanggal                         = mysqli_real_escape_string($konek, $_POST["add2_tanggal"]);
$add2_nilai_kontrak                   = mysqli_real_escape_string($konek, $_POST["add2_nilai_kontrak"]);
$add2_waktu_pelaksanaan               = mysqli_real_escape_string($konek, $_POST["add2_waktu_pelaksanaan"]);
$add2_panjang_perkerasan_aspal        = mysqli_real_escape_string($konek, $_POST["add2_panjang_perkerasan_aspal"]);
$add2_panjang_perkerasan_beton        = mysqli_real_escape_string($konek, $_POST["add2_panjang_perkerasan_beton"]);
$add2_jenis_perkerasan_aspal_rencana  = mysqli_real_escape_string($konek, $_POST["add2_jenis_perkerasan_aspal_rencana"]);
$add2_jenis_perkerasan_aspal_desain   = mysqli_real_escape_string($konek, $_POST["add2_jenis_perkerasan_aspal_desain"]);
$add2_jenis_perkerasan_beton_rencana  = mysqli_real_escape_string($konek, $_POST["add2_jenis_perkerasan_beton_rencana"]);
$add2_jenis_perkerasan_beton_desain   = mysqli_real_escape_string($konek, $_POST["add2_jenis_perkerasan_beton_desain"]);

$add3_no_kontrak                      = mysqli_real_escape_string($konek, $_POST["add3_no_kontrak"]);
$add3_tanggal                         = mysqli_real_escape_string($konek, $_POST["add3_tanggal"]);
$add3_nilai_kontrak                   = mysqli_real_escape_string($konek, $_POST["add3_nilai_kontrak"]);
$add3_waktu_pelaksanaan               = mysqli_real_escape_string($konek, $_POST["add3_waktu_pelaksanaan"]);
$add3_panjang_perkerasan_aspal        = mysqli_real_escape_string($konek, $_POST["add3_panjang_perkerasan_aspal"]);
$add3_panjang_perkerasan_beton        = mysqli_real_escape_string($konek, $_POST["add3_panjang_perkerasan_beton"]);
$add3_jenis_perkerasan_aspal_rencana  = mysqli_real_escape_string($konek, $_POST["add3_jenis_perkerasan_aspal_rencana"]);
$add3_jenis_perkerasan_aspal_desain   = mysqli_real_escape_string($konek, $_POST["add3_jenis_perkerasan_aspal_desain"]);
$add3_jenis_perkerasan_beton_rencana  = mysqli_real_escape_string($konek, $_POST["add3_jenis_perkerasan_beton_rencana"]);
$add3_jenis_perkerasan_beton_desain   = mysqli_real_escape_string($konek, $_POST["add3_jenis_perkerasan_beton_desain"]);

$add4_no_kontrak                      = mysqli_real_escape_string($konek, $_POST["add4_no_kontrak"]);
$add4_tanggal                         = mysqli_real_escape_string($konek, $_POST["add4_tanggal"]);
$add4_nilai_kontrak                   = mysqli_real_escape_string($konek, $_POST["add4_nilai_kontrak"]);
$add4_waktu_pelaksanaan               = mysqli_real_escape_string($konek, $_POST["add4_waktu_pelaksanaan"]);
$add4_panjang_perkerasan_aspal        = mysqli_real_escape_string($konek, $_POST["add4_panjang_perkerasan_aspal"]);
$add4_panjang_perkerasan_beton        = mysqli_real_escape_string($konek, $_POST["add4_panjang_perkerasan_beton"]);
$add4_jenis_perkerasan_aspal_rencana  = mysqli_real_escape_string($konek, $_POST["add4_jenis_perkerasan_aspal_rencana"]);
$add4_jenis_perkerasan_aspal_desain   = mysqli_real_escape_string($konek, $_POST["add4_jenis_perkerasan_aspal_desain"]);
$add4_jenis_perkerasan_beton_rencana  = mysqli_real_escape_string($konek, $_POST["add4_jenis_perkerasan_beton_rencana"]);
$add4_jenis_perkerasan_beton_desain   = mysqli_real_escape_string($konek, $_POST["add4_jenis_perkerasan_beton_desain"]);

$spmk_nomor                           = mysqli_real_escape_string($konek, $_POST["spmk_nomor"]);
$spmk_tanggal                         = mysqli_real_escape_string($konek, $_POST["spmk_tanggal"]);

$spmk_konsultan                       = mysqli_real_escape_string($konek, $_POST["spmk_konsultan"]);
$spmk_progress                        = mysqli_real_escape_string($konek, $_POST["spmk_progress"]);
$spmk_realisasi                       = mysqli_real_escape_string($konek, $_POST["spmk_realisasi"]);
$spmk_lokasi_nama                     = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_nama"]);
$spmk_lokasi_kabupaten                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_kabupaten"]);
$spmk_lokasi_sta                      = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_sta"]);
$spmk_lokasi_koordinat_lat                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_lat"]);
$spmk_lokasi_koordinat_long                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_long"]);

$spmk_lokasi_koordinat_lat2                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_lat2"]);
$spmk_lokasi_koordinat_long2                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_long2"]);

$spmk_lokasi_koordinat_lat3                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_lat3"]);
$spmk_lokasi_koordinat_long3                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_long3"]);

$spmk_lokasi_koordinat_lat4                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_lat4"]);
$spmk_lokasi_koordinat_long4                = mysqli_real_escape_string($konek, $_POST["spmk_lokasi_koordinat_long4"]);



 if(empty(
  $_POST['tahun_anggaran']) or 
  empty($_POST['paket']) 
  ){
      echo "<script>window.alert('Kolom harus diisi');
      window.location='datajalan-addendum-4-edit.php'</script>";      
    }else{ 
    //updating the table
    if ($result = mysqli_query($konek,"UPDATE datajalan SET 
              kode_datajalan='$kode_datajalan',
              tahun_anggaran='$tahun_anggaran',
              paket='$paket',
              pptk='$pptk',
              general='$general',
              site_engineer='$site_engineer',
              penyedia_jasa='$penyedia_jasa',
              no_kontrak_awal='$no_kontrak_awal',
              tanggal='$tanggal',  
              nilai_kontrak='$nilai_kontrak',
              waktu_pelaksanaan='$waktu_pelaksanaan',
              panjang_perkerasan_aspal='$panjang_perkerasan_aspal',
              panjang_perkerasan_beton='$panjang_perkerasan_beton',
              jenis_perkerasan_aspal_rencana='$jenis_perkerasan_aspal_rencana',
              jenis_perkerasan_aspal_desain='$jenis_perkerasan_aspal_desain',
              jenis_perkerasan_beton_rencana='$jenis_perkerasan_beton_rencana',
              jenis_perkerasan_beton_desain='$jenis_perkerasan_beton_desain',
              add1_no_kontrak='$add1_no_kontrak',
              add1_tanggal='$add1_tanggal',  
              add1_nilai_kontrak='$add1_nilai_kontrak',
              add1_waktu_pelaksanaan='$add1_waktu_pelaksanaan',
              add1_panjang_perkerasan_aspal='$add1_panjang_perkerasan_aspal',
              add1_panjang_perkerasan_beton='$add1_panjang_perkerasan_beton',
              add1_jenis_perkerasan_aspal_rencana='$add1_jenis_perkerasan_aspal_rencana',
              add1_jenis_perkerasan_aspal_desain='$add1_jenis_perkerasan_aspal_desain',
              add1_jenis_perkerasan_beton_rencana='$add1_jenis_perkerasan_beton_rencana',
              add1_jenis_perkerasan_beton_desain='$add1_jenis_perkerasan_beton_desain',
              add2_no_kontrak='$add2_no_kontrak',
              add2_tanggal='$add2_tanggal',
              add2_nilai_kontrak='$add2_nilai_kontrak',
              add2_waktu_pelaksanaan='$add2_waktu_pelaksanaan',
              add2_panjang_perkerasan_aspal='$add2_panjang_perkerasan_aspal',
              add2_panjang_perkerasan_beton='$add2_panjang_perkerasan_beton',
              add2_jenis_perkerasan_aspal_rencana='$add2_jenis_perkerasan_aspal_rencana',
              add2_jenis_perkerasan_aspal_desain='$add2_jenis_perkerasan_aspal_desain',
              add2_jenis_perkerasan_beton_rencana='$add2_jenis_perkerasan_beton_rencana',
              add2_jenis_perkerasan_beton_desain='$add2_jenis_perkerasan_beton_desain',
              add3_no_kontrak='$add3_no_kontrak',
              add3_tanggal='$add3_tanggal',
              add3_nilai_kontrak='$add3_nilai_kontrak',
              add3_waktu_pelaksanaan='$add3_waktu_pelaksanaan',
              add3_panjang_perkerasan_aspal='$add3_panjang_perkerasan_aspal',
              add3_panjang_perkerasan_beton='$add3_panjang_perkerasan_beton',
              add3_jenis_perkerasan_aspal_rencana='$add3_jenis_perkerasan_aspal_rencana',
              add3_jenis_perkerasan_aspal_desain='$add3_jenis_perkerasan_aspal_desain',
              add3_jenis_perkerasan_beton_rencana='$add3_jenis_perkerasan_beton_rencana',
              add3_jenis_perkerasan_beton_desain='$add3_jenis_perkerasan_beton_desain',
              add4_no_kontrak='$add4_no_kontrak',
              add4_tanggal='$add4_tanggal',
              add4_nilai_kontrak='$add4_nilai_kontrak',
              add4_waktu_pelaksanaan='$add4_waktu_pelaksanaan',
              add4_panjang_perkerasan_aspal='$add4_panjang_perkerasan_aspal',
              add4_panjang_perkerasan_beton='$add4_panjang_perkerasan_beton',
              add4_jenis_perkerasan_aspal_rencana='$add4_jenis_perkerasan_aspal_rencana',
              add4_jenis_perkerasan_aspal_desain='$add4_jenis_perkerasan_aspal_desain',
              add4_jenis_perkerasan_beton_rencana='$add4_jenis_perkerasan_beton_rencana',
              add4_jenis_perkerasan_beton_desain='$add4_jenis_perkerasan_beton_desain',
              spmk_nomor='$spmk_nomor',
              spmk_tanggal='$spmk_tanggal',
              spmk_konsultan='$spmk_konsultan',
              spmk_progress='$spmk_progress',
              spmk_realisasi='$spmk_realisasi',
              spmk_lokasi_nama='$spmk_lokasi_nama',
              spmk_lokasi_kabupaten='$spmk_lokasi_kabupaten',
              spmk_lokasi_sta='$spmk_lokasi_sta',
              spmk_lokasi_koordinat_lat ='$spmk_lokasi_koordinat_lat',  
              spmk_lokasi_koordinat_long ='$spmk_lokasi_koordinat_long',
              spmk_lokasi_koordinat_lat2 ='$spmk_lokasi_koordinat_lat2',  
              spmk_lokasi_koordinat_long2 ='$spmk_lokasi_koordinat_long2',
              spmk_lokasi_koordinat_lat3 ='$spmk_lokasi_koordinat_lat3',  
              spmk_lokasi_koordinat_long3 ='$spmk_lokasi_koordinat_long3',
              spmk_lokasi_koordinat_lat4 ='$spmk_lokasi_koordinat_lat4',  
              spmk_lokasi_koordinat_long4 ='$spmk_lokasi_koordinat_long4'            

              WHERE kode_datajalan='".$kode_datajalan."'"))
              {

              //redirectig to the display page. In our case, it is index.php
                header("Location: lihat_datajalan.php");
              }

            }
          }
?>
?>


     


