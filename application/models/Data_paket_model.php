<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_paket_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($id = null)
    {
        $this->db->select('paket_wisata.*, destinasi.kota as kota, user.name as nama_customer');
        $this->db->from('paket_wisata');
        $this->db->join('destinasi', 'destinasi.id_destinasi = paket_wisata.id_destinasi');
        $this->db->join('user', 'user.id_user = paket_wisata.id_user');
        if ($id != null) {
            $this->db->where('id_paket_wisata', $id);
        }
        $this->db->order_by('id_paket_wisata', 'ASC');
        return $this->db->get();
    }

    function get_objek($data)
    {
        $this->db->from('objek_paket');
        $this->db->join('detail_destinasi', 'objek_paket.id_detil_destinasi = detail_destinasi.id_detil_destinasi');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = objek_paket.id_paket_wisata');

        $this->db->where('paket_wisata.id_paket_wisata', $data);
        
        return $this->db->get();
    }

    function get_fasilitas($data)
    {
        $this->db->from('fasilitas_paket');
        $this->db->join('fasilitas', 'fasilitas_paket.id_fasilitas = fasilitas.id_fasilitas');
        $this->db->join('paket_wisata', 'paket_wisata.id_paket_wisata = fasilitas_paket.id_paket_wisata');

        $this->db->where('paket_wisata.id_paket_wisata', $data);
        
        return $this->db->get();
    }

    function tambah_data()
    {
        $data = [
            'kode_paket' => strtoupper(uniqid('JN')),
            'nama_paket' => htmlspecialchars($this->input->post('nama_paket', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'id_destinasi' => $this->input->post('destinasi', true),
            'jadwal_berangkat' => $this->input->post('jadwal_berangkat'),
            'jadwal_pulang' => $this->input->post('jadwal_pulang'),
            'banyak_penumpang' => $this->input->post('banyak_penumpang', true),
            'biaya' => $this->input->post('biaya', true),
            'id_user' => htmlspecialchars($this->input->post('nama_customer', true)),
            'id_customer' => 1,
            'id_status_booking' => 1
        ];
        
        $this->db->insert('paket_wisata', $data);

        //mendapatkan id paket
		$insert_id = $this->db->insert_id();
        
        $objek_wisata = $this->input->post('objek_wisata', true);
		foreach($objek_wisata as $row){
			$data = array(
				  'id_paket_wisata' => $insert_id,
				  'id_detil_destinasi' => $row
				);
			$this->db->insert('objek_paket', $data);
        }
        
        $fasilitas = $this->input->post('fasilitas', true);
		foreach($fasilitas as $row){
			$data = array(
				  'id_paket_wisata' => $insert_id,
				  'id_fasilitas' => $row
				);
			$this->db->insert('fasilitas_paket', $data);
		}
    }

    public function hapus($id)
    {
        $this->db->where('id_paket_wisata', $id);
        $this->db->delete('paket_wisata');
    }

    function edit_data($post)
    {
        $objek_wisata = implode(', ',$this->input->post('objek_wisata', true));
        $fasilitas = implode(', ',$this->input->post('fasilitas', true));

        $data = [
            'nama_paket' => htmlspecialchars($this->input->post('nama_paket', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'id_destinasi' => $this->input->post('destinasi', true),
            'destinasi_wisata' => $objek_wisata,
            'nama_fasilitas' => $fasilitas
        ];

        $this->db->where('id_paket_wisata', $post['id']);
        $this->db->update('paket_wisata', $data);
    }
}
