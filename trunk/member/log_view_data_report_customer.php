<?php
//session_start();
include 'DB_driver.php';

//$ada = "SELECT * FROM fact_report_customer1 WHERE ORDER BY ID_REPORT_SALES";
//$hasil = mysql_query($ada);

$query = "SELECT * FROM fact_report_customer1 WHERE SALES_ID='$qhasilsalesid' ORDER BY ID_REPORT_SALES";
		$hasil = mysql_query($query);

while($data= mysql_fetch_array($hasil)){
		$ACCOUNT_ID=$data['ACCOUNT_ID'];
		$SALES_ID=$data['SALES_ID'];
		$USER_ID=$data['USER_ID'];
		$PHONE=$data['PHONE'];
		$STREET=$data['STREET'];
		$DATE_NOW=$data['DATE_NOW'];
		$DATE_ACT=$data['DATE_ACT'];
		$REMINDER=$data['REMINDER'];
				echo "
					<tr>
						<td><center>$data[ACCOUNT_ID]</center></td>
						<td><center>$data[SALES_ID]</center></td>
						<td>$data[USER_ID]</td>
						<td>$data[PHONE]</td>
						<td>$data[STREET]</td>						
						<td><center>$data[DATE_NOW]</center></td>
						<td><center>$data[DATE_ACT]</center></td>
						<td><center>$data[REMINDER]</center></td>
						<td align=center>
							<div class='btn-group'><a class='btn btn-primary' href=form_detail_report_sales.php?id=$data[ID_REPORT_SALES]><i class='icon-book icon-white'></i>Details</a>
							<a class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href=log_delete_report_sales.php?id=$data[ID_REPORT_SALES]><i class='icon-trash'></i> Delete</a></li></ul>
							</div>
						 </td>		
					</tr> ";

		$counter = "++";				
}
echo "</table>";
?>