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

    $datajalancetak3  = mysqli_query($konek, "SELECT 
              nilai_kontrak, 
              waktu_pelaksanaan, 
              panjang_perkerasan_aspal,
              panjang_perkerasan_beton,
              jenis_perkerasan_aspal_rencana,
              jenis_perkerasan_aspal_desain,
              jenis_perkerasan_beton_rencana,
              jenis_perkerasan_beton_desain,
              add1_no_kontrak,
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


    FROM datajalan WHERE kode_datajalan ='".$kode_datajalan."'");
    $datajalancetak2  = mysqli_fetch_array($datajalancetak3);
    $datajalancetak1  = $datajalancetak2["nilai_kontrak"];
    $datajalancetak4  = $datajalancetak2["waktu_pelaksanaan"];
    $datajalancetak5  = $datajalancetak2["panjang_perkerasan_aspal"];
    $datajalancetak6  = $datajalancetak2["panjang_perkerasan_beton"];
    $datajalancetak7  = $datajalancetak2["jenis_perkerasan_aspal_rencana"];
    $datajalancetak8  = $datajalancetak2["jenis_perkerasan_aspal_desain"];
    $datajalancetak9  = $datajalancetak2["jenis_perkerasan_beton_rencana"];
    $datajalancetak10 = $datajalancetak2["jenis_perkerasan_beton_desain"];
    $datajalancetak11 = $datajalancetak2["add1_no_kontrak"];
    $datajalancetak12 = $datajalancetak2["add1_tanggal"];
    $datajalancetak13 = $datajalancetak2["add1_nilai_kontrak"];
    $datajalancetak14  = $datajalancetak2["add1_waktu_pelaksanaan"];
    $datajalancetak15  = $datajalancetak2["add1_panjang_perkerasan_aspal"];
    $datajalancetak16  = $datajalancetak2["add1_panjang_perkerasan_beton"];
    $datajalancetak17  = $datajalancetak2["add1_jenis_perkerasan_aspal_rencana"];
    $datajalancetak18  = $datajalancetak2["add1_jenis_perkerasan_aspal_desain"];
    $datajalancetak19  = $datajalancetak2["add1_jenis_perkerasan_beton_rencana"];
    $datajalancetak20  = $datajalancetak2["add1_jenis_perkerasan_beton_desain"];

    $datajalancetak30 = $datajalancetak2["add2_no_kontrak"];
    $datajalancetak31 = $datajalancetak2["add2_tanggal"];
    $datajalancetak32 = $datajalancetak2["add2_nilai_kontrak"];
    $datajalancetak33  = $datajalancetak2["add2_waktu_pelaksanaan"];
    $datajalancetak34  = $datajalancetak2["add2_panjang_perkerasan_aspal"];
    $datajalancetak35  = $datajalancetak2["add2_panjang_perkerasan_beton"];
    $datajalancetak36  = $datajalancetak2["add2_jenis_perkerasan_aspal_rencana"];
    $datajalancetak37  = $datajalancetak2["add2_jenis_perkerasan_aspal_desain"];
    $datajalancetak38  = $datajalancetak2["add2_jenis_perkerasan_beton_rencana"];
    $datajalancetak39  = $datajalancetak2["add2_jenis_perkerasan_beton_desain"];

    $datajalancetak40 = $datajalancetak2["add3_no_kontrak"];
    $datajalancetak41 = $datajalancetak2["add3_tanggal"];
    $datajalancetak42 = $datajalancetak2["add3_nilai_kontrak"];
    $datajalancetak43  = $datajalancetak2["add3_waktu_pelaksanaan"];
    $datajalancetak44  = $datajalancetak2["add3_panjang_perkerasan_aspal"];
    $datajalancetak45  = $datajalancetak2["add3_panjang_perkerasan_beton"];
    $datajalancetak46  = $datajalancetak2["add3_jenis_perkerasan_aspal_rencana"];
    $datajalancetak47  = $datajalancetak2["add3_jenis_perkerasan_aspal_desain"];
    $datajalancetak48  = $datajalancetak2["add3_jenis_perkerasan_beton_rencana"];
    $datajalancetak49  = $datajalancetak2["add3_jenis_perkerasan_beton_desain"];

    $datajalancetak50 = $datajalancetak2["add4_no_kontrak"];
    $datajalancetak51 = $datajalancetak2["add4_tanggal"];
    $datajalancetak52 = $datajalancetak2["add4_nilai_kontrak"];
    $datajalancetak53  = $datajalancetak2["add4_waktu_pelaksanaan"];
    $datajalancetak54  = $datajalancetak2["add4_panjang_perkerasan_aspal"];
    $datajalancetak55  = $datajalancetak2["add4_panjang_perkerasan_beton"];
    $datajalancetak56  = $datajalancetak2["add4_jenis_perkerasan_aspal_rencana"];
    $datajalancetak57  = $datajalancetak2["add4_jenis_perkerasan_aspal_desain"];
    $datajalancetak58  = $datajalancetak2["add4_jenis_perkerasan_beton_rencana"];
    $datajalancetak59  = $datajalancetak2["add4_jenis_perkerasan_beton_desain"];






    $datajalancetak21 = $datajalancetak2["spmk_nomor"];
    $datajalancetak22 = $datajalancetak2["spmk_tanggal"];
    $datajalancetak23  = $datajalancetak2["spmk_konsultan"];
    $datajalancetak24  = $datajalancetak2["spmk_progress"];
    $datajalancetak25  = $datajalancetak2["spmk_realisasi"];
    $datajalancetak26  = $datajalancetak2["spmk_lokasi_nama"];
    $datajalancetak27  = $datajalancetak2["spmk_lokasi_kabupaten"];
    $datajalancetak28  = $datajalancetak2["spmk_lokasi_sta"];
    $datajalancetak80  = $datajalancetak2["spmk_lokasi_koordinat_lat"];
    $datajalancetak81 = $datajalancetak2["spmk_lokasi_koordinat_long"];
    $datajalancetak82  = $datajalancetak2["spmk_lokasi_koordinat_lat2"];
    $datajalancetak83 = $datajalancetak2["spmk_lokasi_koordinat_long2"];
    $datajalancetak84 = $datajalancetak2["spmk_lokasi_koordinat_lat3"];
    $datajalancetak85 = $datajalancetak2["spmk_lokasi_koordinat_long3"];
    $datajalancetak86 = $datajalancetak2["spmk_lokasi_koordinat_lat4"];
    $datajalancetak87 = $datajalancetak2["spmk_lokasi_koordinat_long4"];

    
    
?>

<!-- <body onload="window.print();"> -->
<style>
  table.no-border td{
    border-bottom:none;
    border-top:none;
  }
  table.no-border_vertikal td{
    border-right:none;
    border-left:none;
  }
  hr {
    border-color: black;
    height: 1px;
    border-bottom: 2px solid #616161;
  }
</style>
<!-- <table  width="98%" border="0" cellpadding="0" cellspacing="0" >
  <tbody><tr>
   <td width="17%" rowspan="6" valign="top"><div align="center"><img style="width:50px;" src="../aset/foto/logo.png" alt="Pemrop"></div></td>
  </tr>
  </tbody>
  </table>  -->
          <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
          
          <center><img style="width:50px;" src="../aset/foto/logo.png" alt="Pemrop"></center>
          
                </div><!-- /.box-header -->
                <div class="box-body">          
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

  <table width="50%" border="0" align="left" cellpadding="0" cellspacing="0" class="view-row-header kop-dokumen no-border no-border_vertikal">
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
        <td align="center" width="10%" style="margin:0;"><h6 style="margin:0;">Jalan A. P. Pettarani Nomor 90, Telepon 0411-448309</h6></td>
      </tr> 
      <tr>
        <td align="center" width="5%" style="margin:0;" ><h6 style="margin:0;">Makassar 90231</h6><hr color="black" align="center"></td>
      </tr>       
    </tbody><!-- </table> -->

  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="view-row-header no-border no-border_vertikal">
        <tbody>
          <!-- <tr>
          <td width="10%"></td>

        <td  width="2%" align="left"> </td>
          <td width="49%"></td>
          <td align="right" width="40%"></td>
          <td width="2%"></td>
        </tr> -->
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
          <td width="5%">&nbsp;</td>
          <td width="35%">Tahun</td>
          <td width="2%">:</td>
          <td width="60%"><?php echo $tahun_anggaran1 ?></td>
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
          <td width="21%"><strong>Surat Perjanjian Kontrak Awal</strong></td>
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

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Nilai Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak1 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Waktu Pelaksanaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak4 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Panjang Penanganan</td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Perkerasan Aspal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak5 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Perkerasan Beton</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak6 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Jenis Konstruksi</td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Aspal</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak7 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak8 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Beton</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak9 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak10 ?></td>
        </tr>
        

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%"><strong>Addendum Kontrak I</strong></td>
        </tr>

         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nomor Kontrak Awal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak11 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak12 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nilai Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak13 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Waktu Pelaksanaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak14 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Panjang Penanganan</td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Perkerasan Aspal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak15 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Perkerasan Beton</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak16 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Jenis Konstruksi</td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Aspal</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak17 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak18 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Beton</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak19 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak20 ?></td>
        </tr>

        <!-- pembatas addendum 1 -->

         <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%"><strong>Addendum Kontrak II</strong></td>
        </tr>

         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nomor Kontrak Awal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak30 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak31 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nilai Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak32 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Waktu Pelaksanaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak33 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Panjang Penanganan</td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Perkerasan Aspal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak34 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Perkerasan Beton</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak35 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Jenis Konstruksi</td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Aspal</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak36 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak37 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Beton</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak38 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak39 ?></td>
        </tr>
        <!-- pembatas addendum 2 -->

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%"><strong>Addendum Kontrak III</strong></td>
        </tr>

         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nomor Kontrak Awal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak40 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak41 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nilai Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak42 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Waktu Pelaksanaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak43 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Panjang Penanganan</td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Perkerasan Aspal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak44 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Perkerasan Beton</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak45 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Jenis Konstruksi</td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Aspal</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak46 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak47 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Beton</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak48 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak49 ?></td>
        </tr>
        <!-- pembatas addendum 3 -->

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%"><strong>Addendum Kontrak IV</strong></td>
        </tr>

         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nomor Kontrak Awal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak50 ?></td>
        </tr>
         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak51 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nilai Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak52 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Waktu Pelaksanaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak53 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Panjang Penanganan</td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Perkerasan Aspal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak54 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Perkerasan Beton</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak55 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">Jenis Konstruksi</td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Aspal</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak56 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak57 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;Perkerasan Beton</td>
        </tr>
       <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Rencana</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak58 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lebar Desain</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak59 ?></td>
        </tr>
        <!-- pembatas addendum 4 -->





        <tr>
          <td width="2%">&nbsp;</td>
          <td width="21%">S P M K</td>
        </tr>

         <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Nomor</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak21 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Tanggal</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak22 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Konsultan Revisi</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak23 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Progress Pekerjaan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak24 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Realisasi Kontrak</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak25 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Lokasi Kegiatan</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak26 ?></td>
        </tr>

        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Kabupaten/Kota</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak27 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Sta</td>
          <td width="2%">:</td>
          <td width="77%"><?php echo $datajalancetak28 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%">Titik Koordinat</td>
          <td width="2%">:</td>
          <td width="77%">1. <?php echo $datajalancetak80 ?>, <?php echo $datajalancetak81 ?>&nbsp; 2. <?php echo $datajalancetak82 ?>, <?php echo $datajalancetak83 ?></td>
        </tr>
        <tr>
          <td width="2%">&nbsp;&nbsp;</td>
          <td width="21%"></td>
          <td width="2%">:</td>
          <td width="77%">3. <?php echo $datajalancetak84 ?>, <?php echo $datajalancetak85 ?>&nbsp; 4. <?php echo $datajalancetak86 ?>, <?php echo $datajalancetak87 ?></td>
        </tr>


 </td>
  </tr>
</tbody></table>
<!-- </body> -->

<?php
    include "footer_cetak.php";
?>