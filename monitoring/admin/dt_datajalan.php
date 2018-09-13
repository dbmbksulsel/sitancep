				<thead>
					<tr class="text-green">
						<th class="col-sm-0">No</th>	
						<th class="col-sm-1">Tahun Anggaran</th>						
						<th class="col-sm-2">Paket</th>
						<th class="col-sm-2">Nama PPTK</th>
						<th class="col-sm-2">Nama General Superintendent</th>
						<th class="col-sm-2">Nama Site Engineer</th>
						<th class="col-sm-1">Penyedia Jasa</th>
						<th class="col-sm-1">No Kontrak Awal</th>					
						<th class="col-sm-3">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include "koneksi.php";
						$querydatajalan = mysqli_query ($konek, "SELECT id_datajalan, addendum, kode_datajalan, tahun_anggaran, paket, pptk, general,site_engineer, penyedia_jasa,  no_kontrak_awal, DATE_FORMAT(Tanggal, '%d-%m-%Y')as tanggal,  nilai_kontrak, waktu_pelaksanaan, panjang_perkerasan_aspal, panjang_perkerasan_beton, jenis_perkerasan_aspal_rencana, jenis_perkerasan_aspal_desain, jenis_perkerasan_beton_rencana,jenis_perkerasan_beton_desain 
							FROM datajalan 							
							");
						$no = 1;
						if($querydatajalan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($datajalan = mysqli_fetch_array ($querydatajalan)){
							
							echo "<tr>";

							echo "		<td>".$no."</td> ";

							
							echo "		<td>".$datajalan['tahun_anggaran']."</td> ";
							echo "		<td>".$datajalan['paket']."</td> ";
							echo "		<td>".$datajalan['pptk']."</td> ";
							echo "		<td>".$datajalan['general']."</td> ";
							echo "		<td>".$datajalan['site_engineer']."</td> ";
							echo "		<td>".$datajalan['penyedia_jasa']."</td> ";
							echo "		<td>".$datajalan['no_kontrak_awal']."</td> ";
							
							echo "		<td>
										<a href='data-jalan-filter.php?kode_datajalan=".$datajalan['kode_datajalan']."&addendum=".$datajalan['addendum']."' data-toggle='tooltip' title='Detail & Edit Data' class='btn btn-xs btn-warning'><span class='fa fa-search'></a>
										<a href='datajalan_delete.php?id_datajalan=".$datajalan['id_datajalan']."' data-toggle='tooltip' title='Hapus Data' class='btn btn-xs btn-danger'><span class='fa fa-trash-o'></a>			
										<a href='cetak-filter.php?kode_datajalan=".$datajalan['kode_datajalan']."&addendum=".$datajalan['addendum']."' data-toggle='tooltip' title='Cetak' class='btn btn-xs btn-info' target='_blank'><span class='fa fa-print'></a>
										
									</td>";
							echo "	</tr>";
						$no++;
						}						
					?>


					
					
				</tbody>