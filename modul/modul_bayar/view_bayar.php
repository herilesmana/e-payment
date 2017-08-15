<div class="col-xs-12">
	<a href="?page=form_bayar" class="btn"><i class="fa fa-plus"></i> Tambah Data</a>
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
					<th>Tahun Pelajaran</th>
					<th>Jenis Pembayaran</th>
						<th>Besaran </th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
	
					$no = 1;
					$query = $exe->select("bayar","","");
					if ($query->num_rows > 0 ) {
						
						foreach ($query as $data) {
						$duit=$format->uang($data['jumlah']);
							echo "
								<tr>
									<td>$no</td>
									<td>$data[th_ajaran_masuk]</td>
									<td>

									<span class=''>$data[jenis_tagihan]</span>

									</td>
										<td>

									<span class=''>$duit</span>

									</td>
							
									";
								?>

									<td>
									<div class="action-buttons">
										<a href="?page=edit_bayar&id=<?php echo $data['id_bayar']; ?>&act=edit" class="green"><i class="ace-icon fa fa-pencil bigger-130"></i> Ubah</a>
										<a href="?page=edit_bayar&id=<?php echo $data['id_bayar']; ?>&act=hapus" class="red konfirmasi"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus</a>
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
