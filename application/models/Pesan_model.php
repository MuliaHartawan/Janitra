<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_city_name($from)
    {
        $this->db->from('destinasi');
        $this->db->where('id_destinasi = ', $from);

        return $this->db->get();
    }
}