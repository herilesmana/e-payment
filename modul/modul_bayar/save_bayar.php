<?php


if(isset($_POST['simpan'])){

			
error_reporting(E_ALL ^ E_NOTICE);


			$jenis=$exe->antiinject($_POST['jenis']);
			$ta=$exe->antiinject($_POST['ta']);
			$jumlah=$exe->antiinject($_POST['jumlah']);
			


			$data=array('jenis_tagihan'=>$jenis, 'th_ajaran_masuk'=>$ta,'jumlah'=>$jumlah);

			$asup=$exe->insert('bayar',$data);
			if($asup->execute()){

				?>
				<script>
muncul();

				</script>
			
			<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil di tambah!!</div>

			<?php
		}else{
			echo "gagal menambah data";
		}








}






?>