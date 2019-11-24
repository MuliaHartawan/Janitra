<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->model('login_admin');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        // untuk direct ketika user sudah melakukan login dan belum logout
        if ($this->session->userdata('Status_Login') == true) {
            redirect(base_url('dashboard'));
        }

        $data = array();
        $error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
        $data['error'] = $error;

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Janitra - Login';
            $this->load->view('templates/adminlogin_header', $data);
            $this->load->view('admin/login');
            $this->load->view('templates/adminlogin_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_actived'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    if ($user['id_roll'] == 1) {
                        $data = [
                            'email' => $user['email'],
                            'name' => $user['name'],
                            'id_roll' => $user['id_roll'],
                            'Status_Login' => true
                        ];

                        $this->session->set_userdata($data);

                        redirect('dashboard');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            ['matches' => 'Password dont match!', 'min_length' => 'Password to short']
        );
        $this->form_validation->set_rules('password2', 'Password', 'trim|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Janitra - Registrasi';
            $this->load->view('templates/adminlogin_header', $data);
            $this->load->view('admin/registrasi');
            $this->load->view('templates/adminlogin_footer');
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_roll' => 1,
                'date_created' => time(),
                'is_actived' => 1

            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login</div>');
            redirect('admin');
        }
    }

    public function logout()
    {
        // $this->session->unset_userdata('email');
        // $this->session->unset_userdata('id_roll');

        $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('admin');
    }

    
}
