<?php
	include"DB_driver.php";
	
		$query = "SELECT * FROM penjadwalan ORDER BY ID_JADWAL";
		$hasil = mysql_query($query);
		
		$qdate = "SELECT DATEDIFF(END_DATE,START_DATE) FROM penjadwalan";
		$hasil2 = mysql_query($qdate);
		
		while ($data= mysql_fetch_array($hasil)){
		$data2= mysql_fetch_array($hasil2);
		
			$TEAM=$data['TIM_ID']; 
			$STREET=$data['STREET'];
			$BREW=$data['EXTENSION_ADDRESS'];
			$TOTAL_HOUSE=$data['HOUSE_NUMBER'];
			$START_DATE=$data['START_DATE'];
			$END_DATE=$data['END_DATE'];
			$DESCRIPTION=$data['DESCRIPTION'];
			$DURATION=$data2['DATEDIFF(END_DATE,START_DATE)'];
			
			echo "
				<tr>
					<td><center>$data[TIM_ID]</center></td>
					<td>$data[STREET]</td>
					<td>$data[EXTENSION_ADDRESS]</td>
					<td><center>$data[HOUSE_NUMBER]</center></td>
					<td><center>$data[START_DATE]</center></td>
					<td><center>$data[END_DATE]</center></td>
					<td><center>".$data2['DATEDIFF(END_DATE,START_DATE)']."</center></td>
					<td>$data[DESCRIPTION]</td>	
					<td>
						<div class='btn-group'>
							<a class='btn btn-danger' href=log_delete_jadwal.php?id=$data[ID_JADWAL]><i class='icon-trash icon-white'></i>Delete</a>
						</div>
					</td>		
				</tr>";
		//	var_dump($data2);	
		//	$counter = "++";
			}
		echo "</table>";
			
		
?>