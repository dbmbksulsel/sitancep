<?php
   	require_once"koneksi.php";
    if(isset($_POST['edit_submit'])){
    	if (isset($_POST['Kode_Kelas_Siswa2'])){
    	$kelas1 = $_POST['Kode_Kelas_Siswa2'];
        $idArr = $_POST['checked_id'];
        foreach($idArr as $NIS){
            mysqli_query($konek,"UPDATE siswa1 SET Kode_Kelas_Siswa='$kelas1' WHERE NIS='".$NIS."'");
        } 

	    header("Location:siswa_pindah_kelas.php");
    }
}

?>