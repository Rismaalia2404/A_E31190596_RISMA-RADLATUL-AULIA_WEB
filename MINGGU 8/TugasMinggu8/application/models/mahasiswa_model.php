<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Risma","prodi"=>"MIF"],
			["nama"=>"Raudlatul","prodi"=>"TKK"],
			["nama"=>"Aulia","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>