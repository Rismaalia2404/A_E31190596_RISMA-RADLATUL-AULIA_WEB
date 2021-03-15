<?php
class kalkulator_sederhana{
	private $a = 45;
	private $b = 5;
	private $c = 3;

	public function tambah () {
		$hasil = $this -> a + $this -> b + $this -> c;
		return $hasil;
	}
	public function kurang () {
		$kurang = $this -> a - $this -> b - $this -> c;
		return $kurang;
	}
	public function bagi () {
		$bagi = $this -> a / $this -> b / $this -> c;
		return $bagi;
	}
	public function kali() {
		$kali = $this -> a * $this -> b * $this -> c;
		return $kali;
}
}

$Nilai = new kalkulator_sederhana() ;

echo "Penjumlahan" . $Nilai -> tambah ();
echo "<br/>";
echo "Penguangan" . $Nilai -> kurang ();
echo "<br/>";
echo "Pembagian" . $Nilai -> bagi ();
echo "<br/>";
echo "Perkalian" . $Nilai -> kali ();
echo "<br/>";

?>