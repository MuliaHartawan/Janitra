<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->select('pembayaran.*, booking.id_status, status.status as status');
        $this->db->from('pembayaran');
        $this->db->join('booking', 'booking.id_booking = pembayaran.id_booking');
        $this->db->join('status', 'status.id_status = booking.id_status');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        return $this->db->get();
    }

    function tambah_data($post)
    {
        $data = [
            'id_booking' => htmlspecialchars($this->input->post('id', true)),
            'kode_booking' => htmlspecialchars($this->input->post('kode_booking', true)),
            'atas_nama' => htmlspecialchars($this->input->post('atas_nama', true)),
            'nominal' => htmlspecialchars($this->input->post('nominal', true)),
            'gambar_bukti' => $post['gambar_bukti']
        ];
        
        $this->db->insert('pembayaran', $data);

        $data = ['id_status' => 2];

        $this->db->where('id_booking', $this->input->post('id'));
        $this->db->update('booking', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pembayaran');
    }
}