<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('Jemaat_model');
	}

	public function index()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'My Profile';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/index');
		$this->load->view('templates/footer');
	}



	public function edit()
	{
		$data['title'] = 'Edit Profile';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		// $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis  kelamin', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
		
		if($this->form_validation->run() == false) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/edit', $data);
		$this->load->view('templates/footer');
		}else{
			// $nama 			= htmlspecialchars($this->input->post('nama', $nama));
			$jenis_kelamin	= htmlspecialchars($this->input->post('jenis_kelamin', $jenis_kelamin));
			$tanggal_lahir 	= htmlspecialchars($this->input->post('tanggal_lahir'));
			$alamat 		= htmlspecialchars($this->input->post('alamat'));
			$status 		= htmlspecialchars($this->input->post('status'));
			$pekerjaan 		= htmlspecialchars($this->input->post('pekerjaan'));
			$facebook 		= htmlspecialchars($this->input->post('facebook'));
			$telepon 		= htmlspecialchars($this->input->post('telepon'));
			$email 			= $this->input->post('email');

			//cek jika ada gambar
			$upload_image = $_FILES['image']['name'];

			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = '2048';
				$config['upload_path']   = 'asset/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')) {

					//cek nama gambar untuk di ganti
					$old_image = $data['jemaat']['image'];
					if($old_image !='default.jpg') {
						unlink(FCPATH . 'asset/img/profile/' . $old_image);
					}

					//simpan nama sesuai nama gambar
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else{
					// echo $this->upload->display_errors();
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Ukuran Gambar Minimal 2 MB'. $this->upload->display_errors().'</div>');
						redirect('jemaat');	
				}
			}

			// $this->db->set('nama', $nama);
			$this->db->set('jenis_kelamin', $jenis_kelamin);
			$this->db->set('tanggal_lahir', $tanggal_lahir);
			$this->db->set('alamat', $alamat);
			$this->db->set('status', $status);
			$this->db->set('pekerjaan', $pekerjaan);
			$this->db->set('facebook', $facebook);
			$this->db->set('telepon', $telepon);
			$this->db->where('email', $email);
			$this->db->update('jemaat');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Profile Berhasil!</div> ');
			redirect('jemaat');
		}
	}

	public function anaksm()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$nij = $this->session->userdata('nij');
		$data['anak'] = $this->Jemaat_model->getAnak();

		if( $this->input->post('keyword') ){
			$data['anak'] = $this->Jemaat_model->searchDataAnaksm();//ini function pencarian
		}
				
		$data['title'] = 'Data Anak';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/anak', $data);
		$this->load->view('templates/footer');
	}

	public function detailanaksm()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$nij = $this->session->userdata('nij');
		$data['anak'] = $this->Jemaat_model->getAnak();

		if( $this->input->post('keyword') ){
			$data['anak'] = $this->Jemaat_model->searchDataAnaksm();//ini function pencarian
		}
				
		$data['title'] = 'Data Anak';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/anak', $data);
		$this->load->view('templates/footer');
	}

	public function tambahanaksm()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
				
		$data['title'] = 'Tambah Data Anak';

		$data['nia'] = $this->Jemaat_model->BuatNia();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
		// $data['gender'] = $this->Jemaat_model->getAllGender();
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required|numeric');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('nij_ayah', 'Nij Ayah', 'required');
		$this->form_validation->set_rules('nij_ibu', 'Nij Ibu', 'required');


		if( $this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/tanak', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Jemaat_model->tambahAnaksm();
			$this->session->set_flashdata('flash', 'Success');
			redirect('jemaat/anaksm');
		}
	}

	public function deleteanaksm($id)
	{
		$this->Jemaat_model->deleteDataAnaksm($id);
		$this->session->set_flashdata('flash', 'DELETE Success');
		redirect('jemaat/anaksm');
	}

	

	public function editanaksm($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Edit Data Anak';
		$data['anak'] = $this->Jemaat_model->getAnakById($id);

		$this->form_validation->set_rules('nia', 'N.i.a', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
		// $data['gender'] = $this->Jemaat_model->getAllGender();
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required|numeric');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');

		if( $this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('jemaat/editanak', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Jemaat_model->editAnaksm();
			$this->session->set_flashdata('flash', 'Edit Success');
			redirect('jemaat/anaksm');
		}
	}



}
