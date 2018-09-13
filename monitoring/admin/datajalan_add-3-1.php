
<?php

include "koneksi.php";

$kode_datajalan						= $_POST["kode_datajalan"];
$addendum							= $_POST["addendum"];
$tahun_anggaran						= $_POST["tahun_anggaran"];
$paket								= $_POST["paket"];
$pptk								= $_POST["pptk"];
$general							= $_POST["general"];
$site_engineer						= $_POST["site_engineer"];
$penyedia_jasa						= $_POST["penyedia_jasa"];
$no_kontrak_awal					= $_POST["no_kontrak_awal"];
$tanggal							= $_POST["tanggal"];
$nilai_kontrak						= $_POST["nilai_kontrak"];
$waktu_pelaksanaan					= $_POST["waktu_pelaksanaan"];
$panjang_perkerasan_aspal			= $_POST["panjang_perkerasan_aspal"];
$panjang_perkerasan_beton			= $_POST["panjang_perkerasan_beton"];
$jenis_perkerasan_aspal_rencana		= $_POST["jenis_perkerasan_aspal_rencana"];
$jenis_perkerasan_aspal_desain		= $_POST["jenis_perkerasan_aspal_desain"];
$jenis_perkerasan_beton_rencana		= $_POST["jenis_perkerasan_beton_rencana"];
$jenis_perkerasan_beton_desain		= $_POST["jenis_perkerasan_beton_desain"];

$add1_no_kontrak						= $_POST["add1_no_kontrak"];
$add1_tanggal							= $_POST["add1_tanggal"];
$add1_nilai_kontrak						= $_POST["add1_nilai_kontrak"];
$add1_waktu_pelaksanaan					= $_POST["add1_waktu_pelaksanaan"];
$add1_panjang_perkerasan_aspal			= $_POST["add1_panjang_perkerasan_aspal"];
$add1_panjang_perkerasan_beton			= $_POST["add1_panjang_perkerasan_beton"];
$add1_jenis_perkerasan_aspal_rencana	= $_POST["add1_jenis_perkerasan_aspal_rencana"];
$add1_jenis_perkerasan_aspal_desain		= $_POST["add1_jenis_perkerasan_aspal_desain"];
$add1_jenis_perkerasan_beton_rencana	= $_POST["add1_jenis_perkerasan_beton_rencana"];
$add1_jenis_perkerasan_beton_desain		= $_POST["add1_jenis_perkerasan_beton_desain"];

$add2_no_kontrak						= $_POST["add2_no_kontrak"];
$add2_tanggal							= $_POST["add2_tanggal"];
$add2_nilai_kontrak						= $_POST["add2_nilai_kontrak"];
$add2_waktu_pelaksanaan					= $_POST["add2_waktu_pelaksanaan"];
$add2_panjang_perkerasan_aspal			= $_POST["add2_panjang_perkerasan_aspal"];
$add2_panjang_perkerasan_beton			= $_POST["add2_panjang_perkerasan_beton"];
$add2_jenis_perkerasan_aspal_rencana	= $_POST["add2_jenis_perkerasan_aspal_rencana"];
$add2_jenis_perkerasan_aspal_desain		= $_POST["add2_jenis_perkerasan_aspal_desain"];
$add2_jenis_perkerasan_beton_rencana	= $_POST["add2_jenis_perkerasan_beton_rencana"];
$add2_jenis_perkerasan_beton_desain		= $_POST["add2_jenis_perkerasan_beton_desain"];

$add3_no_kontrak						= $_POST["add3_no_kontrak"];
$add3_tanggal							= $_POST["add3_tanggal"];
$add3_nilai_kontrak						= $_POST["add3_nilai_kontrak"];
$add3_waktu_pelaksanaan					= $_POST["add3_waktu_pelaksanaan"];
$add3_panjang_perkerasan_aspal			= $_POST["add3_panjang_perkerasan_aspal"];
$add3_panjang_perkerasan_beton			= $_POST["add3_panjang_perkerasan_beton"];
$add3_jenis_perkerasan_aspal_rencana	= $_POST["add3_jenis_perkerasan_aspal_rencana"];
$add3_jenis_perkerasan_aspal_desain		= $_POST["add3_jenis_perkerasan_aspal_desain"];
$add3_jenis_perkerasan_beton_rencana	= $_POST["add3_jenis_perkerasan_beton_rencana"];
$add3_jenis_perkerasan_beton_desain		= $_POST["add3_jenis_perkerasan_beton_desain"];

$spmk_nomor								= $_POST["spmk_nomor"];
$spmk_tanggal							= $_POST["spmk_tanggal"];
$spmk_konsultan							= $_POST["spmk_konsultan"];
$spmk_progress							= $_POST["spmk_progress"];
$spmk_realisasi							= $_POST["spmk_realisasi"];
$spmk_lokasi_nama						= $_POST["spmk_lokasi_nama"];
$spmk_lokasi_kabupaten					= $_POST["spmk_lokasi_kabupaten"];
$spmk_lokasi_sta						= $_POST["spmk_lokasi_sta"];
$spmk_lokasi_koordinat					= $_POST["spmk_lokasi_koordinat"];


if($add = mysqli_query($konek, 
	"INSERT INTO datajalan 
	(
	kode_datajalan,
	addendum,
	tahun_anggaran,
	paket,
	pptk,
	general,
	site_engineer,
	penyedia_jasa,
	no_kontrak_awal,
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


	spmk_nomor,
	spmk_tanggal,
	spmk_konsultan,
	spmk_progress,
	spmk_realisasi,
	spmk_lokasi_nama,
	spmk_lokasi_kabupaten,
	spmk_lokasi_sta,
	spmk_lokasi_koordinat
	) 
	VALUES 
	(
	'$kode_datajalan',
	'$addendum',
	'$tahun_anggaran',
	'$paket', 
	'$pptk',
	'$general', 
	'$site_engineer',
	'$penyedia_jasa', 
	'$no_kontrak_awal', 
	'$tanggal',
	'$nilai_kontrak',
	'$waktu_pelaksanaan',
	'$panjang_perkerasan_aspal',
	'$panjang_perkerasan_beton',
	'$jenis_perkerasan_aspal_rencana',
	'$jenis_perkerasan_aspal_desain',
	'$jenis_perkerasan_beton_rencana',
	'$jenis_perkerasan_beton_desain',
	'$add1_no_kontrak', 
	'$add1_tanggal',
	'$add1_nilai_kontrak',
	'$add1_waktu_pelaksanaan',
	'$add1_panjang_perkerasan_aspal',
	'$add1_panjang_perkerasan_beton',
	'$add1_jenis_perkerasan_aspal_rencana',
	'$add1_jenis_perkerasan_aspal_desain',
	'$add1_jenis_perkerasan_beton_rencana',
	'$add1_jenis_perkerasan_beton_desain',
	'$add2_no_kontrak', 
	'$add2_tanggal',
	'$add2_nilai_kontrak',
	'$add2_waktu_pelaksanaan',
	'$add2_panjang_perkerasan_aspal',
	'$add2_panjang_perkerasan_beton',
	'$add2_jenis_perkerasan_aspal_rencana',
	'$add2_jenis_perkerasan_aspal_desain',
	'$add2_jenis_perkerasan_beton_rencana',
	'$add2_jenis_perkerasan_beton_desain',
	'$add3_no_kontrak', 
	'$add3_tanggal',
	'$add3_nilai_kontrak',
	'$add3_waktu_pelaksanaan',
	'$add3_panjang_perkerasan_aspal',
	'$add3_panjang_perkerasan_beton',
	'$add3_jenis_perkerasan_aspal_rencana',
	'$add3_jenis_perkerasan_aspal_desain',
	'$add3_jenis_perkerasan_beton_rencana',
	'$add3_jenis_perkerasan_beton_desain',
	'$spmk_nomor', 
	'$spmk_tanggal',
	'$spmk_konsultan',
	'$spmk_progress',
	'$spmk_realisasi',
	'$spmk_lokasi_nama',
	'$spmk_lokasi_kabupaten',
	'$spmk_lokasi_sta',
	'$spmk_lokasi_koordinat'

	)")){


	header("Location: lihat_datajalan.php");
	exit();

}
	
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>
