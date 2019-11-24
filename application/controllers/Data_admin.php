<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('data_admin_model');
    }

    public function index()
    {
        $data1['title'] = 'Janitra Admin - Data Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['datauser'] = $this->data_admin_model->ambil_data()->result();


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
        $this->load->view('admin/content/data/data_admin', $data2);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_admin()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[passconf]',
            ['matches' => 'Password dont match!', 'min_length' => 'Password to short']
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|trim|min_length[5]|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Janitra Admin - Data Admin';

            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('admin/content/data/tambah_admin');
            $this->load->view('templates/admin_footer');
        } else {
            $result = $this->data_admin_model->tambah_data();
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            echo "<script>window.location='".site_url('data_admin')."';</script>";
        }
    }

    public function hapus($id)
    {
        $this->data_admin_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='".site_url('data_admin')."';</script>";
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');

        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[passconf]', ['matches' => 'Password dont match!', 'min_length' => 'Password to short']);
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|min_length[5]|matches[password]');
        }
        
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|min_length[5]|matches[password]');
        }

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Janitra Admin - Data Admin';
            $query = $this->data_admin_model->get($id);

            if ($query->num_rows() > 0) {
                $data1['row'] = $query->row();
                $this->load->view('templates/admin_header', $data);
                $this->load->view('templates/admin_sidebar');
                $this->load->view('templates/admin_topbar');
                $this->load->view('admin/content/data/edit_admin', $data1);
                $this->load->view('templates/admin_footer');
            } else {
                echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('data_admin')."';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->data_admin_model->edit_data($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            echo "<script>window.location='".site_url('data_admin')."';</script>";
        }
    }

    function email_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE email = '$post[email]' AND id_user != $post[id]");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('email_check', 'This {field} has already registered!');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
