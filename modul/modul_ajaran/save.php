<?php


if(isset($_POST['simpan'])){

			
error_reporting(E_ALL ^ E_NOTICE);


			$ta=$exe->antiinject($_POST['ta']);
			$status=$exe->antiinject($_POST['status']);
			$ket=$exe->antiinject($_POST['ket']);
			if($status == 'on'){

				$ak="aktif";
			} else {

				$ak="tidak";
			}


			$data=array('th_ajaran'=>$ta, 'status'=>$ak,'ket'=>$ket);

			$asup=$exe->insert('th_ajaran',$data);
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