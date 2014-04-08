<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form_profile.php">Profile</a>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Profile</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="save_data_pegawai.php" method="post">
							<fieldset>
							  <div class="control-group">
							  <label class="control-label" for="salesid">Sales ID</label>
							  <div class="controls">
								<input type="text" class="input-medium uneditable-input" id="SALES_ID" value="<?php echo $pegawai['SALES_ID'];?>" disabled="disabled">
							  </div>
							</div>
							 <div class="control-group">
								<label class="control-label" for="NO_KTP_PEGAWAI">No. KTP :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="NO_KTP_PEGAWAI" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NAMA_PEGAWAI">Nama Pegawai :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="NAMA_PEGAWAI" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="USERNAME_PEGAWAI">Username :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="USERNAME_PEGAWAI" type="text" value="">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="PASSWORD_PEGAWAI">Password :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="PASSWORD_PEGAWAI" type="text" value="">
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="TEMPAT_LAHIR">Tempat Lahir :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="TEMPAT_LAHIR" type="text" value="">
								</div>
								</div>
							 <div class="control-group">
							  <label class="control-label" for="TANGGAL_LAHIR">Tanggal Lahir :</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" id="TANGGAL_LAHIR" value="">
							  </div>
							</div>
							  <div class="control-group">
							  <label class="control-label" for="ALAMAT_PEGAWAI">Alamat</label>
							  <div class="controls">
								<textarea class="cleditor" id="ALAMAT_PEGAWAI" rows="3"></textarea>
							  </div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="NO_TELP_PEGAWAI">Telepon Rumah :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="NO_TELP_PEGAWAI" type="text" value="">
								</div>
								</div>
							 <div class="control-group">
								<label class="control-label" for="HANDPHONE_PEGAWAI">Nomor Handphone :</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="HANDPHONE_PEGAWAI" type="text" value="">
								</div>
								</div>	
							<div class="control-group">
								<label class="control-label" for="PENDIDIKANTERAKHIR">Pendidikan Terakhir :</label>
								<div class="controls">
								  <select id="PENDIDIKANTERAKHIR" data-rel="chosen">
									<option>SMA/SMK</option>
									<option>DIPLOMA</option>
									<option>SARJANA</option>
								  </select>
								</div>
							  </div>
							  
							  </div>
							  
							  <div class="form-actions"  >
								<button type="submit" class="btn btn-primary">Save Data</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
				</div><!--/span-->

			</div><!--/row-->
    
<?php include('footer.php'); ?>
