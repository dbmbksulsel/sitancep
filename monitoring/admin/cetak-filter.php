
<?php

include "koneksi.php";






					$kode = $_GET['kode_datajalan'];
					if (isset($_GET['kode_datajalan']))
					{
						if ($_GET['addendum'] == 1) {
							// include "koneksi.php";
							// $semester 	= 	mysqli_query($konek, "SELECT * FROM datajalan WHERE addendum = 1");
							// 							$data_semester = mysqli_fetch_array($semester);
							// 							$semester_aktif = $data_semester['kode_datajalan'];
							$kode_datajalan = $_GET['kode_datajalan'];
							header("Location: cetak-addendum-1.php?kode_datajalan=$kode_datajalan");
							
						}
						elseif ($_GET['addendum'] == 2) {
							$kode_datajalan = $_GET['kode_datajalan'];
							header("Location: cetak-addendum-2.php?kode_datajalan=$kode_datajalan");
						}
						elseif ($_GET['addendum'] == 3) {
							$kode_datajalan = $_GET['kode_datajalan'];
							header("Location: cetak-addendum-3.php?kode_datajalan=$kode_datajalan");
						}
						elseif ($_GET['addendum'] == 4) {
							$kode_datajalan = $_GET['kode_datajalan'];
							header("Location: cetak-addendum-4.php?kode_datajalan=$kode_datajalan");
						}
						elseif ($_GET['addendum'] == 5) {
							$kode_datajalan = $_GET['kode_datajalan'];
							header("Location: cetak-addendum-5.php?kode_datajalan=$kode_datajalan");
						}
					}
					
?>
