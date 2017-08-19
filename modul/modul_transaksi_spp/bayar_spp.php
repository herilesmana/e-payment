    





<div class="col-sm-offset-1 col-sm-11">
<FORM class="form-horizontal" action="/?page=lunasi_spp" method="POST">

    <div class="tabbable">
        <ul class="nav nav-tabs padding-16">
            <li class="active">
                <a data-toggle="tab" href="#edit-basic" aria-expanded="true">
                    <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                    <B>Input Bayar SPP</B>
                </a>
            </li>
        </ul>
        <div class="tab-content profile-edit-tab-content">
            <div id="edit-basic" class="tab-pane active">
                <div class="row row-centered">
                            
                        <div class="form-group">
                            <label class="col-sm-4 control-label no-padding-center" for="form-field-first">NIS :</label>

                            <div class="col-sm-8 col-centered" >
                                <input type="hidden" id="id_bayar" name="id_bayar">
                                <?php
                                $query_spp = $exe->select('trans_spp',"","no_trans desc LIMIT 1");
                                
                                if($query_spp->num_rows > 0){
                                    $hasil = $query_spp->fetch_array();
                                    $new_no = (int)$hasil['no_trans']+1;
                                }else{
                                    $new_no = 100001;
                                }
                                echo  "<input type=\"hidden\" name=\"no_trans\" value=\"$new_no\">";
                                ?>
                                <input class="col-xs-6 col-centered col-sm-6" style="font-weight:bold; font-family:arial; font-size:17px; padding: 5px 5px 5px 5px"  type="text" id="nis"  name="nis" placeholder="Silahkan Masukan NIS" required autofocus ><button id="cek" style="height:37px; margin-top:-4px; padding: 4px 7px 6px 7px" class="btn btn-default" onClick="return false">Cari</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 alert alert-danger" style="display: none"><i class="ace-icon fa fa-close"></i> Data siswa dengan NIS tersebut tidak ditemukan !</div>
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
                                                        <input class="col-xs-10 col-sm-10" type="text" id="nama"  name="nama" >
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
                                                        <input class="col-xs-10 col-centered col-sm-10" type="text" id="ta"  name="ta" readonly="">
                                                    </div>
                                                </div>
                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.col -->

                                <div class="col-sm-6">
                                    <div class="widget-box">
                                        <div class="widget-header">
                                            <h4 class="smaller">Detail Tagihan</h4>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label no-padding-center" for="form-field-first">SPP / bulan</label>

                                                    <div class="col-sm-8 " >
                                                        <input class="col-xs-10 col-centered col-sm-10" type="text" id="perbulan"  name="bulanan" readonly="">
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
                                                    <label class="col-sm-4 control-label no-padding-center">Kelas</label>
                                                    <div class="col-sm-8">
                                                        <select style="display: none" id="kelasnya">
                                                            <option value="">Pilih kelas</option>
                                                            <option value="satu">Satu</option>
                                                            <option value="dua">Dua</option>
                                                            <option value="tiga">Tiga</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="tagihan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div>
				</div>
            </div>	
        </div>
        <!--<div class="clearfix form-actions">
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
        </div>-->
    </div>
    
    </FORM>
    </div>
											
									
<script type="text/javascript">
$(document).ready(function () {
    $('#cek').click(function() {
        //deklarsi variable
        //percobaan
        var nis = $("#nis").val();
        $.ajax({
            url:'modul/modul_transaksi_spp/cek.php', // Url to which the request is send
            type:'GET',
            dataType:'json',             // Type of request to be send, called as method
            data:'nis='+nis, // Data sent to server, a set of key/value pairs (i.e. form fields and values)      // To send DOMDocument or non processed data file it is set to false
            success:function(data)   // A function to be called if request succeeds
            {
                $('#nama').val(data.nama);
                $('#nisn').val(data.nisn);
                $('#kelas').val(data.kelas);
                $('#ta').val(data.th_ajaran);
                $('#perbulan').val(data.jumlah);
                $('#id_bayar').val(data.id_bayar);
                $('#kelasnya').show();
                $('#kelasnya').val('');
                $('#tagihan').hide();
            }
        });
    });

$('#kelasnya').on('change',function(){
    var nis   = $("#nis").val();
    var kelas = $(this).val();
    var data = {nis : nis,kelas : kelas};
        $.ajax({
            url:'modul/modul_transaksi_spp/tagihan.php', // Url to which the request is send
            type:'POST',            // Type of request to be send, called as method
            data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)      // To send DOMDocument or non processed data file it is set to false
            success:function(data)   // A function to be called if request succeeds
            {
               $('#tagihan').show();
               $('#tagihan').html(data);
            }
        });
});

});


</script>
