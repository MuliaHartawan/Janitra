<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
    }

    public function index()
    {
        $data1['title'] = 'Janitra - Dashboard';
        $data2['title'] = 'Dashboard';
        
        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('auth/login'));
        }
        
        $this->load->view('templates/customer_header', $data1);
        $this->load->view('templates/customer_sidebar');
        $this->load->view('templates/customer_topbar', $data2);
        $this->load->view('auth/dashboard');
        $this->load->view('templates/customer_footer');
    }
}
