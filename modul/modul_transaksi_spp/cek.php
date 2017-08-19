
<?php
include "../../fungsi/model.php";
$nis = $_GET['nis'];
$data = $exe->join_spp($nis);
echo json_encode($data);

?>
