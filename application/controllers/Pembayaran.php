<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model(['booking_model', 'pembayaran_model']);
    }

    public function index()
    {
        $data1['title'] = 'Janitra Admin - Data Pembayaran';
        $data2['row'] = $this->pembayaran_model->get()->result();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('admin'));
        }

        $this->load->view('templates/admin_header', $data1);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('admin/content/transaksi/pembayaran', $data2);
        $this->load->view('templates/admin_footer');
    }

    public function hapus($id)
    {
        $this->pembayaran_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='".site_url('pembayaran')."';</script>";
    }

    public function process()
    {
        if (isset($_POST['edit_status'])) {
            $post = $this->input->post(null, TRUE);
            $this->booking_model->edit_status($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        echo "<script>window.location='".site_url('pembayaran')."';</script>";
    }
}