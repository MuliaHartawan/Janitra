<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_booking_model extends CI_Model
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
        $this->db->where('booking.id_user', $this->session->userdata('id_user'));
        if ($id != null) {
            $this->db->where('id_booking', $id);
        }
        return $this->db->get();
    }

    function get_booking($data)
    {
        $this->db->select('booking.*, user.name as nama_customer, paket_wisata.*, destinasi.kota as kota, status.status as status');
        $this->db->from('booking');
        $this->db->join('user', 'user.id_user = booking.id_user');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = booking.id_paket_wisata');
        $this->db->join('destinasi', 'destinasi.id_destinasi = paket_wisata.id_destinasi');
        $this->db->join('status', 'status.id_status = booking.id_status');
        $this->db->where('booking.id_user', $this->session->userdata('id_user'));

        $this->db->where('id_booking', $data);
        
        return $this->db->get();
    }
}