<?php


$id=$_GET['id'];

if($_GET['act']== "hapus"){

$data = $exe->delete('bayar', "id_bayar = '$id'");
	$data->execute();
?>

<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil diHapus!!</div>
	<script>

muncul();
window.location='?page=view_bayar';	
				</script>
			
		
<?php
} else {


$data=$exe->select('bayar',"id_bayar='$id'");

foreach($data as $row){

?>



<div class="col-sm-offset-1 col-sm-10">


<div class="col-sm-offset-1 col-sm-10">

<FORM class="form-horizontal" action="?page=update_bayar" method="POST">
																
		<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Jenis tagihan</label>
		<div class="col-sm-9">
		<input type="hidden" name='id_bayar' value="<?php echo $row['id_bayar']; ?>">
		
		<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="jenis">
		<option value="DSP" <?php $pilih1=$row['jenis_tagihan']=="DSP"?"selected":""; echo $pilih1; ?> >DSP</option>
		
		<option value="SPP" <?php $pilih1=$row['jenis_tagihan']=="SPP"?"selected":""; echo $pilih1; ?> >SPP</option>
		<option value="TP2A" <?php $pilih1=$row['jenis_tagihan']=="TP2A"?"selected":""; echo $pilih1;?> >TP2A</option>
		
		</select>
				</div>
			</div>













		<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Pelajaran Masuk</label>
		<div class="col-sm-9">
		<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="ta">

		<?php 
			for($a=2014; $a<=date("Y"); $a++){
			$b=$a+1;
			$d="$a/$b";
			$pilih=$row['th_ajaran_masuk']==$d?"selected":"";
			
				echo "<option value='$a/$b' $pilih>$a/$b</option>";
																			
			}

			?>
		
		
	</select>
				</div>
			</div>






							<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Besaran (Rp)</label>

									<div class="col-sm-9">

								
					<input name="jumlah" value="<?php $j=$row['jumlah']; echo $j; ?>"  class="col-xs-6 col-sm-5" type="text" />
					<span class="lbl"></span>
				
									</div>
								</div>
<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info"  type="submit" name="update_bayar">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Update
					</button>

					&nbsp; &nbsp;
					<button class="btn" type="reset" name="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>
				</div>
			</div>





</FORM>










</div>



</div>














<?php
}
}