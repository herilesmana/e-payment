<?php


if(isset($_POST['simpan'])){

			
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
			'nis' => $nis,
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
		$asup 	= $exe->insert('siswa',$data);

		if($asup->execute()){
			echo "<script>window.location='/?page=view_siswa&hasil=success'</script>";	
		}else{
			echo "<script>window.location='/?page=form_siswa&hasil=error'</script>";
		}
}

?>