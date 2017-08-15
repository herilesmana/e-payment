
<div class="col-sm-offset-1 col-sm-10">



<FORM class="form-horizontal" action="?page=save_siswa" method="POST">

	<div class="tabbable">
		<ul class="nav nav-tabs padding-16">
			<li class="active">
				<a data-toggle="tab" href="#edit-basic" aria-expanded="true">
					<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
					<B>Data Siswa</B>
				</a>
			</li>

			<li class="">
				
			</li>

			<li class="">
				
			</li>
		</ul>

		<div class="tab-content profile-edit-tab-content">
			<div id="edit-basic" class="tab-pane active">
				<h4 class="header blue bolder smaller"></h4>

				<div class="row">
					<div class="col-xs-12 col-sm-4">
							<div id="camera_wrapper">
							<div id="camera"></div>
							<br />
							<a id="capture_btn" action="javascript:void(0);" class="btn btn-info">Ambil Foto
									<i class="ace-icon fa fa-check bigger-110"></i>
							</a>
							</div>
				

							
					</div>

					<div class="vspace-12-sm"></div>

					<div class="col-xs-12 col-sm-8">
			

						<div class="space-4"></div>



								<div class="form-group">
							<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Foto Via Webcam</label>

							<div class="col-sm-8">
								<div id="show_saved_img" style="width:200px; height:235px; border:1px solid; border-radius:5px;"></div>
							</div>
						</div>

<div class="form-group">
							<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Nama Capture Gambar</label>

							<div class="col-sm-8">
											<input class="col-xs-12 col-sm-10" readonly="" type="text" id="saved_img" name="saved_img" placeholder="Nama FotoMu" />
							</div>
						</div>

					</div>
				</div>

<hr>
				<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Nama Lengkap</label>

							<div class="col-sm-9">
								<input class="col-xs-6 col-sm-5" type="text" id="form-field-username" name="Nama" placeholder="Nama Lengkap" required >
							</div>
						</div>
				<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-first">NISN</label>

							<div class="col-sm-9">
								<input class="col-xs-6 col-sm-5" type="text" id="form-field-username" name="NISN" placeholder="NISN" >
							</div>
						</div>

							<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-first">NIS</label>

							<div class="col-sm-9">
								<input class="col-xs-6 col-sm-5" type="text" id="form-field-username" name="NIS" placeholder="NISN" >
							</div>
						</div>

					<!--<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tempat Lahir</label>

							<div class="col-sm-9">
								<input class="col-xs-6 col-sm-5" type="text" id="form-field-username" placeholder="Tempat Lahir" name="TempatLahir" >
							</div>
						</div>-->




					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Kelas</label>

							<div class="col-sm-9">
							<select name="Kelas">
							<option></option>
								<?php
									$query_kelas = $exe->select('kelas');
									foreach($query_kelas as $data_kelas) {
										echo "<option value='$data_kelas[id]'>$data_kelas[nama]</option>";
									}
								?>
								</select>
							</div>
						</div>

					<!--<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Tanggal Lahir</label>

						<div class="col-sm-9">
							<div class="input-medium">
								<div class="input-group">
									<input class="input-medium date-picker" id="form-field-date" type="text" name="TanggalLahir" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
									<span class="input-group-addon">
										<i class="ace-icon fa fa-calendar"></i>
									</span>
								</div>
							</div>
						</div>
					</div>-->




					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Alamat Rumah</label>

						<div class="col-sm-9">
							<textarea id="form-field-comment" name="AlamatRumah"></textarea>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-first">JK</label>

								<div class="col-sm-9">
						<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="JK">
						<option value=""></option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>


								</div>
							</div>
						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Pelajaran Masuk</label>

						<div class="col-sm-9">
						<select name="ThAjaranMasuk">
								<option></option>
									<?php
										$query_th_ajaran = $exe->select('th_ajaran');
										foreach($query_th_ajaran as $data_th_ajaran) {
											echo "<option value='$data_th_ajaran[id_tahun]'>$data_th_ajaran[th_ajaran]</option>";
										}
									?>
									</select>
								</div>
							</div>

									<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Pelajaran Sekarang</label>

						<div class="col-sm-9">
						<select name="ThAjaranSekarang">
								<option></option>
									<?php
										$query_th_ajaran = $exe->select('th_ajaran');
										foreach($query_th_ajaran as $data_th_ajaran) {
											echo "<option value='$data_th_ajaran[id_tahun]'>$data_th_ajaran[th_ajaran]</option>";
										}
									?>
									</select>
								</div>
							</div>
					<div class="space-4"></div>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Telepon</label>

						<div class="col-sm-9">
							<textarea id="form-field-comment" name="HP"></textarea>
						</div>
					</div>
<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Status</label>

						<div class="col-sm-9">
						<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="Status">
						<option value="aktif">Aktif</option>
						<option value="tidak">Tidak</option>
					</select>
								</div>
							</div>
					
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info"  type="submit" name="simpan">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Save
				</button>

				&nbsp; &nbsp;
				<button class="btn" type="reset" name="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
			</div>
		</div>
	</FORM>
</div>
