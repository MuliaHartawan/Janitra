<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->select('booking.*, user.name as nama_customer, paket_wisata.nama_paket as nama_paket, status.status as status');
        $this->db->from('booking');
        $this->db->join('user', 'user.id_user = booking.id_user');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = booking.id_paket_wisata');
        $this->db->join('status', 'status.id_status = booking.id_status');
        if ($id != null) {
            $this->db->where('id_booking', $id);
        }
        return $this->db->get();
    }

    function get_keyword($keyword)
    {
		$this->db->select('paket_wisata.*, destinasi.kota as kota, user.name as nama_customer');
        $this->db->from('paket_wisata');
        $this->db->join('destinasi', 'destinasi.id_destinasi = paket_wisata.id_destinasi');
        $this->db->join('user', 'user.id_user = paket_wisata.id_user');

        $this->db->where('paket_wisata.id_status_booking', 1);
        $this->db->where('paket_wisata.id_user', $this->session->userdata('id_user'));
        $this->db->like('paket_wisata.kode_paket', $keyword);
        
		return $this->db->get();
    }
    
    function get_objek($data)
    {
        $this->db->from('objek_paket');
        $this->db->join('detail_destinasi', 'objek_paket.id_detil_destinasi = detail_destinasi.id_detil_destinasi');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = objek_paket.id_paket_wisata');

        $this->db->where('paket_wisata.kode_paket', $data);
        
        return $this->db->get();
    }

    function get_fasilitas($data)
    {
        $this->db->from('fasilitas_paket');
        $this->db->join('fasilitas', 'fasilitas_paket.id_fasilitas = fasilitas.id_fasilitas');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = fasilitas_paket.id_paket_wisata');

        $this->db->where('paket_wisata.kode_paket', $data);
        
        return $this->db->get();
    }

    function tambah_data()
    {
        $data = [
            'id_user' => htmlspecialchars($this->input->post('id_user', true)),
            'kode_booking' => $this->input->post('kode_booking', true),
            'id_status' => 1,
            'id_paket_wisata' => htmlspecialchars($this->input->post('id_paket_wisata', true))
        ];
        
        $this->db->insert('booking', $data);

        $data = ['id_status_booking' => 2];

        $this->db->where('id_paket_wisata', $this->input->post('id_paket_wisata'));
        $this->db->update('paket_wisata', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_booking', $id);
        $this->db->delete('booking');
    }

    function edit_data($post)
    {
        $data = [
            'id_user' => htmlspecialchars($this->input->post('nama_customer', true)),
            'id_status' => htmlspecialchars($this->input->post('status', true)),
            'jadwal_berangkat' => $this->input->post('jadwal_berangkat'),
            'jadwal_pulang' => $this->input->post('jadwal_pulang'),
            'banyak_penumpang' => $this->input->post('banyak_penumpang', true),
            'biaya' => $this->input->post('biaya', true),
            'id_paket_wisata' => htmlspecialchars($this->input->post('nama_paket', true))
        ];

        $this->db->where('id_booking', $post['id']);
        $this->db->update('booking', $data);
    }

    function edit_status($post)
    {
        $data = ['id_status' => 3];

        $this->db->where('id_booking', $post['id']);
        $this->db->update('booking', $data);
    }
}
