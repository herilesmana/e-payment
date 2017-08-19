<?php

$nis   = $_POST['nis'];
$kelas = $_POST['kelas'];

include "../../fungsi/model.php";
include "../../fungsi/format_all.php";

$query = $exe->select("trans_spp", "nis=$nis AND kelas='$kelas'");
if ($query->num_rows > 0){

?>
<div class="form-group">
    <div class="col-sm-12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bulanan</th>
                    <th>Dibayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <input type="hidden" value="<?= $kelas ?>" name="kelas" />
            <?php 
            foreach($exe->select("trans_spp", "nis=$nis") as $data_spp){;
            $bulan[] = $data_spp['id_bulan'];
            $no_trans = $data_spp['no_trans'];

            $hasil = $exe->select("bulan","id_bulan=$data_spp[id_bulan]")->fetch_array();

            ?>
                        <tr>
                            <td><input type="checkbox" name="" checked disabled /></td>
                            <td><?= $hasil['nama_bulan']; ?></td>
                            <td><?= $format->tanggal($data_spp['tgl']); ?></td>
                            <td><i class="green">Lunas</i></td>
                        </tr>
                <? 
            }
            ?>
                <?php foreach($exe->select('bulan') as $data_bulan) { ?>
                    
                        <?php if(in_array($data_bulan['id_bulan'], $bulan)){ ?>
                        <?php }else{ ?>
                        <tr>
                            <td><input type="checkbox" name="bulan" value="<?= $data_bulan['id_bulan'] ?>" /></td>
                            <td><?= $data_bulan['nama_bulan']; ?></td>
                            <td></td>
                            <td><i class="red">Belum dibayar</i></td>
                        </tr>
                        <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-primary" type="submit" name="lunasi_SPP">Lunasi</button>
    </div>
</div>
<?php

}else{
?>
<div class="alert alert-warning">Siswa belum membayar</div>
<div class="form-group">
    <div class="col-sm-12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bulanan</th>
                    <th>Dibayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <input type="hidden" value="<?= $kelas ?>" name="kelas" />
                <?php foreach($exe->select('bulan') as $data_bulan) { ?>
                    <tr>
                        <td><input type="checkbox" name="bulan" value="<?= $data_bulan['id_bulan'] ?>"/></td>
                        <td><?= $data_bulan['nama_bulan']; ?></td>
                        <td></td>
                        <td><i class="red">Belum dibayar</i></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-primary" type="submit" name="lunasi_SPP">Lunasi</button>
    </div>
</div>

<?php

}