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


 $tahun   =   mysqli_query($konek, "SELECT tahun_anggaran FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $tahun_datajalan = mysqli_fetch_array($tahun);
    $tahundatajalan = $tahun_datajalan["tahun_anggaran"];
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
<table  width="1050" height="1300" border="0" cellpadding="0" cellspacing="0" >
  <tbody><tr>
    <td valign="top">
  <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody><tr>
        <td width="15%" rowspan="5" valign="top"><div align="right"><img style="width:100px;" src="../aset/foto/logo.jpg" alt="Boegis Media"></div></td>
        <td width="1%" rowspan="5">&nbsp;</td>
        <td align="center" width="86%"><h4 style="margin:0;"><strong>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</strong></h4></td>
      </tr>
      <tr>
        <td align="center" style="margin:0;"><h4 style="margin:0;"><strong>UNIVERSITAS NEGERI MAKASSAR</strong></h4></td>
      </tr>
      <tr>
        <td align="center"><h4 style="margin:0;"><strong>FAKULTAS TEKNIK</strong></h4></td>
      </tr>
      <tr>
        <td align="center"><h4 style="margin:0;"><strong>JURUSAN PENDIDIKAN TEKNIK ELEKTRO</strong></h4></td>
      </tr>
    <tr>
        <td align="center">Alamat : Kampus FT UNM Parangtambung Makassar, Telp. (0411) 889629</td>
      </tr>
      <table rules="rows">
      <tbody>
      <tr> 
      <td width="1%" colspan="5">&nbsp;</td>
      </tr></tbody>
      </table>
<table  width="1050" height="1300" border="0" cellpadding="0" cellspacing="0" >
  <tbody><tr>
    <td valign="top">
  <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
    <tr>
        <td width="17%" rowspan="6" valign="top"><div align="right"><img style="width:100px;" src="../aset/foto/logo.jpg" alt="pemrov"></div></td>
        <td width="1%" rowspan="6">&nbsp;</td>
        <td align="center" width="86%"><h4 style="margin:0;"><strong>DINAS BINA MARGA DAN BINA KONSTRUKSI</strong></h4></td>
    </tr>
    <tr>
        <td align="center" style="margin:0;"><h4 style="margin:0;"><strong>PROVINSI SULAWESI SELATAN</strong></h4></td>
    </tr> 
    <tr>
        <td align="center">Alamat : Jalan Pettarani Makassar, Telp. (0411) 889629</td>
    </tr> 
    
      <!-- <tr>
        <td>&nbsp;</td>
      </tr> -->
    </tbody></table>

  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="view-row-content no-border no-border_vertikal">
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
         <tr>
          <td width="10%">Tahun</td>

        <td  width="2%" align="left">: </td>
          <td width="49%"><?php echo $tahundatajalan ?></td>
          <td align="right" width="40%">Makassar, <?php echo date('d').' '.($bulan[date('m')]).' '.date('Y'); ?></td>
          <td width="2%">&nbsp;</td>
        </tr>
        <tr>
          <td>Hal</td>

        <td  width="2%" align="left">: </td>
          <td><strong>Penunjukan Sebagai Pembimbing /
  Konsultasi Skripsi
</strong></td>
          <td></td>
          <td width="2%">&nbsp;</td>
        </tr>
     </tbody></table>
      <tr>
        <td>Dalam rangka penulisan Skripsi mahasiswa di bawah ini:</td>
      </tr>

      </tbody></table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="view-row-content no-border no-border_vertikal">
        <tbody><tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Nama</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $data['nama']; ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td>NIM</td>
          <td>:</td>
          <td><?php echo $nim; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Jurusan</td>
          <td>:</td>
          <td>Pendidikan Teknik Elektro</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Program Studi</td>
          <td>:</td>
          <td>Pendidikan Teknik Informatika dan Komputer - (S1)</td>
        </tr>
      </tbody></table>

      <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td>Diminta kesediaan Saudara untuk menjadi pembimbing/konsultasi dalam penulisan Skripsi dengan judul sementara :</td>
      </tr>

      </tbody></table>
       <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td align="center"><strong><?php echo $data_judul['judul']; ?></strong></td>
      </tr>

      </tbody></table>

      <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td>Judul tersebut masih dapat didiskusikan antara Saudara dengan Mahasiswa yang bersangkutan. Maksimal waktu pembimbingan 6 (enam) bulan terhitung dari tanggal dikeluarkannya SK pembimbing hingga siap ujian akhir. Jika dalam waktu tersebut proses pembimbingan belum selesai, maka tugas yang diberikan kepada Saudara akan ditinjau kembali.</td>
      </tr>
      <tr>
      <td>Kiranya sebelum penulisan Skripsi Mahasiswa tersebut terlebih dahulu memasukkan <strong>Kerangka Skripsi</strong> yang ditulis dan Saudara setujui untuk kami ketahui.</td>
      </tr>
      <tr>
      <td>Atas kesediaan dan perhatian diucapkan terima kasih.</td>
      </tr>
      </tbody></table>
     
  <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td><strong>Dr. H. Muhammad Yahya, M.Kes., M.Eng.</strong></td>
      </tr>
      <tr>
      <td><strong>NIP. 19630623 199103 1 002</strong></td>
      </tr>
      </tbody></table>


  <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td><u>Tembusan : </u></td>
      </tr>
      <tr>
      <td>1.&emsp; &emsp;Sekertaris Jurusan Pendidikan Teknik Elektro</td>
      </tr>
      <tr>
      <td>2.&emsp; &emsp;Ketua Prodi S1 Pendidikan Teknik Informatika dan Komputer</td>
      </tr>
      <tr>
      <td>3.&emsp; &emsp;Arsip</td>
      </tr>
      </tbody></table>

      <table  width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
    <tbody>
      <tr>
        <td><u>Tembusan : </u></td>
      </tr>
      <tr>
      <td>1.&emsp; &emsp;Sekertaris Jurusan Pendidikan Teknik Elektro</td>
      </tr>
      <tr>
      <td>2.&emsp; &emsp;Ketua Prodi S1 Pendidikan Teknik Informatika dan Komputer</td>
      </tr>
      <tr>
      <td>3.&emsp; &emsp;Arsip</td>
      </tr>
      </tbody></table>

 </td>
  </tr>
</tbody></table>
<!-- </body> -->

<?php
    include "footer_cetak.php";
?>