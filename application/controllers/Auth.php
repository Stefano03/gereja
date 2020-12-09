<?php 
	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
	}

	public function index()
	{	
		if ($this->session->userdata('email')) {//agar tidak bisa login tanpa memasukkan pasword dan email
	 		redirect('jemaat');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if( $this->form_validation->run() == false) {
		$data['judul'] = 'Page Login';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}else
		//validasinya success
		$this->_login();

	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		 $jemaat = $this->db->get_where('jemaat', ['email' => $email])->row_array();
		 	//jika usernya ada
		 if( $jemaat){
		 	//jika jemaat aktif
		 	if($jemaat['is_active'] == 1) {

		 		//cek password
		 		if(password_verify($password, $jemaat['password'])) {
		 			$data = [
		 				'email' => $jemaat['email'],
		 				'role_id' => $jemaat['role_id']
		 			];

		 			$this->session->set_userdata($data);
		 			if($jemaat['role_id']== 1) {
		 				redirect('admin');
		 			}else{
		 			redirect('jemaat');
		 			}

		 		}else{
		 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div> ');
		 		}

		 	}else{
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated</div> ');
		 	}

		 }else{
		 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not resgistered</div> ');
		 }
	}



	public function register()
	{
		if ($this->session->userdata('email')) {//agar tidak bisa login tanpa memasukkan pasword dan email
	 		redirect('auth');
		}

		
		$data['nij'] = $this->Menu_model->BuatNij();
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		// $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'trim|required');
		// $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		// $this->form_validation->set_rules('status', 'Status', 'trim|required');
		// $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required|is_unique[jemaat.telepon]', ['is_unique' => 'Nomor Telepon Sudah Digunakan!']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[jemaat.email]', ['is_unique' => 'Email Sudah Digunakan!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!'
	]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if( $this->form_validation->run() == false){

		$data['judul'] = 'Page Registration';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/register');
		$this->load->view('templates/auth_footer');
	}else{
		
			$data = [
				'nij'           => htmlspecialchars($this->input->post('nij', true)),
				'nama'			=> htmlspecialchars($this->input->post('nama', true)),
				// 'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				// 'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
				'alamat' 		=> htmlspecialchars($this->input->post('alamat', true)),
				// 'status' 		=> htmlspecialchars($this->input->post('status', true)),
				// 'pekerjaan'		=> htmlspecialchars($this->input->post('pekerjaan', true)),
				'facebook' 		=> htmlspecialchars($this->input->post('facebook', true)),
				'telepon'		=> htmlspecialchars($this->input->post('telepon', true)),
				'email' 		=> htmlspecialchars($this->input->post('email', true)),
				'image' 		=> 'default.jpg',
				'password' 		=> password_hash( $this->input->post('password1'), 
				PASSWORD_DEFAULT),
				'role_id' 		=> 2,
				'is_active' 	=> 0,
				'bergabung' 	=> time()
			];

			$this->db->insert('jemaat', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih Telah Registrasi. Dan Mohon Tunggu Aktivasi Dari Admin Kami</div> ');
			redirect('auth');
		}

	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Keluar</div> ');
			redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}