<?php
error_reporting('notice');
session_start();
include "koneksi.php";

	// if ($_SESSION['sebagai'] !== 'admin') {
	// 	echo "
	// 		<script>window.location = 'dashboard.php'</script>
	// 	";
	// } elseif ($_SESSION['sebagai'] !== 'dosen') {
	// 	echo "
	// 		<script>window.location = 'dashboard_dosen.php'</script>
	// 	";
	// } elseif ($_SESSION['sebagai'] !== 'mahasiswa') {
	// 	echo "
	// 		<script>window.location = 'dashboard_mahasiswa.php'</script>
	// 	";
	// }

if(isset($_POST["login"]))
{
	/*
	if(empty($_POST['username']) or empty($_POST['password']))	{
		exit("<script>window.alert('Kolom Username atau Password harus diisi');window.history.back();</script>");
	}
	*/
	$username = $_POST['username'];
	$password = ($_POST['password']);
	$Password_Siswa = ($_POST['password']);
	$Username = $_POST['username'];
	$NIP	  = $_POST['username'];
	$NIS	  = $_POST['username'];
	// $sebagai  = $_POST['sebagai'];

	if($username=='admin')
	{
		$sql 	= mysqli_query($konek, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
 		
 		$row 	= mysqli_num_rows($sql);
 		$data 	= mysqli_fetch_array($sql);
 		$nama 	= $data['nama'];
 		$kode_admin 	= $data['kode_admin'];
		if ($row == 1)
		{
			$_SESSION['username']=$username;
			// $_SESSION['sebagai']=$sebagai;
			$_SESSION['nama']=$nama;
			$_SESSION['kode_admin']=$kode_admin;

			header("Location: admin/index.php?nama={$_SESSION['username']}&user=admin");
		}
		else
		{
			// echo"<div align='center'><h1>Login Gagal</h1></div>";
			exit("<script>window.alert('Login Gagal');window.history.back();</script>");
		}
	}
	else if($sebagai=='siswa')
	{
		$sql 	= mysqli_query($konek,"SELECT * FROM siswa1 WHERE NIS='$username' AND Password_Siswa='$password'");
 		
 		$row 	= mysqli_num_rows($sql);
 		$data 	= mysqli_fetch_array($sql);
 		$_SESSION['NIS']=$NIS;
 		$_SESSION['NIP_Siswa']=$NIP_Siswa;
 		$Nama_Siswa	= $data['Nama_Siswa'];
 		$NIP_Siswa	= $data['NIP_Siswa'];
 		$Ortu_Id_Siswa	= $data['Ortu_Id_Siswa'];
  		if ($row == 1)
  		{
  			$_SESSION['username']=$NIS;
  			$_SESSION['NIS']=$NIS;
  			$_SESSION['sebagai']=$sebagai;
			$_SESSION['Nama_Siswa']=$Nama_Siswa;
			$_SESSION['Ortu_Id_Siswa']=$Ortu_Id_Siswa;
			$_SESSION['NIP_Siswa']=$NIP_Siswa;
			$NIP_Siswa=$_GET['NIP_Siswa'];
			
  			header("Location: 2/index.php?NIS={$_SESSION['username']}&user=siswa");
		}
		else
		{
			// echo"<div align='center'><h1>Login Gagal</h1></div>";
			exit("<script>window.alert('Login Gagal');window.history.back();</script>");
		}
	}
	else if($sebagai=='ortu')
	{
		$sql 	= mysqli_query($konek,"SELECT * FROM ortu WHERE Username='$username' AND Password_Ortu='$password'");
 		
 		$row 	= mysqli_num_rows($sql);
 		$data 	= mysqli_fetch_array($sql);
 		$_SESSION['Username']=$Username;
 		$_SESSION['Ortu_id']=$Ortu_id;
 		$_SESSION['Nama_Ortu']=$Nama_Ortu;
 		$Nama_Ortu	= $data['Nama_Ortu'];
 		$Ortu_id	= $data['Ortu_id'];
 		
  		if ($row == 1)
  		{
  			$_SESSION['username']=$Username;
  			$_SESSION['sebagai']=$sebagai;
			$_SESSION['Nama_Ortu']=$Nama_Ortu;
			$_SESSION['Ortu_id']=$Ortu_id;
					
  			header("Location: 3/index.php?Username={$_SESSION['username']}&user=ortu");
		}
		else
		{
			// echo"<div align='center'><h1>Login Gagal</h1></div>";
			exit("<script>window.alert('Login Gagal');window.history.back();</script>");
		}
	}
		else if($sebagai=='guru')
	{
		$sql 	= mysqli_query($konek,"SELECT * FROM guru WHERE NIP='$username' AND Password_Guru='$password'");
 		
 		$row 	= mysqli_num_rows($sql);
 		$data 	= mysqli_fetch_array($sql);
 		$_SESSION['Username']=$Username;
 		$_SESSION['Nama_Guru']=$Nama_Guru;
 		$_SESSION['NIP']=$NIP;
 		$NIP	= $data['NIP'];
 		$Nama_Guru	= $data['Nama_Guru'];
 		$No_Telp	= $data['No_Telp'];
 		
  		if ($row == 1)
  		{
  			$_SESSION['username']=$NIP;
  			$_SESSION['sebagai']=$sebagai;
			$_SESSION['Nama_Guru']=$Nama_Guru;
			$_SESSION['No_Telp']=$No_Telp;
			$_SESSION['NIP']=$NIP;
			
					
  			header("Location: 4/index.php?NIP={$_SESSION['username']}&user=guru");
		}
			
		else
		{
			// echo"<div align='center'><h1>Login Gagal</h1></div>";
			exit("<script>window.alert('Login Gagal');window.history.back();</script>");
		}
	}
	else if($sebagai=='mahasiswa')
	{
		$sql 	= "SELECT * FROM mahasiswa WHERE nim='$username' AND password='$password'";
 		$query 	= mysql_query($sql);
 		$row 	= mysql_num_rows($query);
 		$data 	= mysql_fetch_array($query);
 		$nim	= $data['nim'];
 		$nama	= $data['nama'];
  		if ($row == 1)
  		{
  			$_SESSION['username']=$nim;
  			$_SESSION['sebagai']=$sebagai;
				$_SESSION['nama']=$nama;
  			header("Location: dashboard_mahasiswa.php?nim=$nim&jadwal=show");
		}
		else
		{
			// echo"<div align='center'><h1>Login Gagal</h1></div>";
			exit("<script>window.alert('Login Gagal');window.history.back();</script>");
		}
	}
}


?>
