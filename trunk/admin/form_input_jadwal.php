<?php include('header.php'); ?>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_penjadwalan.php">Penjadwalan Sales</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_input_jadwal.php">Input Jadwal</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Input Jadwal Sales</h2>
					</div>
					<div class="row-fluid">
				
					<div class="box span12">
					<div class="box-content">
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td width="150"><b><center>Street</center></b></td>
									<td width="55"><b><center>Brew</center></b></td>
									<td width="55"><b><center>Total House</center></b></td>
									<td><b><center>Tim</center>
									<td><b><center>Start Date</center>
									<td><b><center>End Date</center>
									<td><b><center>Description</center></b></td>
									<td width="90"><b><center>Action</center></b></td>		
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_jadwal.php";
?>
</table>
            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->		
			
			</div>
<?php include('footer.php'); ?>