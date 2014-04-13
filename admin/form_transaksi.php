<?php include('header.php'); ?>

		
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_tim.php">Manajemen Transaksi</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Kas</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
					<div class="span5"><a class="btn btn-success" href="../admin/form_register_pemasukan_kas.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					<a class="btn btn-danger" href="../admin/form_register_pengeluaran_kas.php"><i class="icon icon-white icon-add"></i> Tambah Pengeluaran</a>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_kas.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>NO. TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL</center></b></td>
									<td rowspan="1" valign="middle"><b><center>MASUK</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KELUAR</center></b></td>		
									<!--<td rowspan="1" valign="middle"><b><center>SALDO</center></b></td>
									<td rowspan="1" valign="middle"><b><center>SALDO TOTAL KAS</center></b></td> -->
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_pemasukan_kas.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-plus"></i> Daftar Transaksi Bank</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					
					<div class="box-content">
					<div class="span5"><a class="btn btn-success" href="../admin/form_register_pemasukan_bank.php"><i class="icon icon-white icon-add"></i> Tambah Pemasukan</a>
					<a class="btn btn-danger" href="../admin/form_register_pengeluaran_bank.php"><i class="icon icon-white icon-add"></i> Tambah Pengeluaran</a>
					</div>
					
					<div class="box-content">
					<div class="box span12">
					<div class="box-content">
					<form method=POST action=log_view_pemasukan_bank.php>
						<table class="table table-striped table-bordered bootstrap-datatable datatable" border="1" cellpadding="3">
						  <thead>
							  <tr>
									<td rowspan="1" valign="middle"><b><center>NO. TRANSAKSI</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KODE</center></b></td>
									<td rowspan="1" valign="middle"><b><center>TANGGAL</center></b></td>
									<td rowspan="1" valign="middle"><b><center>MASUK</center></b></td>
									<td rowspan="1" valign="middle"><b><center>KELUAR</center></b></td>		
									<!--<td rowspan="1" valign="middle"><b><center>SALDO</center></b></td>
									<td rowspan="1" valign="middle"><b><center>SALDO TOTAL BANK</center></b></td>-->
									<td rowspan="1" valign="middle"><b><center>KETERANGAN</center></b></td>	
									<td rowspan="1" valign="middle"><b><center>ACTION</center></b></td>	
								</td>
									</tr>
						  </thead> 


<?php
include"log_view_pemasukan_bank.php";
?>
</table>
</form>            	</div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
		
<?php include('footer.php'); ?>
