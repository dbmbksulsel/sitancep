				<thead>
					<tr  class="text-red">
						<th>No</th>
						
						<th>Addendum</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelanggaransiswa = mysqli_query ($konek, "SELECT * FROM latihan ");
						$no = 1;
						if($querypelanggaransiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($pelanggaransiswa = mysqli_fetch_array ($querypelanggaransiswa)){
							
							echo "
								<tr>
									<td>$no</td>
									
									<td>$pelanggaransiswa[addendum]</td>
									
									
									<td>
										<a href='latihan_filter.php?kode_addendum=".$pelanggaransiswa['kode_addendum']."&addendum=".$pelanggaransiswa['addendum']."' class='btn btn-warning'><span class='fa fa-search'></a>
										<a href='datajalan_delete.php?id=".$pelanggaransiswa['id']."' class='btn btn-danger'><span class='fa fa-trash-o'></a>
										
									</td>
								</tr>";
						$no++;
						}						
					?>
					
				</tbody>