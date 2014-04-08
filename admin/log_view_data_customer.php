<?php
include 'DB_driver.php';

				$ada = mysql_query("SELECT * FROM master_pelanggan");
				while($data= mysql_fetch_array($ada)){
				
				echo "
					<tr>
						<td><center>$data[ACCOUNT_ID]</center></td>
						<td><center>$data[USER_ID]</center></td>
						<td>$data[FULL_NAME]</td>
						<td>$data[STREET]</td>
						<td>$data[EXTENSION_ADDRESS]</td>
						<td><center>$data[HOUSE_NUMBER]</center></td>
						<td>$data[CITY]</td>
						<td><center>$data[NODE]</center></td>
						<td><center>$data[ID_POWER_SUPPLY]</center></td>
						<td align=center>
							<div class='btn-group'><a class='btn btn-primary' href=form_edit_customer.php?id=$data[ACCOUNT_ID]><i class='icon-book icon-white'></i>Edit</a>
							<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href=log_delete_data_customer.php?id=$data[ACCOUNT_ID]><i class='icon-trash'></i> Delete</a></li></ul>
							</div>
						 </td>		
					</tr> ";

					
					if(isset($_POST['del'])){
						$id=$_POST['hid'];				
						$query = mysql_query("DELETE FROM master_pelanggan where ACCOUNT_ID = ".$id);
						header('Location:log_view_data_customer.php');
					}
					$counter = "++";				
				}
				
				/*$tampil2 = mysql_query("SELECT * FROM master_pelanggan");
				$jmlData = mysql_num_rows($tampil2);
				$jmlHal = ceil($jmlData/$batas);*/
				
				?>