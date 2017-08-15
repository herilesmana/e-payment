<?php
	if(isset($_GET['hasil']) && $_GET['hasil'] == 'success'){
?>
	<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil di tambah!!</div>
<?php
	}
?>
<div class="col-xs-12">
	<a href="?page=form_kelas" class="btn"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<br>
<div class="clearfix">
	<div class="pull-right tableTools-container"></div>
</div>

<div class="col-xs-12">

	<div class="table-responsive">

		<table id="dynamic-table" class="table table-striped table-bordered table-hover dua-kolom">

			<thead>
				<tr>
					<th class="no-table">No.</th>
					<th>Nama Kelas</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
	
					$no = 1;
					$query = $exe->select("kelas","","");
					if ($query->num_rows > 0 ) {
						
						foreach ($query as $data) {
							echo "
								<tr>
									<td>$no</td>
									<td>$data[nama]</td>
							
									";
								?>

									<td>
									<div class="action-buttons">
										<a href="?page=edit_kelas&id=<?php echo $data['id']; ?>&act=edit" class="green"><i class="ace-icon fa fa-pencil bigger-130"></i> Ubah</a>
										<a href="?page=edit_kelas&id=<?php echo $data['id']; ?>&act=hapus" class="red konfirmasi"><i class="ace-icon fa fa-trash-o bigger-130"></i> Hapus</a>
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
