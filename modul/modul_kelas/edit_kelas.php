<?php


$id = $_GET['id'];

if($_GET['act']== "hapus"){

$data = $exe->delete('kelas', "id = '$id'");
$data->execute();
?>

	<script>
	window.location='?page=view_kelas';	
	</script>
			
		
<?php
} else {


$data = $exe->select('kelas',"id='$id'");

foreach($data as $row){

?>



<div class="col-sm-offset-1 col-sm-10">


<div class="col-sm-offset-1 col-sm-10">

<FORM class="form-horizontal" action="?page=update_kelas" method="POST">
																
		<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Jenis tagihan</label>
		<div class="col-sm-9">
		<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
		<input type="text" name='nama' value="<?php echo $row['nama']; ?>">
				</div>
			</div>


<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info"  type="submit" name="update_kelas">
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