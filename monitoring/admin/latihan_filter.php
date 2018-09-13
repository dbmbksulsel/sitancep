
<?php

include "../koneksi.php";






					
					if (isset($_GET['kode_addendum']))
					{
						if ($_GET['addendum'] == 1) {
							header('Location: addendum1.php');
							
						}
						elseif ($_GET['addendum'] == 2) {
							header('Location: addendum2.php');
						}
						elseif ($_GET['addendum'] == 3) {
							header('Location: addendum3.php');
						}
						elseif ($_GET['addendum'] == 4) {
							header('Location: addendum4.php');
						}
					}
					
?>
