<?php include('header.php'); ?>

<div>
		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Transaksi Donatur</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Donatur</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
					<div class="span5"><a class="btn btn-success" href="../member/form_register_donasi.php"><i class="icon icon-white icon-add"></i> Tambah Donasi</a>
					
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_kas.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>NO. TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL</center></b></td>
									<td rowspan="1" valign="middle"><b><center>NAMA DONATUR</center></b></td>
									<td rowspan="1" valign="middle"><b><center>JUMLAH DONASI</center></b></td>		
									<!--<td rowspan="1" valign="middle"><b><center>SALDO</center></b></td>
									<td rowspan="1" valign="middle"><b><center>SALDO TOTAL KAS</center></b></td> -->
									<td rowspan="1" valign="middle"><b><center>STATUS DONATUR</center></b></td>	
									<td rowspan="1" valign="middle"><b><center></center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_data_donatur.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
</div>
<?php include('footer.php'); ?>