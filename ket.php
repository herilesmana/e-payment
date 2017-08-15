<?php

if (isset($_GET['page'])) {
	
	switch ($_GET['page']) {


		case 'siswa':
			echo "Silahkan Lengkapi Data Siswa";
			break;
		case 'admin':
			echo "Merubah Password";
			break;

		default:
			
			break;
	}

} else {
	echo "Dashboard Aplikasi Sistem Pembayaran SMP PGRI 4 Cimahi";
}