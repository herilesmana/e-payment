<?php

if (isset($_GET['page'])) {
	
	switch ($page = $_GET['page']) {


		case "siswa":
			include("modul/modul_siswa/form.php");
			break;

					case "admin":
						break;
					case "trans_dsp":
					break;

					case "ajaran":
					include("modul/modul_ajaran/view.php");	
					break;
					case "asup_ajaran":
					include("modul/modul_ajaran/save.php");	
					break;
					case "form_ajaran":
					include("modul/modul_ajaran/form.php");	
					break;
					case "edit_ajaran":
					include("modul/modul_ajaran/edit_ajaran.php");	
					break;
					case "bayar":
					include("modul/modul_bayar/form.php");	
					break;
					case "update_ajaran":
					include("modul/modul_ajaran/update.php");	
					break;

					/***********************Bayar****************/

					case "form_bayar":
					include("modul/modul_bayar/form.php");	
					break;
					case "asup_bayar":
					include("modul/modul_bayar/save_bayar.php");	
					break;
					case "view_bayar":
					include("modul/modul_bayar/view_bayar.php");	
					break;
					case "edit_bayar":
					include("modul/modul_bayar/edit_bayar.php");	
					break;
					case "update_bayar":
					include("modul/modul_bayar/update_bayar.php");	
					break;
/***********************Siswa****************/

					case "form_siswa":
					include("modul/modul_siswa/form.php");	
					break;
					case "save_siswa":
					include("modul/modul_siswa/save_siswa.php");	
					break;
					case "view_siswa":
					include("modul/modul_siswa/view_siswa.php");	
					break;
					case "edit_siswa":
					include("modul/modul_siswa/edit_siswa.php");	
					break;
					case "update_siswa":
					include("modul/modul_siswa/update_siswa.php");	
					break;
/***********************Kelas****************/

					case "form_kelas":
					include("modul/modul_kelas/form.php");	
					break;
					case "save_kelas":
					include("modul/modul_kelas/save_kelas.php");	
					break;
					case "view_kelas":
					include("modul/modul_kelas/view_kelas.php");	
					break;
					case "edit_kelas":
					include("modul/modul_kelas/edit_kelas.php");	
					break;
					case "update_kelas":
					include("modul/modul_kelas/update_kelas.php");	
					break;

						/***********************Bulan****************/

					case "view_bulan":
					include("modul/modul_bulan/view_bulan.php");	
					break;
					/***********************Transaksi DSP****************/
					case "dsp":
					include("modul/modul_dsp/trans_dsp.php");
					break;
					/***********************Transaksi SPP****************/
					case "spp":
					include("modul/modul_transaksi_spp/bayar_spp.php");
					break;
					case "lunasi_spp":
					include("modul/modul_transaksi_spp/lunasi_spp.php");
					break;






		default:
			
			break;
	}

} else {
	//include 'dasboard.php';
}