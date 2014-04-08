<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Menu</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report_customer.php">Report Sales</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_report.php">Input Data</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Daily Sales Activity</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date">Date</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="date" value="<?php
echo date("m/d/Y") . "";?>" disabled="disabled">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="salesid">Sales ID</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="salesid" value="<?php echo $_SESSION['USERNAME_PEGAWAI']; ?>" disabled="disabled">
							  </div>
							</div>
							          
							<div class="control-group">
							  <label class="control-label" for="account">Account</label>
							<div class="controls">
  								<input class="input-medium" id="account" type="text">
 								<button class="btn" type="button">OK</button>
							</div>
							</div>
							
							<div class="control-group">
								<div class="span7 offset4">
									<label class="control-label" for="address">Address</label>
							  	<div class="controls controls-row">
									<input type="text" class="input-xlarge uneditable-input" id="address" value="<?php ?>" disabled="disabled">
									<input type="text" class="span1" id="no" value="<?php ?>" disabled="disabled">
							  	</div>
							</div>
							
							<div class="control-group">
								<div class="span5">
									
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="cst_name">Customer Name</label>
								<div class="controls">
  									<input type="text" class="input-xlarge" id="cst_name">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="phone">Phone</label>
								<div class="controls">
  									<input type="text" class="input-medium" id="phone">
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="remark">Remark</label>
								<div class="controls">
  									<textarea rows="4" id="remark" class="input-xlarge" placeholder="Tuliskan keterangan..."></textarea>
								</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="reminder">Reminder</label>
							  <div class="controls">
								<input type="datetime-local" class="large-medium" id="reminder">
							  </div>
							</div>
							</div>
					
							<div class="control-group">
								<label class="control-label" for="building_function">Building Function</label>										
								  <div class="controls">
								  <select id="BUILDING_FUNCTION" data-rel="chosen" name="id_building_function">
									<option>1A - Rumah Tangga</option>
									<option>1B - Ruko (Bukan WarNet)</option>
									<option>1C - Kantor/WarNet</option>
									<option>1D - Industri</option>
								  </select>
								</div>							  
							</div>

							<div class="control-group">
								<label class="control-label" for="building_type">Building Type</label>
									<div class="controls">
										<select id="BUILDING_TYPE" multiple data-rel="chosen" name="id_building_type">
												<option>2A - Bertingkat</option>
												<option>2B - Parkiran Mobil</option>
												<option>2C - Air Conditioner</option>
												<option>2D - Parkiran Motor</option>
												<option>2E - Tahap Pembangunan/Renovasi</option>
										</select>
									</div>
							</div> 	
								
							<div class="control-group">
								<label class="control-label" for="house_owner_profile">House Owner Profile</label>
									<div class="controls">
										<select id="HOUSE_OWNER_PROFILE" multiple data-rel="chosen" name="id_house_owner_profile">
												<option>3A - Usia Lanjut (55 tahun ke atas)</option>
												<option>3B - Usia Produktif (30-55 tahun)</option>
												<option>3C - Mahasiswa</option>
												<option>3D - SMA/SLTP/SD</option>
												<option>3E - Balita</option>
										</select>
									</div>
							</div> 
													
							<div class="control-group">
								<label class="control-label" for="house_owner_status">House Owner Status</label>								  
									<div class="controls">
										<select id="HOUSE_OWNER_STATUS" data-rel="chosen" name="id_house_owner_status">
											<option>4A - Wiraswasta/Pengusaha</option>
											<option>4B - Professional (Dokter/Jaksa/Pengacara)</option>
											<option>4C - Karyawan Swasta</option>
											<option>4D - Karyawan BUMN</option>
											<option>4E - PNS (termasuk Guru/Dosen)</option>
										</select>
									</div>							  
							</div>
								
							<div class="control-group">
								<label class="control-label" for="activity_status">Activity Status</label>
									<div class="controls">
										<select id="ACTIVITY_STATUS" multiple data-rel="chosen" name="id_activity_status">
												<option>5A - Brosur/Flyer</option>
												<option>5B - Kunjungan (berhasil)</option>
												<option>5C - Telpon (berhasil)</option>
												<option>5D - Janjian bertemu</option>
												<option>5E - Trial</option>
												<option>5F - Closing</option>
												<option>5G - Menolak</option>
												<option>5H - Kosong</option>
										</select>
									</div>
							</div> 
								
							<div class="control-group">
								<label class="control-label" for="failed_status">Failed Status</label>								  
									<div class="controls">
										<select id="FAILED_STATUS" data-rel="chosen" name="id_failed_status">
											<option>6A - Tidak Butuh Layanan</option>
											<option>6B - Tidak Mampu Bayar</option>
											<option>6C - Tidak Tahu Fungsi/Kegunaan Produk</option>
											<option>6D - Sudah Pakai Provider Lain yang Sejenis</option>
											<option>6E - Tidak Mempunyai PC</option>
											<option>6F - Salah Alamat</option>
										</select>
									</div>							  
								</div>
							
							<div class="control-group">
							  <label class="control-label" for="remark">Remark</label>
								<div class="controls">
  									<textarea rows="4" id="REMARK" class="input-xlarge" name="remark" placeholder="Tuliskan keterangan..."></textarea>
								</div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  </fieldset>
						</form>   
						
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
<?php include('footer.php'); ?>
