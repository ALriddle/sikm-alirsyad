<?php
	include 'DB_driver.php';	
	
class reportActivity{
	function delete(){
		$id			= $_GET['ACCOUNT_ID'];
		$query      = "delete * from fact_report_customer where ACCOUNT_ID='".$id."'";
		$result		= mysql_query($query);
	}
	
	function viewData(){
		$cari=$_POST['SALES_ID'];
		$query="select * from fact_report_customer".$query_str;
		$result=mysql_query($query);
		$data=array();
			
		while($row=mysql_fetch_array($result)){
		$data[]=array();
		$c=1;
			foreach($data as $row){
			if($c % 2){
				echo "<tr class='even'>";
			}else{
				echo "<tr class='odd'>";
			}
			echo 	"<td>".$row['SALES_ID']."</td>".
					"<td>".$row['ACCOUNT_ID']."</td>".
					"<td>".$row['ACCOUNT_NAME']."</td>".
					"<td>".$row['ACCOUNT_ADDRESS']."</td>".
					"<td>".$row['ACCOUNT_ADDRESS']."</td>".
					"<td align='center'>".$row['ID_BIULIDNG_FUNCTION']."</td>".
					"<td align='center'>".$row['ID_BUILDING_TYPE']."</td>".
					"<td align='center'>".$row['ID_HOUES_OWNER_PROFILE']."</td>".
					"<td align='center'>".$row['ID_HOUSE_OWNER_STATUS']."</td>".
					"<td align='center'>".$row['ID_ACTIVITY_STATUS']."</td>".
					"<td align='center'>".$row['ID_FAILED_STATUS']."</td>".
					"<td>".$row['REMARK']."</td>".
					"<td align=center><div class='btn-group pull-right' >
						<a class='btn dropdown-toggle' data-toggle='dropdown' href='#'><span class='hidden-phone'> Action</span>
							<span class='caret'></span>
						</a>
						<ul class='dropdown-menu'>
							<li><a href='#'>View</a></li>
							<li class='divider'></li>
							<li><a href='http://localhost:90/form_report2.php&ACCOUNT_ID=$row[ACCOUNT_ID]'>Edit</a></li>
							<li class='divider'></li>
							<li><a href='http://localhost:90/admin/delete_report.php&AccID=$row[ACCOUNT_ID]'>Delete</a></li>
						</ul>
					</div></td>".
					"</tr>";
			$c+=1;
			}	
		}
	}
	
	function edit(){
		
	}
	
	function search(){
		if(isset($_POST['SALES_ID'])){
			$query_str='';
			if($_POST['SALES_ID']!='none'){
				if($query_str!=''){
					$query_str.='and ';
				}
				$query_str.="SALES_ID='".$_POST['SALES_ID']."' ";
			}
			if($_POST['tim']!=''){
				if($query_str!=''){
					$query_str.='and ';
				}
				$query_str.="tim='".$_POST['tim']."' ";
			}
			if($_POST['search']!=''){
				if($query_str!=''){
					$query_str.='and ';
				}
				$query_str.="search='".$_POST['search']."' ";
			}
			if($query_str!=''){
				$query_str='where '.$query_str;
			}
			$cari=$_POST['SALES_ID'];
			$query="select distinct from fact_report_customer".$query_str;
			$result=mysql_query($query);
			$data=array();
		
			while($row=mysql_fetch_array($result)){
				$data[]=array(
					'SALES_ID'=>$row['SALES_ID'],
					'ACCOUNT_ID'=>$row['ACCOUNT_ID'],
					//'ACCOUNT_NAME'=>$row['ACCOUNT_NAME'],
					//'AccAddress'=>$row['ACCOUNT_ADDRESS'],
					//'ACCOUNT_PHONE'=>$row['ACCOUNT_PHONE'],
					'ID_BIULDING_FUNCTION'=>$row['ID_BIULDING_FUNCTION'],
					'ID_BIULDING_TYPE'=>$row['ID_BIULDING_TYPE'],
					'ID_HOUSE_OWNER_PROFILE'=>$row['ID_HOUSE_OWNER_PROFILE'],
					'ID_HOUSE_OWNER_STATUS'=>$row['ID_HOUSE_OWNER_PROFILE'],
					'ID_ACTIVITY_STATUS'=>$row['ID_ACTIVITY_STATUS'],
					'ID_FAILED_STATUS'=>$row['ID_FAILED_STATUS'],
					'REMARK'=>$row['REMARK']	
				);
			}
		}				
	}
}
