<?php

if (isset($_GET['page'])) {

	switch ($_GET['page']) {

		case 'siswa':
			$siswa="active open";
			break;

			case 'admin':
			$admin="active open";
			break;

		case 'trans_dsp':
			$trans_dsp="active open";
			break;
case 'ajaran':
			$ajaran="active open";
			break;



		default:
			# code...
			break;
	}
} else {
	$else = "active";
}