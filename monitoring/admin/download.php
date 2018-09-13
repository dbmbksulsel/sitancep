<?php
include('koneksi.php');

if (isset($_GET['dow'])) {
	// $type = $_GET['dow'];
	// $res = mysql_query("SELECT * FROM upload WHERE filename='$filename");
	// $data = mysqli_fetch_array ($res);

	// $file = 'uploads/'.$res['filename'];

	// header('Content-Type: application/octet-stream');
	// header('Content-Disposition: attachment; filename="'.basename($file).'"');
	// header('Content-Length: ' . filesize($file));
	// readfile($file);

	// if id is set then get the file with the id from database
// $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
// $db = mysql_select_db('sididok', $con);
$filename = $_GET['dow'];
$querydatajalan = mysqli_query($konek,"SELECT * FROM upload WHERE filename = '$filename'")or die('Error, query failed');
if($querydatajalan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}

while ($datajalan = mysqli_fetch_array ($querydatajalan)){


$file = 'uploads/'.$datajalan['filename'];

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Content-Length: ' . filesize($file));
	header('Content-Transfer-Encoding: binary');
  	header('Accept-Ranges: bytes');
	@readfile($file);

}
}




      ?>

