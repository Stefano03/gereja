<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'menu');//membuat nama alias pada model
	}

	public function index()
	{		
		$data['title']  = 'Destiny Church';
		$data['poster'] = 'cloup.jpeg';
		$data['judul']  = 'Destiny My Home';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/home_footer');
	}

	public function pastors()
	{		
		$data['title']  = 'Pastors';
		$data['poster'] = 'pastor.jpg';
		$data['judul']  = 'Pastors';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/pastors');
		$this->load->view('templates/home_footer');
	}

	public function renungan()
	{		
		$data['title']  = 'Renungan';
		$data['poster'] = 'cloup.jpeg';
		$data['judul']  = 'A story about getting Destiny';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/renungan');
		$this->load->view('templates/home_footer');
	}

	public function service_times()
	{		
		$data['title']  = 'Service Times';
		$data['poster'] = 'service.png';
		$data['judul']  = 'Service Times';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/service');
		$this->load->view('templates/home_footer');
	}

	public function welcome()
	{		
		$data['title']  = 'Welcome';
		$data['poster'] = 'welcome.png';
		$data['judul']  = 'Welcome';
		$data['renungan'] = $this->menu->getAllRenungan();	
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/welcome',$data);
		$this->load->view('templates/home_footer');
	}

	public function contact_location()
	{		
		$data['title']  = 'Contact';
		$data['poster'] = 'service.png';
		$data['judul']  = 'Contact & Location';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/contact');
		$this->load->view('templates/home_footer');
	}

	public function vision_mission()
	{		
		$data['title']  = 'Vision And Mission';
		$data['poster'] = 'vision.png';
		$data['judul']  = 'Vision And Mission';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/visi_misi');
		$this->load->view('templates/home_footer');
	}

	public function berterimakasilah()
	{		
		$data['title']  = 'Contact';
		$data['poster'] = 'service.png';
		$data['judul']  = 'BERTERIMA KASIHLAH KEPADA MEREKA YANG MELUKAI ANDA';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('renungan/index');
		$this->load->view('templates/home_footer');
	}

	public function destiny_bible()
	{		
		$data['title']  = 'Destiny Bible';
		$data['poster'] = 'bible.png';
		$data['judul']  = 'Destiny Bible';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/destiny_bible');
		$this->load->view('templates/home_footer');
	}

	public function encounter()
	{		
		$data['title']  = 'Encounter';
		$data['poster'] = 'bible.png';
		$data['judul']  = 'Encounter';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/encounter');
		$this->load->view('templates/home_footer');
	}

	public function ListRenungan()
	{
		$data['title']  = 'List Renungan';
		$data['poster'] = 'service.png';
		$data['judul']  = 'List Renungan';
		$data['renungan'] = $this->menu->getAllRenungan();	
		$this->load->view('templates/home_header', $data);
		$this->load->view('renungan/renungan', $data);
		$this->load->view('templates/home_footer');
	}

	public function detail($id)
	{
		$data['title']    = 'Detail';
		$data['poster']   = 'service.png';
		$data['judul']  = 'Destiny Church Bali';
		$data['renungan'] = $this->menu->getRenunganById($id);
		$this->load->view('templates/home_header', $data);
		$this->load->view('renungan/detail');
		$this->load->view('templates/home_footer');
	}

	public function sejarah()
	{		
		$data['title']  = 'Sejarah';
		$data['poster'] = 'destinyhome.png';
		$data['judul']  = 'Sejarah Destiny Church Bali';
 		$this->load->view('templates/home_header', $data);
		$this->load->view('home/sejarah');
		$this->load->view('templates/home_footer');
	}

}