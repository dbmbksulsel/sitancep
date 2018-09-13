<?php

include "koneksi.php";

$id_upload	= $_GET["id_upload"];

if($delete = mysqli_query($konek, "DELETE FROM upload WHERE id_upload='$id_upload'")){
	header("Location: upload.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>