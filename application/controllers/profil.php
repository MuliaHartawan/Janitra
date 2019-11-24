<?php
class Profil extends CI_Controller{
    function __construct()
    {
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
	}
    function index()
    {
        $this->load->view('auth/profile_company');
        $this->load->view('templates/home_footer');
    }
}