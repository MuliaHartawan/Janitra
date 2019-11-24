<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
        $this->load->library('upload');
	}
	function index(){
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('admin/content/blog/blog');
        $this->load->view('templates/admin_footer');
	}

	function simpan_post(){
		$config['upload_path'] = './assets/img/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/img/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/img/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');

				$this->blog_model->simpan_berita($jdl,$berita,$gambar);
				redirect('blog');
		}else{
			redirect('blog/tambah_blog');
	    }
	                 
	    }else{
			redirect('blog/tambah_blog');
		}
				
	}

	function lists(){
		$x['data']=$this->m_berita->get_all_berita();
		$this->load->view('v_post_list',$x);
	}

	function view(){
		$kode=$this->uri->segment(3);
		$x['data']=$this->m_berita->get_berita_by_kode($kode);
		$this->load->view('v_post_view',$x);
	}

	function tambah_blog(){
		$this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
		$this->load->view('admin/content/blog/tambah_blog');
	}
}