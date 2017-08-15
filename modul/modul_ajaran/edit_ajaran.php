<?php


$id=$_GET['id'];

if($_GET['act']== "hapus"){

$data = $exe->delete('th_ajaran', "id_tahun = '$id'");
	$data->execute();
?>

<div id="hasil" class="btn btn-lg btn-success col-sm-12"><i class="ace-icon fa fa-check"></i>Data Berhasil diHapus!!</div>
	<script>

muncul();
window.location='?page=ajaran';	
				</script>
			
		
<?php
}else {


$data=$exe->select('th_ajaran',"id_tahun='$id'");

foreach($data as $row){

?>



<div class="col-sm-offset-1 col-sm-10">

<FORM class="form-horizontal" action="?page=update_ajaran" method="POST">


								<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Ajaran</label>

																<div class="col-sm-9">
																<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="ta">

																<?php 
for($a=2014; $a<=date("Y"); $a++){

$b=$a+1;
$d="$a/$b";

$sel= $d==$row['th_ajaran']?"selected":"";
$c= $row['status']=="aktif"?"checked":" ";
	echo "<option value='$d' $sel>$a/$b</option>";
																
}

?>
																
																
															</select>
																		</div>
														</div>
<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Status</label>

																		<div class="col-sm-9">
	
																	<input name="id" type="hidden" value="<?php echo $row['id_tahun']; ?>"  />
														<input name="status" class="ace ace-switch" type="checkbox" <?php echo $c; ?>  />
														<span class="lbl"></span>
													
																		</div>
																	</div>




	<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Keterangan</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment" name="ket"><?php echo $row['ket']; ?></textarea>
																</div>
															</div>

<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info"  type="submit" name="update">
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














<?php
}
}