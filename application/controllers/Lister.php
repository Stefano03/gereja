<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lister extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('Lister_model');
		$this->load->model('Jemaat_model');
	}

	public function index()
	{
		$data['title'] = 'List Data Jemaat';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$config['base_url'] = 'http://localhost/stefano/lister/index';//link yang diberikan pagination
		$config['total_rows'] = $this->Lister_model->countAllJemaat();//jumlah total database dalam tabel

		$config['per_page'] = 15;//jumlah baris yang ditampilkan
		$config['num_links'] = 4;//jumlah pagination kiri kanan

		//styleing
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item">';
		$config['cur_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		//initilize
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);//mulai ambil data mempengaruhi nomor pada database

		$data['jemaat'] = $this->Lister_model->getJemaat($config['per_page'], $data['start']);

		// $data['jemaat'] = $this->Lister_model->getAllJemaat();

		if( $this->input->post('keyword') ){
			$data['jemaat'] = $this->Jemaat_model->searchDataJemaat();//ini function pencarian
		}
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		// $this->load->view('templates/topbar' $data);
		$this->load->view('lister/index', $data);
		// $this->load->view('templates/footer');
	}

	public function getJemaatById($id)
	{
		return $this->db->get_where('jemaat', ['id' => $id])->row_array();
	}

		
	public function deletejemaat($id)
	{
		$this->Lister_model->deleteDataJemaat($id);
		$this->session->set_flashdata('flash', 'Success');
		redirect('lister');
	}
	

	public function editjemaat($id = null)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Edit Data Jemaat';
		$data['jemaat'] = $this->Lister_model->getJemaatById($id);

		$this->form_validation->set_rules('nij', 'N.i.j', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin');
		// $data['gender'] = $this->Jemaat_model->getAllGender();
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('status', 'Status');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan');
		$this->form_validation->set_rules('facebook', 'Facebook', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('is_active', 'Status Active', 'required');

		if( $this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/editjmt', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Lister_model->editDataJemaat();
			$this->session->set_flashdata('flash', 'Edit Success');
			redirect('lister');
		}
	}

	public function anak()
	{
		$data['title'] = 'List Data Anak Sekolah Minggu';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$config['base_url'] = 'http://localhost/stefano/lister/anak';//link yang diberikan pagination
		$config['total_rows'] = $this->Lister_model->countAllAnak();//jumlah total database dalam tabel

		$config['per_page'] = 10;//jumlah baris yang ditampilkan
		$config['num_links'] = 4;//jumlah pagination kiri kanan

		//styleing
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item">';
		$config['cur_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		//initilize
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);//mulai ambil data mempengaruhi nomor pada database

		$data['anak'] = $this->Lister_model->getAnak($config['per_page'], $data['start']);

		// $data['anak'] = $this->Lister_model->getAllJemaat();

		if( $this->input->post('keyword') ){
			$data['anak'] = $this->Lister_model->searchDataAnak();//ini function pencarian
		}
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/anak', $data);
		$this->load->view('templates/footer');
	}

	public function deleteanak($id)
	{
		$this->Jemaat_model->deleteDataAnaksm($id);
		$this->session->set_flashdata('flash', 'DELETE Success');
		redirect('lister/anak');
	}


	public function admineditanak($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Edit Data Anak Sekolah Minggu';
		$data['anak'] = $this->Jemaat_model->getAnakById($id);

		$this->form_validation->set_rules('nia', 'N.i.a', 'required');
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
		$this->load->view('lister/admineditanak', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Jemaat_model->editAnaksm();
			$this->session->set_flashdata('flash', 'Edit Success');
			redirect('lister/anak');
		}
	}

	public function nikah()
	{
		$data['title'] = 'Data Pernikahan';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$config['base_url'] = 'http://localhost/stefano/lister/nikah';//link yang diberikan pagination
		$config['total_rows'] = $this->Lister_model->countAllNikah();//jumlah total database dalam tabel

		$config['per_page'] = 10;//jumlah baris yang ditampilkan
		$config['num_links'] = 4;//jumlah pagination kiri kanan

		//styleing
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item">';
		$config['cur_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		//initilize
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);//mulai ambil data mempengaruhi nomor pada database

		$data['nikah'] = $this->Lister_model->getNikah($config['per_page'], $data['start']);

		// $data['anak'] = $this->Lister_model->getAllJemaat();

		if( $this->input->post('keyword') ){
			$data['nikah'] = $this->Lister_model->searchDataNikah();//ini function pencarian
		}
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/nikah', $data);
		$this->load->view('templates/footer');
	}

	public function editnikah($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Edit Data Pernikahan';

		$data['nikah'] = $this->Lister_model->getNikahById($id);

		$this->form_validation->set_rules('nij_laki', 'Nij', 'required');
		$this->form_validation->set_rules('laki_lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tanggal_lahir_laki', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('ayah_laki', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu_laki', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nij_wanita', 'Nij', 'required');
		$this->form_validation->set_rules('wanita_lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tanggal_lahir_wanita', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('ayah_wanita', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu_wanita', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('saksi1', 'Nama Lengkap Saksi', 'required');
		$this->form_validation->set_rules('saksi2', 'Nama Lengkap Saksi', 'required');
		$this->form_validation->set_rules('dihadapan', 'Dihadapan', 'required');
		$this->form_validation->set_rules('dbkah', 'D B K A', 'required');
		$this->form_validation->set_rules('tanggal_nikah', 'Tanggal Nikah', 'required');
		$this->form_validation->set_rules('yang_menyalin', 'Yang Menyalin', 'required');
		$this->form_validation->set_rules('status', 'Status Active', 'required');
		

		if( $this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/editnikah', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Lister_model->editNikah();
			$this->session->set_flashdata('flash', 'Edit Success');
			redirect('Lister/nikah');
		}
	}


	public function deletenikah($id)
	{
		$this->Lister_model->deleteDataNikah($id);
		$this->session->set_flashdata('flash', 'DELETE Success');
		redirect('lister/nikah');
	}


	public function baptis()
	{
		$data['title'] = 'List Data Baptis';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();

		$config['base_url'] = 'http://localhost/stefano/lister/baptis';//link yang diberikan pagination
		$config['total_rows'] = $this->Lister_model->countAllBaptis();//jumlah total database dalam tabel

		$config['per_page'] = 10;//jumlah baris yang ditampilkan
		$config['num_links'] = 4;//jumlah pagination kiri kanan

		//styleing
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item">';
		$config['cur_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['attributes'] = array('class' => 'page-link');

		//initilize
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);//mulai ambil data mempengaruhi nomor pada database

		$data['baptis'] = $this->Lister_model->getBaptis($config['per_page'], $data['start']);

		// $data['anak'] = $this->Lister_model->getAllJemaat();

		if( $this->input->post('keyword') ){
			$data['baptis'] = $this->Lister_model->searchDataBaptis();//ini function pencarian
		}
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/baptis', $data);
		$this->load->view('templates/footer');
	}

	public function editbaptis($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['title'] = 'Edit Data Baptis';

		$data['baptis'] = $this->Lister_model->getBaptisById($id);

		$this->form_validation->set_rules('nij', 'N.i.j', 'required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('tgl_baptis', 'Tanggal Baptis', 'required');
		$this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jemaat', 'Jemaat', 'required');
		$this->form_validation->set_rules('pembaptis', 'Pembaptis', 'required');
		$this->form_validation->set_rules('status', 'Status Active');
		

		if( $this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lister/editbaptis', $data);
		$this->load->view('templates/footer');
		}else {
			
			$this->Lister_model->editBaptis();
			$this->session->set_flashdata('flash', 'Edit Success');
			redirect('Lister/baptis');
		}
	}


	public function deletebaptis($id)
	{
		$this->Lister_model->deleteDataBaptis($id);
		$this->session->set_flashdata('flash', 'DELETE Success');
		redirect('lister/baptis');
	}

}
