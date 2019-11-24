<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_destination_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->from('destinasi');
        if ($id != null) {
            $this->db->where('id_destinasi', $id);
        }
        return $this->db->get();
    }

    function tambah_data()
    {
        $data = [
            'kota' => htmlspecialchars($this->input->post('kota', true)),
            'koordinat' => htmlspecialchars($this->input->post('koordinat', true))
        ];

        $this->db->insert('destinasi', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_destinasi', $id);
        $this->db->delete('destinasi');
    }

    function edit_data($post)
    {
        $data['kota'] = htmlspecialchars($post['kota']);
        $data['koordinat'] = htmlspecialchars($post['koordinat']);

        $this->db->where('id_destinasi', $post['id']);
        $this->db->update('destinasi', $data);
    }
    function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM blog");
		return $hsl;
	}
}
