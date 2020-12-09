<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		is_logged_in();

		$this->load->model('Lister_model');
	}


	public function index()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['count'] = $this->Lister_model->getCountjemaat();
		$data['countb'] = $this->Lister_model->getCountbaptis();
		$data['countn'] = $this->Lister_model->getCountnikah();
		$data['countAllJ'] = $this->Lister_model->getCountAlljemaat();
		
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	public function role()
	{
		$data['title'] = 'Role';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();
		
		$data['role'] = $this->db->get('jemaat_role')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}
	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';

		$data['jemaat'] = $this->db->get_where('jemaat', ['email'=>
		$this->session->userdata('email')])->row_array();
		
		$data['role'] = $this->db->get_where('jemaat_role', ['id' => $role_id])->row_array();
		$this->db->where('id !=', 1);

		$data['menu'] = $this->db->get('jemaat_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

//menambah atau menghapus dari ajax 
	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('jemaat_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('jemaat_access_menu', $data);
		}else {
			$this->db->delete('jemaat_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed</div> ');
	}
}