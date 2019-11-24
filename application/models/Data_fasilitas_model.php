<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_fasilitas_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->from('fasilitas');
        if ($id != null) {
            $this->db->where('id_fasilitas', $id);
        }
        return $this->db->get();
    }

    function tambah_data()
    {
        $data = [
            'nama_fasilitas' => htmlspecialchars($this->input->post('nama_fasilitas', true)),
        ];

        $this->db->insert('fasilitas', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_fasilitas', $id);
        $this->db->delete('fasilitas');
    }

    function edit_data($post)
    {
        $data['nama_fasilitas'] = htmlspecialchars($post['nama_fasilitas']);

        $this->db->where('id_fasilitas', $post['id']);
        $this->db->update('fasilitas', $data);
    }
}
