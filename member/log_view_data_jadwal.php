<?php
	include"DB_driver.php";
	
		$query = "SELECT * FROM penjadwalan WHERE TIM_ID='$qhasilteam' ORDER BY ID_JADWAL";
		$hasil = mysql_query($query);
		
		$qdate = "SELECT DATEDIFF(END_DATE,START_DATE) FROM penjadwalan";
		$hasil2 = mysql_query($qdate);
		
		while ($data= mysql_fetch_array($hasil)){
		$data2= mysql_fetch_array($hasil2);
		
			$STREET=$data['STREET'];
			$BREW=$data['EXTENSION_ADDRESS'];
			$TOTAL_HOUSE=$data['HOUSE_NUMBER'];
			$START_DATE=$data['START_DATE'];
			$END_DATE=$data['END_DATE'];
			$DURATION=$data2['DATEDIFF(END_DATE,START_DATE)'];
			$DESCRIPTION=$data['DESCRIPTION'];
			echo "
				<tr>
					<td>$data[STREET]</td>
					<td><center>$data[EXTENSION_ADDRESS]</center></td>
					<td><center>$data[HOUSE_NUMBER]</center></td>
					<td><center>$data[START_DATE]</center></td>
					<td><center>$data[END_DATE]</center></td>
					<td><center>".$data2['DATEDIFF(END_DATE,START_DATE)']."</center></td>
					<td>$data[DESCRIPTION]</td>							
				</tr>";
				
			$counter = "++";
		}
		echo "</table>";
			
		
?>