<?php


if(isset($_POST['update_kelas'])){

			
error_reporting(E_ALL ^ E_NOTICE);

			$id = $_POST['id'];
			$nama = $exe->antiinject($_POST['nama']);
		

			$data = array('nama'=> $nama);

			$asup=$exe->update('kelas',$data,"id='$id'");
			if($asup->execute()){

				?>	

				<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil di edit!!</div>
				<script>window.location='/?page=view_kelas'</script>
			
		

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










