<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function edit_data($post)
    {
        $data['name'] = htmlspecialchars($post['name']);
        $data['email'] = htmlspecialchars($post['email']);
        $data['no_telp'] = htmlspecialchars($post['no_telp']);
        $data['id_roll'] = 2;
        $data['is_actived'] = 1;

        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->update('user', $data);
    }
}