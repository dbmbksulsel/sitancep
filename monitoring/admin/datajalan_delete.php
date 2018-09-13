<?php

include "../koneksi.php";

$id_datajalan	= $_GET["id_datajalan"];

if($delete = mysqli_query($konek, "DELETE FROM datajalan WHERE id_datajalan='$id_datajalan'")){
	header("Location: lihat_datajalan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>