<?php

 

include "koneksi.php";
   include "header_cetak.php";
//getting id from url
$kode_datajalan  = $_GET["kode_datajalan"];


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
              spmk_lokasi_koordinat       
              FROM datajalan             
              WHERE kode_datajalan='".$kode_datajalan."'");
              
$res = mysqli_fetch_array($result);
 $bulan = array(
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember',
        );


    $tahun_anggaran3   = mysqli_query($konek, "SELECT tahun_anggaran FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $tahun_anggaran2  = mysqli_fetch_array($tahun_anggaran3);
    $tahun_anggaran1  = $tahun_anggaran2["tahun_anggaran"];

    $paket3   = mysqli_query($konek, "SELECT paket FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $paket2  = mysqli_fetch_array($paket3);
    $paket1  = $paket2["paket"];

    $pptk3   = mysqli_query($konek, "SELECT pptk FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $pptk2  = mysqli_fetch_array($pptk3);
    $pptk1  = $pptk2["pptk"];

    $general3   = mysqli_query($konek, "SELECT general FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $general2  = mysqli_fetch_array($general3);
    $general1  = $general2["general"];

    $site_engineer3   = mysqli_query($konek, "SELECT site_engineer, penyedia_jasa FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $site_engineer2  = mysqli_fetch_array($site_engineer3);
    $site_engineer1  = $site_engineer2["site_engineer"];
    $site_engineer2  = $site_engineer2["penyedia_jasa"];

    $no_kontrak_tanggal3   = mysqli_query($konek, "SELECT no_kontrak_awal, tanggal FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $no_kontrak_tanggal2  = mysqli_fetch_array($no_kontrak_tanggal3);
    $no_kontrak_tanggal1  = $no_kontrak_tanggal2["no_kontrak_awal"];
    $no_kontrak_tanggal2  = $no_kontrak_tanggal2["tanggal"];
    
    
?>

<!-- <body onload="window.print();"> -->
<style>
  table.no-border td{
    border-bottom:none;
  }
  table.no-border_vertikal td{
    border-right:none;
    border-left:none;
  }
</style>
<table  width="98%" border="0" cellpadding="0" cellspacing="0" >
  <tbody><tr>
   <td width="17%" rowspan="6" valign="top"><div align="center"><img style="width:50px;" src="../aset/foto/logo.png" alt="Boegis Media"></div></td>
  </tr>
  </tbody>

  <table  width="50%" border="1" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>

    
    <tr>
       <!--  <td width="17%" rowspan="6" valign="top"><div align="right"><img style="width:150px;" src="../aset/foto/logo.png" alt="Boegis Media"></div></td>
        <td width="1%" rowspan="6">&nbsp;</td> -->
        <td align="center" width="10%"><h5 style="margin:0;">PEMERINTAH PROPINSI SULAWESI SELATAN</h5></td>
      </tr>
      <tr>
        <td align="center" style="margin:0;"><h4 style="margin:0;"><strong>DINAS BINA MARGA DAN BINA KONSTRUKSI</strong></h4></td>
      </tr>
      
    <tr>
        <td align="center" width="10%" style="margin:0;">Jalan A. P. Pettarani Nomor 90, Telepon 0411-448309</td>
      </tr> 
      <tr>
        <td align="center" width="10%" style="margin:0;">Makassar 90231</td>
      </tr> 
    
      <!-- <tr>
        <td>&nbsp;</td>
      </tr> -->
    </tbody></table>

  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="view-row-content kop-dokumen no-border no-border_vertikal">
        <tbody>
          <tr>
          <td width="10%"></td>

        <td  width="2%" align="left"> </td>
          <td width="49%"></td>
          <td align="right" width="40%"></td>
          <td width="2%"></td>
        </tr>
        <tr>
          <td width="10%"></td>

        <td  width="2%" align="left"> </td>
          <td width="49%"></td>
          <td align="right" width="40%">Makassar, <?php echo date('d').' '.($bulan[date('m')]).' '.date('Y'); ?></td>
          <td width="2%">&nbsp;</td>
        </tr>
        
      </tbody></table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="view-row-content no-border no-border_vertikal">
        <tbody>
         <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Tahun</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $tahun_anggaran1 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Paket</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $paket1 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">PPTK</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $pptk1 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">General</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $general1 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Site Engineer</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $site_engineer1 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Penyedia Jasa</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $site_engineer2 ?></td>
        </tr>
       
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">No Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $no_kontrak_tanggal1 ?></td>
        </tr>
       
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $no_kontrak_tanggal2 ?></td>
        </tr>
       

 </td>
  </tr>
</tbody></table>
<!-- </body> -->

<?php
    include "footer_cetak.php";
?>