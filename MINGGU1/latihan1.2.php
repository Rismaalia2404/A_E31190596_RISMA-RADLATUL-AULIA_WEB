<?php
class Kendaraan{
	var $Jenis_Kendaraan;
	var $Jumlah_Roda;
	var $Merk;
	var $Bahan_Bakar;
	var $Merk;
	var $Harga;
	var $Tahun_Pembuatan;

	function mendapatSubsidi() {
		if (($this -> Bahan_Bakar = 'Premium') && ( $this -> Tahun_Pembuatan < 2005)) $subsidi = 'Dapat';
		else $subsidi = 'Tidak Dapat';
		return $subsidi; 
	}
}

?>