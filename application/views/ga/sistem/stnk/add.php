<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Add SPTRD</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<?php if(validation_errors()) { ?>
								<div class="alert alert-block alert-error">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>

								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open('ga/stnk_simpan/','class="form-horizontal"'); ?>
									
									
									<!-- <div class="control-group">
												<label class="control-label">Objek Retribusi</label>
												<div class="controls">
													<select id="select2_sample33" name="status_kendaraan" class="span6 select2">
														<option value="2"></option>
														<option value="2">hotel</option>
														<option value="2">kantor</option>
														<option value="2">ruko</option>
														<option value="2">apartemen</option>
														<option value="2">lain lain</option>
														
													</select>
												</div>
									
									
									</div> -->
									<div class="control-group">
										<label class="control-label">Nama Perusahaan</label>
										<div class="controls">
											<input type="text" name="nomor_kontrak" id="nomor_kontrak" class="span6 m-wrap" placeholder="Nama Perusahaan" />
										</div>
									</div>

									
									<div class="control-group">
										<label class="control-label">No. IMB</label>
										<div class="controls">
											<input type="text" name="nomor_registrasi" id="nomor_registrasi" class="span6 m-wrap" placeholder="NO. IMB" />
										</div>
									</div>

																		
									<div class="control-group">
										<label class="control-label">Nama Pemilik</label>
										<div class="controls">
											<input type="text" name="nama_pemilik" id="nama_pemilik" class="span6 m-wrap" placeholder="Nama Pemilik/Penangung Jawab" />
										</div>
									</div>


									<div class="control-group">
												<label class="control-label">Kecamatan</label>
												<div class="controls">
													<select id="select2_sample2" name="jenis" class="span6 select2">
														<option value=""></option>
														<?php
														foreach ($data_master_jenis->result_array() as $tampil) { ?>
															<option value="<?php echo $tampil['id_ga_master_jenis'];?>"><?php echo $tampil['nama_ga_master_jenis'];?></option>
														<?php
														}
														?>
													</select>
												</div>
									</div>


									<div class="control-group">
										<label class="control-label">Alamat</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="alamat" id="alamat"  ></textarea>
											
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">No. Tlp</label>
										<div class="controls">
											<input type="text" name="nomor_mesin" id="nomor_mesin" class="span6 m-wrap" placeholder="No. Tlp" />
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">Objek Retribusi</label>
										<div class="controls">
											<input type="text" name="merk" id="merk" class="span6 m-wrap" placeholder="Nama Usaha" />
										</div>
									</div>


									<div class="control-group">
												<label class="control-label">Uraian</label>
												<div class="controls">
													<select id="select2_sample1" name="type" class="span6 select2">
														<option value=""></option>
														<?php
														foreach ($data_master_type->result_array() as $tampil) { ?>
															<option value="<?php echo $tampil['id_ga_master_type'];?>"><?php echo $tampil['nama_ga_master_type'];?></option>
														<?php
														}
														?>
													</select>
												</div>
									</div>


									<div class="control-group">
										<label class="control-label">Jumlah</label>
										<div class="controls">
											<input type="text" name="nomor_rangka" id="nomor_rangka" class="span6 m-wrap" placeholder="Luas Tanah" />
										</div>
									</div>

									
									<div class="control-group">
										<label class="control-label">Tahun Pendataan</label>
										<div class="controls">
											<input type="text" name="tahun_pembuatan" id="tahun_pembuatan" class="span6 m-wrap" placeholder="Tahun Pendataan" />
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">Berlaku Sampai</label>
										<div class="controls">
											<div class="input-append date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
												<input  class="m-wrap m-ctrl-medium date-picker" name="berlaku_sampai"  type="text"  id="berlaku_sampai" placeholder="Berlaku Sampai..."  data-date="<?php echo date ('Y-m-d');?>" data-date-format="yyyy-mm-dd" > 
             <span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">Luas Bangunan</label>
										<div class="controls">
											<input type="text" name="isi_silinder" id="isi_silinder" class="span6 m-wrap" placeholder="Luas Bangunan" />
										</div>
									</div>
																	
									<div class="control-group">
										<label class="control-label">Nomor Rekomendasi Damkar</label>
										<div class="controls">
											<input type="text" name="warna" id="warna" class="span6 m-wrap" placeholder="Nomor Rekomendasi" />
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">Tarif Retribusi</label>
										<div class="controls">
											<input type="text" name="nominal" id="nominal" class="span6 m-wrap" placeholder="Besaran Biaya Retribusi" />
										</div>
									</div>


									<div class="control-group">
										<label class="control-label">Nama Pemeriksa</label>
										<div class="controls">
											<input type="text" name="kode_lokasi" id="kode_lokasi" class="span6 m-wrap" placeholder="nama pemeriksa" />
										</div>
									</div>

									<!-- <div class="control-group">
										<label class="control-label">Nomor Urut Pendaftaran</label>
										<div class="controls">
											<input type="text" name="no_urut_pendaftaran" id="no_urut_pendaftaran" class="span6 m-wrap" placeholder="Nomor Urut Pendaftaran..." />
										</div>
									</div> -->


									
									
								
									

									

									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Simpan</button>
										<a href="<?php echo base_url();?>ga/stnk" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>

<script type="text/javascript">
	$(document).ready(function(){

		$('#ga_master_lising_id').focus();
		$('#pilihanlokasi').hide(true);
		$('#pilihanlambung').hide(true);
		$('#boksijalak').hide(true);
		$('#userkomersil').hide(true);

	});

	$('#select2_sample33').click(function(){

		var status = $('#select2_sample33').val();

		if(status=="1") {
			$('#pilihanlokasi').show(true);
			$('#pilihanlambung').show(true);
			$('#boksijalak').hide(true);
		}
		else if (status=="0"){
			$('#boksijalak').show(true);
			$('#pilihanlokasi').hide(true);
			$('#pilihanlambung').hide(true);
		}
		else {
			$('#boksijalak').hide(true);
			$('#pilihanlokasi').hide(true);
			$('#pilihanlambung').hide(true);
			$('#userkomersil').show(true);
		}


	})

	
</script>
