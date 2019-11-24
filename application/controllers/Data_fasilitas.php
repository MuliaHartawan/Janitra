<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_fasilitas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model('data_fasilitas_model');
    }

    public function index()
    {
        $data1['title'] = 'Janitra Admin - Data Fasilitas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['row'] = $this->data_fasilitas_model->get()->result();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('admin'));
        }

        $data = array();
        $error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
        $data['error'] = $error;

        $this->load->view('templates/admin_header', $data1);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/content/data/data_fasilitas', $data2);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_fasilitas()
    {
        $data['title'] = 'Janitra Admin - Data Fasilitas';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('admin/content/data/tambah_fasilitas');
        $this->load->view('templates/admin_footer');
    }

    public function process()
    {
        if (isset($_POST['add'])) {
            $result = $this->data_fasilitas_model->tambah_data();
        } else if (isset($_POST['edit'])) {
            $post = $this->input->post(null, TRUE);
            $this->data_fasilitas_model->edit_data($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        echo "<script>window.location='".site_url('data_fasilitas')."';</script>";
    }

    public function hapus($id)
    {
        $this->data_fasilitas_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='".site_url('data_fasilitas')."';</script>";
    }

    public function edit($id)
    {
        $data['title'] = 'Janitra Admin - Data Fasilitas';
        $query = $this->data_fasilitas_model->get($id);

        if ($query->num_rows() > 0) {
            $data1['row'] = $query->row();
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('admin/content/data/edit_fasilitas', $data1);
            $this->load->view('templates/admin_footer');
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('data_fasilitas')."';</script>";
        }
    }
}
