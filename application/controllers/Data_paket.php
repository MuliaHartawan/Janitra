<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_paket extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model(['data_paket_model', 'data_destination_model', 'detail_destination_model', 'data_fasilitas_model', 'data_customer_model']);
    }

    public function index()
    {
        $data1['title'] = 'Janitra Admin - Data Paket Wisata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['row'] = $this->data_paket_model->get()->result();

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
        $this->load->view('admin/content/data/data_paket', $data2);
        $this->load->view('templates/admin_footer');
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

    public function tambah_paket()
    {
        $data['title'] = 'Janitra Admin - Data Paket Wisata';

        $destinasi = $this->data_destination_model->get();
        $fasilitas = $this->data_fasilitas_model->get();
        $objek_wisata = $this->detail_destination_model->get();
        $customer = $this->data_customer_model->ambil_data();

        $data1 = [
            'destinasi' => $destinasi,
            'objek_wisata' => $objek_wisata,
            'fasilitas' => $fasilitas,
            'customer' => $customer
        ];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('admin/content/data/tambah_paket', $data1);
    }

    public function process()
    {
        if (isset($_POST['add'])) {
            $result = $this->data_paket_model->tambah_data();
        } else if (isset($_POST['edit'])) {
            $post = $this->input->post(null, TRUE);
            $this->data_paket_model->edit_data($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        echo "<script>window.location='".site_url('data_paket')."';</script>";
    }

    public function hapus($id)
    {
        $this->data_paket_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        echo "<script>window.location='".site_url('data_paket')."';</script>";
    }

    public function edit($id)
    {
        $data['title'] = 'Janitra Admin - Data Paket Wisata';
        $query = $this->data_paket_model->get($id);

        if ($query->num_rows() > 0) {
            $paket = $query->row();

            $destinasi = $this->data_destination_model->get();
            $fasilitas = $this->data_fasilitas_model->get();
            $objek_wisata = $this->detail_destination_model->get();
            $customer = $this->data_customer_model->ambil_data();

            $data1 = [
                'row' => $paket,
                'destinasi' => $destinasi,
                'objek_wisata' => $objek_wisata,
                'fasilitas' => $fasilitas,
                'customer' => $customer
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('admin/content/data/edit_paket', $data1);
            
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('data_paket')."';</script>";
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Janitra Admin - Detail Paket Wisata';
        $query = $this->data_paket_model->get($id);

        if ($query->num_rows() > 0) {
            $data1['row'] = $query->row();
            $data1['objek'] = $this->data_paket_model->get_objek($id)->result();
            $data1['fasilitas'] = $this->data_paket_model->get_fasilitas($id)->result();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('admin/content/transaksi/detail_paket', $data1);
            $this->load->view('templates/admin_footer');
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('booking')."';</script>";
        }
    }
}
