				<thead>
					<tr  class="text-red">
						<th>No</th>
						
						<th>File Name</th>
						<th>Type</th>
						<th>Size</th>
						<th>Date</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$kode_datajalan  = $_GET["kode_datajalan"];
						$querypelanggaransiswa = mysqli_query ($konek, "SELECT * FROM upload where pptk = '".$kode_datajalan."'" );
						$no = 1;
						if($querypelanggaransiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($pelanggaransiswa = mysqli_fetch_array ($querypelanggaransiswa)){
							
							echo "
								<tr>
									<td>$no</td>
									
									<td>$pelanggaransiswa[filename]</td>
									<td>$pelanggaransiswa[type]</td>
									<td>$pelanggaransiswa[size]</td>
									<td>$pelanggaransiswa[date]</td>
									
									<td>
										<a href='download.php?dow=".$pelanggaransiswa['filename']."' data-toggle='tooltip' title='Download' class='btn btn-xs btn-success'><span class='fa fa-cloud-download'></a>
										<a href='delete_download.php?del=".$pelanggaransiswa['filename']."' data-toggle='tooltip' title='Hapus Data' class='btn btn-xs  btn-danger'><span class='fa fa-trash-o'></a>
									</td>
								</tr>";
						$no++;
						}						
					?>
					
				</tbody>