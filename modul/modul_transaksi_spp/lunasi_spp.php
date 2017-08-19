<?php

if(isset($_POST['lunasi_SPP']))
{
    $nis = $_POST['nis'];
    $id_bayar = $_POST['id_bayar'];
    $no_trans = $_POST['no_trans'];
    $kelas = $_POST['kelas'];
    $bulan = $_POST['bulan'];
    $bulanan = $_POST['bulanan'];
    $tanggal = date('Y-m-d');

    $data = array(
        'no_trans' => $no_trans,
        'nis' => $nis,
        'id_bayar' => $id_bayar,
        'kelas' => $kelas,
        'id_bulan' => $bulan,
        'tgl' => $tanggal,
        'jumlah' => $bulanan
    );
    $query = $exe->insert('trans_spp', $data);
    if($query->execute()){
        echo "HOre.. Benerr";
    }else{
        print_r($query->error);
    }
}else{
    
}