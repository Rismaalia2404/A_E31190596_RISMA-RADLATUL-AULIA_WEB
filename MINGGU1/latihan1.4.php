<?php
class Kendaraan {
	var $JumlahRoda;
	var $warna;
	var $bahanBakar;
	var $harga;
	var $merek;

	function statusHarga(){
		if ($this -> harga -> 30000000) status = 'Mahal';
		else $status = 'murah';
		return $status;
	}

	function setMerek($y){
		$this -> merek = $x; 
	}

	function setHarga($x){
		$this -> harga = $x;
	}
}

$kendaraan1 = new kendaraan();
$kendaraan1 -> setMerek = 'Honda Vario 150';
$kendaraan1 -> setHarga = 24000000;

echo kendaraan1 -> statusHarga(); 

?>