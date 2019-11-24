<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model(['data_destination_model', 'detail_destination_model','Blog_model']);
    }

    public function index()
    {
        $data['judul'] = 'Janitra Tour Organizer';

        $destinasi = $this->data_destination_model->get();
        $objek_wisata = $this->detail_destination_model->get();
        $blog = $this->data_destination_model->get_all_berita()->num_rows();
        $data = $this->data_destination_model->get_all_berita();

        $data1 = [
            'destinasi' => $destinasi,
            'objek_wisata' => $objek_wisata,
            'blog' => $blog
            // 'data' => $data
        ];

        $this->load->view('templates/home_header', $data);
        $this->load->view('auth/home', $data1);
        $this->load->view('templates/home_footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        // untuk direct ketika user sudah melakukan login dan belum logout
        if ($this->session->userdata('Status_Login') == true) {
            redirect(base_url('customer'));
        }

        $data = array();
        $error = empty($this->session->flashdata('error')) ? "" : $this->session->flashdata('error');
        $data['error'] = $error;

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
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
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'name' => $user['name'],
                        'id_roll' => $user['id_roll'],
                        'Status_Login' => true
                    ];
                    $this->session->set_userdata($data);
                    redirect('customer');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('auth/login');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth/login');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has been registered!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|trim');
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            ['matches' => 'Password dont match!', 'min_length' => 'Password to short']
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registrasi');
            $this->session->set_flashdata('error', 'Registrasi Gagal!');
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_roll' => 2,
                'date_created' => time(),
                'is_actived' => 1

            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'Registrasi Berhasil!');
            redirect('Auth/login');

            // echo "<script>alert('Congratulations, your account has been created!'); window.location='".site_url('customer')."';</script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function listKota()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $id_destinasi = $this->input->post('id_destinasi');
    
        $objek_wisata = $this->detail_destination_model->get_destinasi($id_destinasi);
    
        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "";
    
        foreach($objek_wisata as $data){
        $lists .= "<option value='".$data->id_detil_destinasi."'>".$data->destinasi_wisata."</option>"; // Tambahkan tag option ke variabel $lists
        }
    
        $callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }
}