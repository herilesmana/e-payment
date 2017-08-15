<?php


if(isset($_POST['update_siswa'])){

			
error_reporting(E_ALL ^ E_NOTICE);

	$nama 	= $exe->antiinject($_POST['Nama']);
	$nisn 	= $exe->antiinject($_POST['NISN']);
	$nis 	= $exe->antiinject($_POST['NIS']);
	$alamat = $exe->antiinject($_POST['AlamatRumah']);
	$kelas 	= $exe->antiinject($_POST['Kelas']);
	$jk 	= $exe->antiinject($_POST['JK']);
	$th_pelajaran_masuk 	= $exe->antiinject($_POST['ThAjaranMasuk']);
	$th_pelajaran_sekarang 	= $exe->antiinject($_POST['ThAjaranSekarang']);
	$hp 	= $exe->antiinject($_POST['HP']);
	$status = $exe->antiinject($_POST['Status']);

	$data 	= array(
		'nisn' => $nisn,
		'nama' => $nama,
		'jk' => $jk,
		'kelas' => $kelas,
		'alamat' => $alamat,
		'th_ajaran_masuk' => $th_pelajaran_masuk,
		'th_ajaran' => $th_pelajaran_sekarang,
		'telepon' => $hp,
		'status' => $status
	);
			$asup = $exe->update('siswa',$data,"nis='$nis'");
			if($asup->execute()){

				?>	

				<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil di edit!!</div>
				<script>window.location='/?page=view_siswa'</script>
			
		

			<?php
		}else{
			?>

		<div id="hasil" class="btn btn-lg btn-danger col-sm-12"><i class="ace-icon fa fa-check"></i>Failed!!</div>
				<script>
muncul();

				</script>

				<?php
			
		}








}






?>










