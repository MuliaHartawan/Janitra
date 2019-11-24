<?php
class Blog_model extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO blog (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM blog WHERE berita_id='$kode'");
		return $hsl;
	}

	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM blog ORDER BY berita_id DESC");
		return $hsl;
	}
}