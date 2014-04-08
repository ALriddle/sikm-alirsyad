<?php
include"DB_driver.php";

//USER ID
$user = $_SESSION['USERNAME_PEGAWAI'];

//TIMEKEY
$setzone = 	date_default_timezone_set('Asia/Jakarta'); 
$date = date('Y/m/d h:i:s',time());


//STREET & EXTENSION ADDRESS
$query = "SELECT DISTINCT STREET, EXTENSION_ADDRESS FROM master_pelanggan WHERE (STREET, EXTENSION_ADDRESS) NOT IN (SELECT STREET, EXTENSION_ADDRESS FROM penjadwalan) ORDER BY STREET";
$hasil = mysql_query($query);
$jml_data = mysql_num_rows($hasil);

while ($data = mysql_fetch_array($hasil)) {

    $ACCOUNT_ID=$data['ACCOUNT_ID'];
	$STREET=$data['STREET'];
	$EXTENSION_ADDRESS=$data['EXTENSION_ADDRESS'];
	
//TOTAL HOUSE
$kodestreet = $data['STREET'];
$kodestreet2 = $data['EXTENSION_ADDRESS'];
$qhouse_number = "SELECT COUNT(HOUSE_NUMBER) FROM master_pelanggan WHERE EXTENSION_ADDRESS='$kodestreet2' AND STREET='$kodestreet'";
$hhouse_number = mysql_query($qhouse_number);
$hasil2 = mysql_fetch_array($hhouse_number);
	
	
	echo "
	<tr>
	<form action='log_save_jadwal.php?id=$data[ACCOUNT_ID]' method='POST'>
	<td>
		<div class='control-group'>
			<div class='controls'>
				<textarea class='span12' name='STREET' rows='4' readonly='readonly'>".$data['STREET']."</textarea>
			</div>
		</div>
	</td>
	<td>
		<div class='control-group'>
			<div class='controls'>
				<textarea class='span12' name='EXTENSION_ADDRESS' rows='4' readonly='readonly'>".$data['EXTENSION_ADDRESS']."</textarea>
			</div>
		</div>
	</td>
	<td>
		
		<div class='control-group'>
			<div class='controls'>
				<textarea class='span12' name='HOUSE_NUMBER' rows='4' readonly='readonly'>".$hasil2['COUNT(HOUSE_NUMBER)']."</textarea>
			</div>
		</div>
		
	</td>
	<td>
		<div class='control-group'>
			<div class='controls'>
				<select class='span12' id='NAMA_TEAM' name='NAMA_TEAM'>";?>
				<?php
					$NAMA_TEAM = mysql_query('SELECT * FROM dim_tim ORDER BY NAMA_TEAM');
					while($p = mysql_fetch_array($NAMA_TEAM)){
					echo "<option value = \"$p[NAMA_TEAM]\">$p[NAMA_TEAM]</option>\n";
					}
				?>
				<?php echo "
                </select>
			</div> 
		</div>
	</td>
	<td>
		<div class='control-group'>
				<div class='controls'>
					<input name='START_DATE' type='date' class='span11' required='required'>
				</div>
		</div>
	</td>
	<td>
		<div class='control-group'>
				<div class='controls'>
					<input name='END_DATE' type='date' class='span11' required='required'>
				</div>
		</div>
	</td>
	<td>
		<div class='control-group'>
				<div class='controls'>
					<textarea name='DESCRIPTION' rows='4'></textarea>
				</div>
		</div>
	</td>";
	
	echo "
	<input type='hidden' name='USER_ID' value='".$user."' />
	<input type='hidden' name='TIMEKEY' value='".$date."' />
	
	<td align=center>
	<input type='submit' class='btn btn-primary' value='Save'>
	</td>
	</form>
	</tr>";
	
	/*<input type='submit'>
	<td align=center>
	</form>
	<div class='form-actions' span='12'>
	</div>
	<div class='btn-group'><a class='btn btn-primary' href='log_save_jadwal.php'<i class='icon-book icon-white'></i>Save</a>
	</td>
	</tr>";
	*/
	//var_dump($hasil2);
}		
echo "</table>";?>

<!--
					$NAMA_TEAM = mysql_query("select * from dim_tim ORDER BY NAMA_TEAM");
					while ($p = mysql_fetch_array($NAMA_TEAM)){
					echo '<option value = \$p[ID_TEAM]\>$p[NAMA_TEAM]</option>\n';
					}
					
					
-->

