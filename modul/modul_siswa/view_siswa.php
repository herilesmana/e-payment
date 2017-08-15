<div class="col-xs-12">
	<a href="?page=form_siswa" class="btn"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<div class="row"></div>
<div class="clearfix">
	<div class="pull-right tableTools-container"></div>
</div>

<div class="col-xs-12">

	<div class="table-responsive">

		<table id="dynamic-table" class="table table-striped table-bordered table-hover dua-kolom">

			<thead>
				<tr>
					<th class="no-table">No.</th>
					<th>NIS</th>
					<th>NISN</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Alamat</th>
					<th>Tahun Ajaran Masuk</th>
					<th>Tahun Ajaran</th>
					<th>Telepon</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
	
					$no = 1;
					$query = $exe->select("siswa","",""); 
					if ($query->num_rows > 0 ) {
						
						foreach ($query as $data) {
							$jk = $format->jk($data['jk']);
							echo "
								<tr>
									<td>$no</td>
									<td>$data[nis]</td>
									<td>$data[nisn]</td>
									<td>$data[nama]</td>
									<td>$jk</td>
									<td>
									"; ?>
									<?php
										$query_kelas = $exe->select('kelas',"id=$data[kelas]");
										foreach($query_kelas as $data_kelas) {
											echo $data_kelas['nama'];
										}
									?>
								<?php
								echo "
									</td>
									<td>$data[alamat]</td>
									<td>$data[th_ajaran_masuk]</td>
									<td>$data[th_ajaran]</td>
									<td>$data[telepon]</td>
									<td>$data[status]</td>
									";
								?>

									<td>
									<div class="action-buttons">
										<a href="?page=edit_siswa&nis=<?php echo $data['nis']; ?>&act=edit" class="green"><i class="ace-icon fa fa-pencil bigger-130"></i> Ubah</a>
										<a href="?page=edit_siswa&nis=<?php echo $data['nis']; ?>&act=hapus" class="red konfirmasi"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus</a>
									</div>
									</td>
								</tr>

								<?php
							$no++;
						}
					} else {
						echo "<div class='alert alert-warning center'><i class='fa fa-warning'></i> Tidak Ditemukan Data</div>";
					}
				?>
			</tbody>
			
		</table>

	</div>

</div>
