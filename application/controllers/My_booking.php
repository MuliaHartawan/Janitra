<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'session');
        $this->load->library('session');
        $this->load->model(['booking_model', 'my_booking_model', 'data_paket_model', 'pembayaran_model']);
    }

    public function index()
    {
        $data1['title'] = 'Janitra - My Booking';
        $data2['title'] = 'My Booking';

        $data['row'] = $this->my_booking_model->get()->result();

        // untuk direct ketika user sudah melakukan logout dan belum logout
        if ($this->session->userdata('Status_Login') == null) {
            redirect(base_url('auth/login'));
        }

        $this->load->view('templates/customer_header', $data1);
        $this->load->view('templates/customer_sidebar');
        $this->load->view('templates/customer_topbar', $data2);
        $this->load->view('auth/my_booking', $data);
        $this->load->view('templates/customer_footer');
    }

    public function detail($id)
    {
        $data1['title'] = 'Janitra - My Booking';
        $data2['title'] = 'My Booking';
        $query = $this->data_paket_model->get($id);

        if ($query->num_rows() > 0) {
            $data['row'] = $query->row();
            $data['objek'] = $this->data_paket_model->get_objek($id)->result();
            $data['fasilitas'] = $this->data_paket_model->get_fasilitas($id)->result();

            $this->load->view('templates/customer_header', $data1);
            $this->load->view('templates/customer_sidebar');
            $this->load->view('templates/customer_topbar', $data2);
            $this->load->view('auth/detail_paket', $data);
            $this->load->view('templates/customer_footer');
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('my_booking')."';</script>";
        }
    }

    public function confirm($id)
    {
        $data1['title'] = 'Janitra - My Booking';
        $data2['title'] = 'My Booking';
        $query = $this->booking_model->get($id);

        if ($query->num_rows() > 0) {
            $data['row'] = $query->row();

            $this->load->view('templates/customer_header', $data1);
            $this->load->view('templates/customer_sidebar');
            $this->load->view('templates/customer_topbar', $data2);
            $this->load->view('auth/konfirmasi', $data);
            $this->load->view('templates/customer_footer');
        } else {
            echo "<script>alert('Data tidak ditemukan'); window.location='".site_url('my_booking')."';</script>";
        }
    }

    public function process()
    {
        if (isset($_POST['add'])) {
            $config['upload_path']          = './uploads/pembayaran/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['file_name']            = 'pembayaran-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_bukti')) {
                $post['gambar_bukti'] = $this->upload->data('file_name');
                $this->pembayaran_model->tambah_data($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                echo "<script>window.location='".site_url('my_booking')."';</script>";
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('my_booking/confirm');
            }
        }
    }

    public function cetak($id)
    {
        $data1['title'] = 'Janitra - My Booking';

        $data['row'] = $this->my_booking_model->get_booking($id)->result_array();

        $this->load->view('cetak_tiket', $data);
    }
}