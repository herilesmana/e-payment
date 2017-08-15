





<div class="col-sm-offset-1 col-sm-11">
				
								

											<FORM class="form-horizontal" action="" method="POST">

												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic" aria-expanded="true">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																<B>Input Bayar DSP</B>
															</a>
														</li>

												
													</ul>


													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane active">
															<div class="row row-centered">
																	 
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-center" for="form-field-first">NIS :</label>

																		<div class="col-sm-8 col-centered" >
																			<input class="col-xs-6 col-centered col-sm-6" style="font-weight:bold; font-family:arial; font-size:18px;"  type="text" id="nis"  name="nis" placeholder="Silahkan Masukan NIS" required autofocus >
																		</div>
																	</div>

													
																	


																	<div class="row">
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="smaller">
													Details
													<small>Data Siswa</small>
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													

																	<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-center" for="form-field-first">Nama</label>

																		<div class="col-sm-10 col-centered" >
																			<input class="col-xs-10 col-sm-10"   type="text" id="nama"  name="nama" >
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-center" for="form-field-first">NISN</label>

																		<div class="col-sm-10 " >
																			<input class="col-xs-10 col-centered col-sm-10"   type="text" id="nisn"  name="nisn" readonly="">
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-center" for="form-field-first">Kelas</label>

																		<div class="col-sm-10 " >
																			<input class="col-xs-10 col-centered col-sm-10"   type="text" id="kelas"  name="kelas" readonly="">
																		</div>
																	</div>

																			<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-center" for="form-field-first">T.A</label>

																		<div class="col-sm-10 " >
																			<input class="col-xs-10 col-centered col-sm-10"   type="text" id="ta"  name="ta" readonly="">
																		</div>
																	</div>
																	
												</div>
											</div>
										</div>
									</div><!-- /.col -->

									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="smaller">Data Tagihan</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													
													<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-center" for="form-field-first">Besar Tagihan</label>

																		<div class="col-sm-8 " >
																			<input class="col-xs-10 col-centered col-sm-10"   type="text" id="bt"  name="bt" readonly="">
																		</div>
																	</div>	
																		
																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-center" for="form-field-first">Sisa Tagihan</label>

																		<div class="col-sm-8 " >

																			<input class="col-xs-10 col-centered col-sm-10"   type="text" id="st"  name="st" readonly="">
																		</div>
																	</div>



																<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-center" for="form-field-first">Record Bayar</label>


																		<div class="col-sm-8 " >
																			
																		<table class="table table-striped table-bordered table-hover">
																			<thead>
																				<tr><td>Tanggal</td><td>Cetak</td></tr></thead>

																			</thead>
																				<tbody>
																					<tr><td>20 Januari 2017</td>
																					<td>
																						<a href="">
																					<i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i></td>
																					</a>
																					</tr>
																				</tbody>
																		</table>



																		</div>
																	</div>	




																									
																		<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-center" for="form-field-first">Bayar (Rp) </label>

																		<div class="col-sm-8 " >
																			<input class="col-xs-10 col-centered col-sm-10" style="font-weight:bold; font-family:arial; font-size:18px;"  type="text" id="bayar"  name="bayar" placeholder="Nominal Bayar">
																		</div>
																	</div>	
	

																	
												</div>
											</div>
										</div>
									</div><!-- /.col -->
								</div>
															
															




																
																























															

<div id="pesan"></div>




												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info"  type="submit" id="simpan" name="simpan">
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
												</div>
												
												</FORM>
												</div>
											
									
<script type="text/javascript">
  $(document).ready(function () {
	   $('#nis').keyup(function() {
                  //deklarsi variable
                 
                  var nis = $("#nis").val();
                  $.ajax({
                  url:'modul/modul_dsp/getdata.php', // Url to which the request is send
                  type:'GET',
                  dataType:'json',             // Type of request to be send, called as method
                  data:'nis='+nis, // Data sent to server, a set of key/value pairs (i.e. form fields and values)      // To send DOMDocument or non processed data file it is set to false
                  success:function(data)   // A function to be called if request succeeds
                  {
                    $('#nama').val(data.nama);
                    $('#nisn').val(data.nisn);
                    $('#kelas').val(data.kelas);
                    $('#ta').val(data.th_ajaran);
                    $('#bt').val(data.jumlah);
                     

                      var sisa= parseInt(data.jumlah) - parseInt(data.total); 
                      $('#st').val(sisa);
                    if(sisa <= 0){
                      $('#pesan').html("<b>Lunas</b>");
                      $('#simpan').addClass('disabled');
                    }
                  }
                  });
                });

});


</script>
