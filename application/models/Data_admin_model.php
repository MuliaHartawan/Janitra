<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function ambil_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_roll = 1');
        return $this->db->get();
    }

    function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        return $this->db->get();
    }

    function tambah_data()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'id_roll' => 1,
            'date_created' => time(),
            'is_actived' => 1

        ];

        $this->db->insert('user', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    function edit_data($post)
    {
        $data['name'] = htmlspecialchars($post['name']);
        $data['email'] = htmlspecialchars($post['email']);
        $data['no_telp'] = htmlspecialchars($post['no_telp']);
        if (!empty($post['password'])) {
            $data['password'] = htmlspecialchars($post['password']);
        }
        $data['id_roll'] = 1;
        $data['date_created'] = time();
        $data['is_actived'] = 1;

        $this->db->where('id_user', $post['id']);
        $this->db->update('user', $data);
    }
}
