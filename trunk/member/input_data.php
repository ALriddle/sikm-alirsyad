<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Menu</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="form.php">Input Data</a>
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
								<input type="text" class="input-medium uneditable-input" id="salesid" value="<?php ?>" disabled="disabled">
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
							<div class="span6 offset4">
							
							  <label class="control-label" for="address">Address</label>
							  <div class="controls">
								<input type="text" class="input-xlarge uneditable-input" id="address" value="<?php ?>" disabled="disabled">
							  </div>
							</div>
							
							<div class="span6">
							  <label class="control-label" for="reminder">Reminder</label>
							  <div class="controls">
							  	<!--
								<input type="datetimepicker" class="input-medium" id="reminder">
								-->
								
								<div id="datetimepicker2" class="input-append">
									<input data-format="dd/MM/yyyy HH:mm:ss" type="text"></input>
									<span class="add-on">
									  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
									  </i>
									</span>
								</div>
								<script type="text/javascript">
								  $(function() {
									$('#datetimepicker2').datetimepicker({
									  language: 'en',
									  pick12HourFormat: false
									});
								  });
								</script>
								
							  </div>
							</div>
							</div>
					
							<div class="tabbable"> <!-- Only required for left/right tabs -->
							  <ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab">Building Function</a></li>
								<li><a href="#tab2" data-toggle="tab">Building Type</a></li>
								<li><a href="#tab3" data-toggle="tab">House Owner Profile</a></li>
								<li><a href="#tab4" data-toggle="tab">House Owner Status</a></li>
								<li><a href="#tab5" data-toggle="tab">Activity Status</a></li>
								<li><a href="#tab6" data-toggle="tab">Failed Status</a></li>
							  </ul>
							  <div class="tab-content">
								<div class="tab-pane active" id="tab1">
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span5">
									  <label class="radio">
										<input type="radio" name="optionsRadios1" id="1A" value="option1A" checked="">
										1A - Rumah Tangga
									  </label>
									
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios1" id="1B" value="option1B">
										1B - Ruko (Bukan WarNet)
									  </label>
										</div>
										<div class="span5">
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios1" id="1C" value="option1C">
										1C - Kantor/WarNet
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios1" id="1D" value="option1D">
										1D - Industri
									  </label>
									  </div>
									</div>
								  </div>
								  
								</div>
								<div class="tab-pane" id="tab2">
								
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span4">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2A" value="option2A"> 2A - Bertingkat
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2B" value="option2B"> 2B - Parkiran Mobil
									  </label>
									  </div>
									  <div class="span3">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2C" value="option2C"> 2C - Air Conditioner 
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2D" value="option2D"> 2D - Parkiran Motor
									  </label>
									  </div>
									  <div class="span4">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2E" value="option2E"> 2E - Tahap Pembangunan/Renovasi
									  </label>
									  </div>
									</div>
								  </div>
								  
								</div>
								
								<div class="tab-pane" id="tab3">
								
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span4">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox3A" value="option2A"> 3A - Usia Lanjut (55 tahun ke atas)
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox3B" value="option2B"> 3B - Usia Produktif (30-55 tahun)
									  </label>
									  </div>
									  <div class="span4">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2C" value="option3C"> 3C - Mahasiswa
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2D" value="option3D"> 3D - SMA/SLTP/SD
									  </label>
									  </div>
									  <div class="span4">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox2E" value="option3E"> 3E - Balita
									  </label>
									</div>
									</div>
								  </div>
								  
								</div>
								
								<div class="tab-pane" id="tab4">
								
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span5">
									  <label class="radio">
										<input type="radio" name="optionsRadios4" id="4A" value="option4A" checked="">
										4A - Wiraswasta/Pengusaha
									  </label>
									
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios4" id="4B" value="option4B">
										4B - Professional (Dokter/Jaksa/Pengacara)
									  </label>
									</div>
									<div class="span3">
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios4" id="4C" value="option4C">
										4C - Karyawan Swasta
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios4" id="4D" value="option4D">
										4D - Karyawan BUMN
									  </label>
									  </div>
									  <div class="span4">
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios4" id="4E" value="option4E">
										4E - PNS (termasuk Guru/Dosen)
									  </label>
									  </div>
									</div>
								  </div>
								  
								</div>
								
								<div class="tab-pane" id="tab5">
								
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span3">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5A" value="option5A"> 5A - Brosur/Flyer
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5B" value="option2B"> 5B - Kunjungan (berhasil)
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5C" value="option5C"> 5C - Telpon (berhasil)
									  </label>
									  </div>
									  <div class="span3">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5D" value="option5D"> 5D - Janjian bertemu
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5E" value="option3E"> 5E - Trial
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5F" value="option5F"> 5F - Closing
									  </label>
									  </div>
									  <div class="span3">
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5G" value="option5G"> 5G - Menolak
									  </label>
									  <label class="checkbox inline">
										<input type="checkbox" id="inlineCheckbox5H" value="option5H"> 5H - Kosong
									  </label>
									</div>
									</div>
								  </div>
								</div>
								
								<div class="tab-pane" id="tab6">
								
								  <!-- Contents -->
								  <div class="control-group">
									<div class="controls">
									<div class="span6">
									  <label class="radio">
										<input type="radio" name="optionsRadios6" id="6A" value="option6A" checked="">
										6A - Tidak Butuh Layanan
									  </label>
									
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios6" id="6B" value="option6B">
										6B - Tidak Mampu Bayar
									  </label>
									</div>
									<div class="span6">
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios6" id="6C" value="option6C">
										6C - Tidak Tahu Fungsi/Kegunaan Produk
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="optionsRadios6" id="6D" value="option6D">
										6D - Sudah Pakai Provider Lain yang sejenis
									  </label>
									  </div>
									</div>
								  </div>
								  
								</div>
								
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
						
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
<?php include('footer.php'); ?>
