<?php


if(isset($_POST['update_bayar'])){

			
error_reporting(E_ALL ^ E_NOTICE);

			$id=$_POST['id_bayar'];
			$jt=$exe->antiinject($_POST['jenis']);
			$tam=$exe->antiinject($_POST['ta']);
			$jml=$exe->antiinject($_POST['jumlah']);
		

			$data=array('jenis_tagihan'=>$jt, 'th_ajaran_masuk'=>$tam,'jumlah'=>$jml);

			$asup=$exe->update('bayar',$data,"id_bayar='$id'");
			if($asup->execute()){

				?>	

				<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil di edit!!</div>
				<script>
muncul();

				</script>
			
		

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










