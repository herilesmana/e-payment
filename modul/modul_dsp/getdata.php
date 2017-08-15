
<?php
include "../../fungsi/model.php";
$nis = $_GET['nis'];
$data = $exe->join_dsp($nis);
echo json_encode($data);


?>
