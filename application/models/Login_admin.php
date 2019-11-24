<?php

class Login_admin extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function cek_autentikasi($email, $password, $id_roll)
  {
    $result = array();
    $result_user = false;

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id_roll = 1', $id_roll);
    $this->db->where('email', $email);
    $this->db->where('password', $password);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $result["data_user"] = $query->row();
      $result["valid_user"] = true;
    } else {
      $result["data_user"] = array();
      $result["valid_user"] = false;
    }
    return $result;
  }
}
