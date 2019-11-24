<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_destination_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->select('detail_destinasi.*, destinasi.kota as kota');
        $this->db->from('detail_destinasi');
        $this->db->join('destinasi', 'destinasi.id_destinasi = detail_destinasi.id_destinasi');
        if ($id != null) {
            $this->db->where('id_detil_destinasi', $id);
        }
        return $this->db->get();
    }

    function get_destinasi($id_destinasi)
    {
        $this->db->from('detail_destinasi');
        $this->db->where('id_destinasi', $id_destinasi);
        $result = $this->db->get()->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
        return $result;
    }

    function tambah_data()
    {
        $data = [
            'id_destinasi' => $this->input->post('destinasi', true),
            'destinasi_wisata' => htmlspecialchars($this->input->post('destinasi_wisata', true)),
        ];

        $this->db->insert('detail_destinasi', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_detil_destinasi', $id);
        $this->db->delete('detail_destinasi');
    }

    function edit_data($post)
    {
        $data['id_destinasi'] = htmlspecialchars($post['destinasi']);
        $data['destinasi_wisata'] = htmlspecialchars($post['destinasi_wisata']);

        $this->db->where('id_detil_destinasi', $post['id']);
        $this->db->update('detail_destinasi', $data);
    }
}
