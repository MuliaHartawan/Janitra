<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model('pesan_model');
    }

    public function index()
    {
        $from = $this->input->post('from');
        $name = $this->pesan_model->get_city_name($from)->row();
        $start = $this->input->post('start');
        $return = $this->input->post('return');
        $berangkat = date('d F Y', strtotime($start));
        $adults = $this->input->post('adults');
        $pulang = date('d F Y', strtotime($return));
        $phone = "6285746060446";

        $message = "Hallo Janitra, Saya ingin ke $name->kota. Berangkat tanggal $berangkat sampai $pulang dengan jumlah penumpang $adults";

        $url = "https://api.whatsapp.com/send?phone=".$phone."&text=".$message;
        return redirect($url);
    }

    public function call()
    {
        $phone = "6285746060446";

        $message = "Hallo Janitra, Saya ingin memesan paket wisata liburan";

        $url = "https://api.whatsapp.com/send?phone=".$phone."&text=".$message;
        return redirect($url);
    }
}