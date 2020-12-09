<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('Menu_model', 'menu');//membuat nama alias pada model
	}

public function index()
	{
		$data['title'] = 'Menu Manajemen';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get_where('jemaat_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == false){
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		}else {
			$this->db->insert('jemaat_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added</div> ');
			redirect('menu');
		}

	}


	public function submenu()
	{
		$data['title'] = 'SubMenu Manajemen';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$data['subMenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('jemaat_menu')->result_array();//manipulasi


		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		
		if($this->form_validation->run() == false) {
		
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		}else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('jemaat_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu Baru Ditambahkan</div> ');
			redirect('menu/submenu');
		}
	}
	

	public function buat_renungan()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$data['kode'] = $this->menu->BuatKodeRenungan();

		$this->form_validation->set_rules('title', 'Title', 'trim|required|is_unique[renungan.title]',['is_unique' => 'Title Sudah Ada!']);

		$this->form_validation->set_rules('poster', 'Poster', 'trim|required|is_unique[renungan.poster]',['is_unique' => 'Poster Sudah Ada!']);
		
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[renungan.judul]',['is_unique' => 'Judul Sudah Ada!']);
		
		$this->form_validation->set_rules('content', 'Content', 'trim|required|is_unique[renungan.content]',['is_unique' => 'Content Sudah Ada!']);

		if($this->form_validation->run() == FALSE)
		{
		$data['title'] = 'Buat Renungan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('renungan/buat_renungan', $data);
		$this->load->view('templates/footer');
		}
		else
			{
				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']      = '2048';
					$config['upload_path']   = 'asset/image/img/';
					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$new_image = $this->upload->data('file_name');
						$this->db->set('gambar', $new_image);
					}else
					{
						$this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Ukuran Gambar Minimal 2 MB'. $this->upload->display_errors().'</div>');
						redirect('menu/buat_renungan');	
					}
				}

			$this->menu->tambahRenungan();
			$this->session->set_flashdata('flash', ' Berhasil Di Upload');
			redirect('menu/buat_renungan');		
		}
	}


}
