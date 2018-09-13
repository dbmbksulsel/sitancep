
					<?php
					include "koneksi.php";
						$querydatajalan = mysqli_query ($konek, "SELECT id_datajalan, addendum, kode_datajalan, tahun_anggaran, paket, pptk, general,site_engineer, penyedia_jasa,  no_kontrak_awal, DATE_FORMAT(Tanggal, '%d-%m-%Y')as tanggal,  nilai_kontrak, waktu_pelaksanaan, panjang_perkerasan_aspal, panjang_perkerasan_beton, jenis_perkerasan_aspal_rencana, jenis_perkerasan_aspal_desain, jenis_perkerasan_beton_rencana,jenis_perkerasan_beton_desain 
							FROM datajalan 							
							");
						$msg = "";
						$no = 1;
						if($querydatajalan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($datajalan = mysqli_fetch_array ($querydatajalan)){


					$msg .= "<tbody>
				 <tr valign='top'>
                    <td>".$no."</td>                   
				 <td align='left'>				    
					<strong>File Name : </strong> ".$datajalan['addendum']." <br />	
					<strong>File Descripitons : </strong> ".$datajalan['tahun_anggaran']." <br />
					<strong>File Uploader : </strong> ".$datajalan['paket']." <br />				  		   
				    <strong>Uploaded On : </strong> ".$datajalan['pptk']." <br />
				    				   
				 </td>
				   
				            
				</tr> 	     
    		</tbody>
    
    ";
    $no++;
			 
	
}
//$msg = "<div class='data'><table>" . $msg . "</table></div>"; // Content for Data
$msg = "
<div class='data'>
<table border='0' cellspacing='1' width='100%' align='center' class='table table-bordered'>
            <thead  class='table_headers'>
                <tr>
                    <th><strong>S/N</strong></th>
                    <th><strong>File Descriptions</strong></th>

                </tr>  
            </thead>
	" . $msg . "
</table>
</div>";


					?>


					
