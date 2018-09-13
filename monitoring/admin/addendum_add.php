
<?php

include "../koneksi.php";


$kode_addendum				= $_POST["kode_addendum"];
$addendum					= $_POST["addendum"];



if($add = mysqli_query($konek, "INSERT INTO latihan (id,kode_addendum,addendum) VALUES ('','$kode_addendum','$addendum')")){
	
	header("Location: latihan.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>
