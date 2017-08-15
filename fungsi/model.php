<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","smppgri4cimahi");

class CRUD {
	
public $mysqli;

	public function __construct(){

		$this->mysqli = new mysqli(HOST,USER,PASS,DB);
		if($this->mysqli->connect_errno){
			header("location:Modulerror/error.php");
		}

	}

/************keur LOGIN ***********/
public function login($user){
$query=$this->mysqli->query("SELECT count(*) FROM login WHERE user='$user'");
$hasil=$query->fetch_row();
return $hasil;
}

public function login2($user){
$query=$this->mysqli->query("SELECT * FROM login WHERE user='$user'");
$h=$query->fetch_array();
return $h;
}
/***************nepi kadieu login********************************/


/****************Keur CRUD Tabel kabeh*****************************/
public function insert($table, $rows = null){
			$sql = "INSERT INTO $table";
			$row = null;
			$value = null;
				foreach ($rows as $key => $nilai) {
				$row .= "," .$key;
				$value .= ",'" .$nilai ."'";
				}
			$sql .= "(" .substr($row, 1) .")";
			$sql .= "VALUES(" .substr($value, 1) .")";
			$input = $this->mysqli->prepare("$sql") or die($this->mysqli->error);
			return $input;
			
		}

		//fungsi untuk mengambil data dari table
		public function select($table, $where = null, $order = null){
			$sql = "SELECT * FROM $table";
			if($where != null){
				$sql .= " WHERE $where";
			}
			if($order != null){
				$sql .= " ORDER BY $order";
			}
			$select = $this->mysqli->query("$sql") or die($this->mysqli->error);
			return $select;
		}

		//fungsi untuk mengupdate data/////////////////////////
		public function update($table, $field = null, $where = null){
			$sql = "UPDATE $table SET ";
			$set = null;
				foreach ($field as $key => $values) {
					$set .= ", " .$key ." = '" .$values ."'";
				}
			$sql .= substr($set, 1) ." WHERE " .$where;
			$update = $this->mysqli->prepare("$sql") or die($this->mysqli->error);
			return $update;
		}
		//fungsi untuk menghapus data//////////////////////////////////
		public function delete($table, $where = null){
			$sql = "DELETE FROM $table WHERE " .$where;
			
			$delete = $this->mysqli->prepare("$sql") or die($this->mysqli->error);
			return $delete;

		}


/****************Nepi kadieu CRUD Tabel kabeh*****************************/


/*********************************ANTI INJEKSI bising di suntik**************/

public function antiinject($value){
			$ai = $this->mysqli->real_escape_string(stripslashes(htmlentities(htmlspecialchars($value))));
			return $ai;
		}
/**********Nepi kadieu anti suntik********************/

/*******************join************/


/*public function join_dsp($value){

	$query=$this->mysqli->query("select siswa.nama, siswa.th_ajaran, siswa.nisn,
siswa.kelas, siswa.th_ajaran_masuk,siswa.nis,
		bayar.jumlah from siswa INNER JOIN bayar on siswa.th_ajaran_masuk=bayar.th_ajaran_masuk where siswa.nis='$value' AND bayar.jenis_tagihan='DSP'");
$h=$query->fetch_array();
return $h;
} */

public function join_dsp($value){


$h=substr($value,0,2);
$g=substr($value, 2,2);
$jad="20$h/20$g";
	$query=$this->mysqli->query("select siswa.nama, siswa.th_ajaran, siswa.nisn, siswa.kelas, siswa.th_ajaran_masuk,siswa.nis, bayar.jumlah, sum(trans_dsp.jumlah) as total from siswa INNER JOIN bayar on siswa.th_ajaran_masuk=bayar.th_ajaran_masuk inner join trans_dsp on trans_dsp.jenis_tagihan=bayar.jenis_tagihan where siswa.nis='$value' AND bayar.jenis_tagihan='DSP' and bayar.th_ajaran_masuk='$jad'");
$hi=$query->fetch_array();
return $hi;
}





}
$exe= new CRUD();
