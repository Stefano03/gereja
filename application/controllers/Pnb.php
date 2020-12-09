<?php 
	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

class Pnb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('Lister_model');
		
	}

	public function getautocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Lister_model->searchJemaat($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nij_laki;
                echo json_encode($arr_result);
            }
        }
    }

	public function index()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		// $data['nika'] = $this->db->get_where('jemaat')->result_array(); //manipulasi
		$data['nikah'] = $this->Lister_model->getAllNikah();
		$data['title'] = 'Data Pernikahan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/index', $data);
		$this->load->view('templates/footer');
	}

	public function daftarnikah()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		$data['kode'] = $this->Lister_model->BuatKode();
		$this->form_validation->set_rules('nij_laki', 'N.i.j', 'trim|required|is_unique[nikah.nij_laki]', ['is_unique' => 'N.i.j Sudah Terdaftar!']);
		$this->form_validation->set_rules('laki_lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tanggal_lahir_laki', 'Tanggal lahir', 'required');
		// $this->form_validation->set_rules('ayah_laki', 'Nama Ayah', 'required');
		$data['ayah'] = $this->Lister_model->getAllBaptis();
		$this->form_validation->set_rules('ibu_laki', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nij_wanita', 'N.i.j', 'trim|required|is_unique[nikah.nij_wanita]', ['is_unique' => 'N.i.j Sudah Terdaftar!']);
		$this->form_validation->set_rules('wanita_lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tanggal_lahir_wanita', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('ayah_wanita', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu_wanita', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('saksi1', 'Nama Lengkap Saksi', 'required');
		$this->form_validation->set_rules('saksi2', 'Nama Lengkap Saksi', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$data['title'] = 'Daftar Pernikahan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/formnikah', $data);
		$this->load->view('templates/footer');
		}
		else
		{
			$this->Lister_model->tambahDaftarNikah();
			$this->session->set_flashdata('flash', ' Mohon Tunggu Persetujuan Admin');
			redirect('Pnb');
		}
	}

	public function detail($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['title'] = 'Detail Data Pernikahan';
		$data['nikah'] = $this->Lister_model->getNikahById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/detail');
		$this->load->view('templates/footer');
	}

	public function baptis()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();
		
		// $data['nika'] = $this->db->get_where('jemaat')->result_array(); //manipulasi
		$data['baptis'] = $this->Lister_model->getAllBaptis();

		$data['title'] = 'Data Baptis';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/baptis', $data);
		$this->load->view('templates/footer');
	}


	public function daftarbaptis()
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		// $data['jemaat'] = $this->Lister_model->cariJemaatByName();//panggil data list
		
		$data['kode'] = $this->Lister_model->BuatKodeBs();
		$this->form_validation->set_rules('nij', 'Nij', 'trim|required|is_unique[baptis.nij]', ['is_unique' => 'N.i.j Sudah Terdaftar!']);
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('lahir_di', 'Alamat Kelahiran', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jemaat', 'Jemaat', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$data['title'] = 'Daftar Pembatisan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/formbaptis', $data);
		$this->load->view('templates/footer');
		}
		else
		{
			$this->Lister_model->tambahDaftarBaptis();
			$this->session->set_flashdata('flash', ' Mohom Tunggu Persetujuan Admin');
			redirect('Pnb/baptis');
		}
	}

	public function detailbs($id)
	{
		$data['jemaat'] = $this->db->get_where('jemaat', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['title'] = 'Detail Data Baptis';
		$data['baptis'] = $this->Lister_model->getBaptisById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pnb/detailbs', $data);
		$this->load->view('templates/footer');
	}


}