<?php


if(isset($_POST['simpan'])){

			
error_reporting(E_ALL ^ E_NOTICE);

		$nama = $exe->antiinject($_POST['nama']);
		$data = array('nama' => $nama);
		$asup = $exe->insert('kelas',$data);

		if($asup->execute()){
			echo "<script>window.location='/?page=view_kelas&hasil=success'</script>";	
		}else{
			echo "<script>window.location='/?page=form_kelas&hasil=error'</script>";
		}








}






?>