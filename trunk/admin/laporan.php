<?php include('header.php'); ?>


                         <div>
                                <ul class="breadcrumb">
                                        <li>
                                                <a href="index.php">Home</a> <span class="divider">/</span>
                                        </li>
                                        <li>
                                                <a href="grafik.php">Charts</a>
                                        </li>
										
                                </ul>
                        </div>
				<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN REKAPITULASI KAS</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="table_pdf/index_kas.php">
					<div>
					<label for="tgl_awal" name="tgl_awal"> Dari Tanggal </label><input type="date" id="tgl_awal" name="tgl_awal">
					<label for="tgl_akhir" name="tgl_akhir"> Sampai Tanggal </label><input type="date" id="tgl_akhir" name="tgl_akhir">
					</div>
					<br>
					<input type="submit" value="Print Laporan">
					</div>
					</form>
					</div>
					<div class="box span6">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> LAPORAN REKAPITULASI BANK</h2>
						<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form method="post" action="table_pdf/index_bank.php">
					<div>
					<label for="tgl_awal" name="tgl_awal"> Dari Tanggal </label><input type="date" id="tgl_awal1" name="tgl_awal1">
					<label for="tgl_akhir" name="tgl_akhir"> Sampai Tanggal </label><input type="date" id="tgl_akhir1" name="tgl_akhir1">
					</div>
					<br>
					<input type="submit" value="Print Laporan">
					</div>
					</form>
					</div>
					</div>

                
<?php include('footer.php'); ?>