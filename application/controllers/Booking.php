<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model('booking_model');
    }

    public function index()
    {
        $data['title'] = 'Janitra - Create Booking';
        $data1['title'] = 'Create Booking';

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('auth/login'));
        }

        $keyword = $this->input->post('keyword');

        $data['row'] = $this->booking_model->get_keyword($keyword)->result();
        $data['objek'] = $this->booking_model->get_objek($keyword)->result();
        $data['fasilitas'] = $this->booking_model->get_fasilitas($keyword)->result();
        
        $this->load->view('templates/customer_header', $data, $keyword);
        $this->load->view('templates/customer_sidebar');
        $this->load->view('templates/customer_topbar', $data1);
        $this->load->view('auth/booking');
    }

    public function process()
    {
        if (isset($_POST['book'])) {
            $result = $this->booking_model->tambah_data();
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        echo "<script>window.location='".site_url('my_booking')."';</script>";
    }

    public function hapus($id)
    {
        $this->booking_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('booking')."';</script>";
    }

    public function detail($id)
    {
        $data['title'] = 'Janitra Admin - Detail Paket Wisata';
        $query = $this->data_paket_model->get($id);

        if ($query->num_rows() > 0) {
            $data1['row'] = $query->row();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('admin/content/transaksi/detail_paket', $data1);
            $this->load->view('templates/admin_footer');
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('booking')."';</script>";
        }
    }
}
