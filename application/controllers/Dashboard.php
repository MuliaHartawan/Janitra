<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session', 'form_validation');
        $this->load->model('data_admin_model');
        
    }

    public function index()
    {
        $data1['title'] = 'Janitra Admin - Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('admin'));
        }

        $data = array();
        $error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
        $data['error'] = $error;

        $this->load->view('templates/admin_header', $data1);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar', $data, $data2);
        $this->load->view('admin/dashboard', $data2);
        $this->load->view('templates/admin_footer');
    }
}
