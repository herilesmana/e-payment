
<div class="col-sm-offset-1 col-sm-10">

<FORM class="form-horizontal" action="?page=asup_bayar" method="POST">
																
																<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Jenis tagihan</label>
																<div class="col-sm-9">
																<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="jenis">
																<option value="DSP">DSP</option>
																<option value="SPP">SPP</option>
																<option value="TP2A">TP2A</option>
																
																</select>
																		</div>
																	</div>













																<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Tahun Pelajaran Masuk</label>
																<div class="col-sm-9">
																<select class="col-xs-6 col-sm-5" id="form-field-select-1" name="ta">

																<?php 
																	for($a=2015; $a<=date("Y"); $a++){

																	$b=$a+1;
																		echo "<option value='$a/$b' selected>$a/$b</option>";
																																	
																	}

																	?>
																
																
															</select>
																		</div>
																	</div>





	
																<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Besaran (Rp)</label>

																		<div class="col-sm-9">
	
																	
														<input name="jumlah"  class="col-xs-6 col-sm-5" type="text" />
														<span class="lbl"></span>
													
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