<?php
class Kendaraan{
	var $Jenis_Kendaraan;
	var $Jumlah_Roda;
	var $Merk;
	var $Bahan_Bakar;
	var $Harga;
	var $Tahun_Pembuatan;

	function hargaSecond() {
		if ($this -> Tahun_Pembuatan > 2005)
			$second = $this -> Harga * 20/100;
		else if ($this -> Tahun_Pembuatan >= 2005)
			$second = $this -> Harga * 30/100;
		else if ($this -> Tahun_Pembuatan <= 2005)
			$second = $this -> Harga * 40/100;
			return $second;

	}
}
?>