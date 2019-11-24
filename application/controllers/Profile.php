<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('profile_model');
    }

    public function index()
    {
        $data1['title'] = 'Janitra - User Profile';
        $data2['title'] = 'User Profile';
        $data3['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('auth/login'));
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check|is_unique[user.email]', [
            'is_unique' => 'This email has been registered!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/customer_header', $data1);
            $this->load->view('templates/customer_sidebar');
            $this->load->view('templates/customer_topbar', $data2, $data3);
            $this->load->view('auth/profile', $data3);
            $this->load->view('templates/customer_footer');
        }
    }

    public function process()
    {
        if (isset($_POST['edit'])) {
            $post = $this->input->post(null, TRUE);
            $this->profile_model->edit_data($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        echo "<script>window.location='".site_url('profile')."';</script>";
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

    public function change_password()
    {
        $data1['title'] = 'Janitra - User Profile';
        $data2['title'] = 'User Profile';
        $data3['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('auth/login'));
        }

        $this->form_validation->set_rules('current_password', 'Password Saat Ini', 'trim|required');
        $this->form_validation->set_rules('new_password', 'Password Baru', 'trim|required|min_length[5]|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password Baru', 'trim|required|min_length[5]|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/customer_header', $data1);
            $this->load->view('templates/customer_sidebar');
            $this->load->view('templates/customer_topbar', $data2, $data3);
            $this->load->view('auth/change_password', $data3);
            $this->load->view('templates/customer_footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            if (!password_verify($current_password, $data3['user']['password'])) {
                $this->session->set_flashdata('danger', 'Password saat ini salah!');
                redirect('profile/change_password');
            } else {
                if ($new_password == $current_password) {
                    $this->session->set_flashdata('danger', 'Password baru tidak boleh sama dengan password saat ini!');
                    redirect('profile/change_password');
                } else {
                    //password sudah ok
                    $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->where('id_user', $this->session->userdata('id_user'));
                    $this->db->update('user', $data);

                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    redirect('profile');
                }
            }
        }
    }
}
