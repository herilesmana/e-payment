
<div class="col-sm-offset-1 col-sm-10">

<FORM class="form-horizontal" action="?page=asup_ajaran" method="POST">


								<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Ajaran</label>

																<div class="col-sm-9">
																<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="ta">

																<?php 
for($a=2014; $a<=date("Y"); $a++){

$b=$a+1;
	echo "<option value='$a/$b' selected>$a/$b</option>";
																
}

?>
																
																
															</select>
																		</div>
																	</div>
<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Status</label>

																		<div class="col-sm-9">
	
																	
														<input name="status" class="ace ace-switch" type="checkbox" />
														<span class="lbl"></span>
													
																		</div>
																	</div>




	<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Keterangan</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment" name="ket"></textarea>
																</div>
															</div>

<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info"  type="submit" name="simpan">
															<i class="ace-icon fa fa-check bigger-110"></i>
															Save
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