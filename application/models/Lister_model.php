<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lister_model extends CI_Model
{
	// public function getAllJemaat()
	// 	{
	// 		return $this->db->get('jemaat')->result_array();
	// 	}


	public function getJemaat($slimit, $start)
	{
		$this->db->where('id !=', 1);
		$this->db->order_by('is_active', 'Asc');
		return $this->db->get('jemaat', $slimit, $start)->result_array();
	}


	//menghitung jumlah rows database
	public function countAllJemaat()
	{
		return $this->db->get('jemaat')->num_rows();
	}

	public function searchDataJemaat()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->or_Like('nij', $keyword);
		$this->db->or_Like('nama', $keyword);
		$this->db->or_Like('jenis_kelamin', $keyword);
		$this->db->or_Like('tanggal_lahir', $keyword);
		$this->db->or_Like('alamat', $keyword);
		$this->db->or_Like('status', $keyword);
		$this->db->or_Like('pekerjaan', $keyword);
		$this->db->or_Like('facebook', $keyword);
		$this->db->or_Like('telepon', $keyword);
		$this->db->or_Like('email', $keyword);
		$this->db->or_Like('bergabung', $keyword);
		$this->db->or_Like('is_active', $keyword);
		return $this->db->get('jemaat')->result_array();
	}

	public function getAllAnak()
	{
		return $this->db->get('anak')->result_array();
	}

	public function deleteDataJemaat($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('jemaat');
	}

	public function getJemaatById($id)
	{
		return $this->db->get_where('jemaat', ['id' => $id])->row_array();
	}

	public function editDataJemaat()
	{
		$data = [

			"nij" 			=> htmlspecialchars($this->input->post('nij', true)),
			"nama" 			=> htmlspecialchars($this->input->post('nama', true)),
			"jenis_kelamin" => htmlspecialchars($this->input->post('jenis_kelamin', true)),
			"tanggal_lahir" => htmlspecialchars($this->input->post('tanggal_lahir', true)),
			"alamat" 		=> htmlspecialchars($this->input->post('alamat', true)),
			"status" 		=> htmlspecialchars($this->input->post('status', true)),
			"pekerjaan" 	=> htmlspecialchars($this->input->post('pekerjaan', true)),
			"facebook" 		=> htmlspecialchars($this->input->post('facebook', true)),
			"telepon" 		=> htmlspecialchars($this->input->post('telepon', true)),
			"is_active"		=> htmlspecialchars($this->input->post('is_active', true))
		
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jemaat', $data);
	}

	//anak sekolah minggu
	public function getAnak($slimit, $start)
	{
		return $this->db->get('anak', $slimit, $start)->result_array();
	}


	//menghitung jumlah rows database
	public function countAllAnak()
	{
		return $this->db->get('anak')->num_rows();
	}

	public function searchDataAnak()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->or_Like('nia', $keyword);
		$this->db->or_Like('nama', $keyword);
		$this->db->or_Like('jenis_kelamin', $keyword);
		$this->db->or_Like('tanggal_lahir', $keyword);
		$this->db->or_Like('pendidikan', $keyword);
		$this->db->or_Like('anak_ke', $keyword);
		$this->db->or_Like('ayah', $keyword);
		$this->db->or_Like('ibu', $keyword);
		$this->db->or_Like('bergabung', $keyword);
		return $this->db->get('anak')->result_array();
	}



	public function searcJemaat($nama_laki){
        $this->db->like('nama_laki', $nama_laki , 'both');
        $this->db->order_by('nama_laki', 'ASC');
        $this->db->limit(10);
        return $this->db->get('jemaat')->result();
    }

	public function getAllNikah()
	{
		$nij = $this->session->userdata('nij');

		$query = "SELECT `nikah`.*, `jemaat`.`nij`
				FROM `nikah` JOIN `jemaat`
				ON `nikah`.`nij_laki` = `jemaat`.`nij`
				-- OR `nikah`.`nij_wanita` = `jemaat`.`nij`
				Where `nikah`.`status` = 1
				 ";
		 return $this->db->query($query)->result_array();

		// $this->db->where('status', 1);
		// return $this->db->get('nikah')->result_array();
	}

	public function getFildNikah() //manipulasi join merubah value nama
	{
		$query = "SELECT `nikah`.*, `jemaat`.`nama`
		FROM `nikah` JOIN `jemaat`
		ON `nikah`.`nama_laki` = `jemaat`.`id`
		OR `nkah`.`nama_wanita` = `jemaat`.id`
		 ";

		 return $this->db->query($query)->result_array();

	}

	

	
	public function getNikah($slimit, $start)
	{	

		$this->db->order_by('status', 'Asc');
		return $this->db->get('nikah', $slimit, $start)->result_array();
	}


	//menghitung jumlah rows database
	public function countAllNikah()
	{	
		return $this->db->get('nikah')->num_rows();
	}


	public function getNikahById($id)
	{
		return $this->db->get_where('nikah', ['id' => $id])->row_array();
	}

	public function tambahDaftarNikah()
	{
		$data = [

			"kode" 					=> htmlspecialchars($this->input->post('kode', true)),
			"nij_laki" 			=> htmlspecialchars($this->input->post('nij_laki', true)),
			"laki_lahir_di" 		=> htmlspecialchars($this->input->post('laki_lahir_di', true)),
			"tanggal_lahir_laki" 	=> htmlspecialchars($this->input->post('tanggal_lahir_laki', true)),
			"ayah_laki" 			=> htmlspecialchars($this->input->post('ayah_laki', true)),
			"ibu_laki" 				=> htmlspecialchars($this->input->post('ibu_laki', true)),
			"nij_wanita" 		   	=> htmlspecialchars($this->input->post('nij_wanita', true)),
			"wanita_lahir_di" 	   	=> htmlspecialchars($this->input->post('wanita_lahir_di', true)),
			"tanggal_lahir_wanita" 	=> htmlspecialchars($this->input->post('tanggal_lahir_wanita', true)),
			"ayah_wanita" 			=> htmlspecialchars($this->input->post('ayah_wanita', true)),
			"ibu_wanita" 			=> htmlspecialchars($this->input->post('ibu_wanita', true)),
			// "dihadapan" 			=> htmlspecialchars($this->input->post('dihadapan', true)),
			// "dbkah" 				=> htmlspecialchars($this->input->post('dbkah', true)),
			"saksi1" 				=> htmlspecialchars($this->input->post('saksi1', true)),
			"saksi2" 				=> htmlspecialchars($this->input->post('saksi2', true)),
			// "tanggal_nikah" 		=> htmlspecialchars($this->input->post('tanggal_nikah', true)),
			// "yang_menyalin" 		=> htmlspecialchars($this->input->post('yang_menyalin', true)),
			"status" 				=> 0,
			"date" 					=> time()
		
		];

		$this->db->insert('nikah', $data);
	}


	public function editNikah()
	{
		$data = [

			"kode" 					=> htmlspecialchars($this->input->post('kode', true)),
			"nij_laki" 			=> htmlspecialchars($this->input->post('nij_laki', true)),
			"laki_lahir_di" 		=> htmlspecialchars($this->input->post('laki_lahir_di', true)),
			"tanggal_lahir_laki" 	=> htmlspecialchars($this->input->post('tanggal_lahir_laki', true)),
			"ayah_laki" 			=> htmlspecialchars($this->input->post('ayah_laki', true)),
			"ibu_laki" 				=> htmlspecialchars($this->input->post('ibu_laki', true)),
			"nij_wanita" 		   	=> htmlspecialchars($this->input->post('nij_wanita', true)),
			"wanita_lahir_di" 	   	=> htmlspecialchars($this->input->post('wanita_lahir_di', true)),
			"tanggal_lahir_wanita" 	=> htmlspecialchars($this->input->post('tanggal_lahir_wanita', true)),
			"ayah_wanita" 			=> htmlspecialchars($this->input->post('ayah_wanita', true)),
			"ibu_wanita" 			=> htmlspecialchars($this->input->post('ibu_wanita', true)),
			"dihadapan" 			=> htmlspecialchars($this->input->post('dihadapan', true)),
			"dbkah" 				=> htmlspecialchars($this->input->post('dbkah', true)),
			"saksi1" 				=> htmlspecialchars($this->input->post('saksi1', true)),
			"saksi2" 				=> htmlspecialchars($this->input->post('saksi2', true)),
			"tanggal_nikah" 		=> htmlspecialchars($this->input->post('tanggal_nikah', true)),
			"yang_menyalin" 		=> htmlspecialchars($this->input->post('yang_menyalin', true)),
			"status" 				=> htmlspecialchars($this->input->post('status', true))
		
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('nikah', $data);
	}

	public function searchDataNikah()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->or_Like('kode', $keyword);
		$this->db->or_Like('nij_laki', $keyword);
		$this->db->or_Like('laki_lahir_di', $keyword);
		$this->db->or_Like('tanggal_lahir_laki', $keyword);
		$this->db->or_Like('ayah_laki', $keyword);
		$this->db->or_Like('ibu_laki', $keyword);
		$this->db->or_Like('nij_wanita', $keyword);
		$this->db->or_Like('wanita_lahir_di', $keyword);
		$this->db->or_Like('tanggal_lahir_wanita', $keyword);
		$this->db->or_Like('ayah_wanita', $keyword);
		$this->db->or_Like('ibu_wanita', $keyword);
		$this->db->or_Like('dihadapan', $keyword);
		$this->db->or_Like('dbkah', $keyword);
		$this->db->or_Like('saksi1', $keyword);
		$this->db->or_Like('saksi2', $keyword);
		$this->db->or_Like('tanggal_nikah', $keyword);
		$this->db->or_Like('yang_menyalin', $keyword);
		$this->db->or_Like('status', $keyword);

		return $this->db->get('nikah')->result_array();
	}

	public function deleteDataNikah($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('nikah');
	}


	public function BuatKode()
	{
	$this->db->select('RIGHT(nikah.kode,2) as kode', FALSE);
	  $this->db->order_by('kode','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('nikah');   //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;    
	  }
	  else{      
	   //jika kode belum ada      
	   $kode = 1;    
	  }
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
	  $kodejadi = "DN-0".$kodemax;    
	  return $kodejadi;  
 	}


 	// ambil data jemaat dengan teknik input list
 	public function cariJemaatByName()
     {
        $query= "SELECT * FROM jemaat WHERE jenis_kelamin Not IN ('perempuan') ";
        return $this->db->query($query);
     }


	public function tambahDaftarBaptis()
	{
		$data = [

			"kode" 		=> htmlspecialchars($this->input->post('kode', true)),
			"nij" 		=> htmlspecialchars($this->input->post('nij', true)),
			"nama" 		=> htmlspecialchars($this->input->post('nama', true)),
			"lahir_di" 	=> htmlspecialchars($this->input->post('lahir_di', true)),
			"tgl_lahir" => htmlspecialchars($this->input->post('tgl_lahir', true)),
			"ayah" 		=> htmlspecialchars($this->input->post('ayah', true)),
			"ibu" 		=> htmlspecialchars($this->input->post('ibu', true)),
			"alamat" 	=> htmlspecialchars($this->input->post('alamat', true)),
			"jemaat" 	=> htmlspecialchars($this->input->post('jemaat', true)),
			"status" 	=> 0,
			"date" 		=> time()
		
		];

		$this->db->insert('baptis', $data);
	}

	public function editbaptis()
	{
		$data = [

			"kode" 			=> htmlspecialchars($this->input->post('kode', true)),
			"nij" 		    => htmlspecialchars($this->input->post('nij', true)),
			"nama" 			=> htmlspecialchars($this->input->post('nama', true)),
			"lahir_di" 		=> htmlspecialchars($this->input->post('lahir_di', true)),
			"tgl_lahir" 	=> htmlspecialchars($this->input->post('tgl_lahir', true)),
			"tgl_baptis"	=> htmlspecialchars($this->input->post('tgl_baptis', true)),
			"ayah" 			=> htmlspecialchars($this->input->post('ayah', true)),
			"ibu" 			=> htmlspecialchars($this->input->post('ibu', true)),
			"alamat" 		=> htmlspecialchars($this->input->post('alamat', true)),
			"jemaat" 		=> htmlspecialchars($this->input->post('jemaat', true)),
			"pembaptis" 	=> htmlspecialchars($this->input->post('pembaptis', true)),
			"status" 		=> htmlspecialchars($this->input->post('status', true))

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('baptis', $data);
		
	}


	public function getAllBaptis()
	{
		$nama = $this->session->userdata('nij');

		$query = "SELECT `baptis`.*, `jemaat`.`nij`
				FROM `baptis` JOIN `jemaat`
				ON `baptis`.`nij` = `jemaat`.`nij`
				Where `baptis`.`status` = 1
				 ";
		 return $this->db->query($query)->result_array();

		// $this->db->where('status', 1);
		// return $this->db->get('baptis')->result_array();
	}


	public function getBaptisById($id)
	{
		return $this->db->get_where('baptis', ['id' => $id])->row_array();
	}

	public function getBaptis($slimit, $start)
	{
		$this->db->order_by('status', 'Asc');
		return $this->db->get('baptis', $slimit, $start)->result_array();
	}


	//menghitung jumlah rows database
	public function countAllBaptis()
	{
		return $this->db->get('baptis')->num_rows();
	}

	public function deleteDataBaptis($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('baptis');
	}


	public function BuatKodeBs()
	{
	$this->db->select('RIGHT(baptis.kode,2) as kode', FALSE);
	  $this->db->order_by('kode','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('baptis');   //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;    
	  }
	  else{      
	   //jika kode belum ada      
	   $kode = 1;    
	  }
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
	  $kodejadi = "BS-0".$kodemax;    
	  return $kodejadi;  
 	}


 	public function searchDataBaptis()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->or_Like('kode', $keyword);
		$this->db->or_Like('nij', $keyword);
		$this->db->or_Like('nama', $keyword);
		$this->db->or_Like('lahir_di', $keyword);
		$this->db->or_Like('tgl_lahir', $keyword);
		$this->db->or_Like('tgl_baptis', $keyword);
		$this->db->or_Like('ibu', $keyword);
		$this->db->or_Like('ayah', $keyword);
		$this->db->or_Like('alamat', $keyword);
		$this->db->or_Like('jemaat', $keyword);
		$this->db->or_Like('pembaptis', $keyword);
		$this->db->or_Like('status', $keyword);
		$this->db->or_Like('date', $keyword);

		return $this->db->get('baptis')->result_array();
	}

	public function getCountjemaat()
	{	
		$sql = "select count(is_active) as is_active FROM jemaat Where is_active ='0' ";
		$result = $this->db->query($sql);
		return $result->row()->is_active;

		// $query = $this->db->get('jemaat');
		// if($query->num_rows()>0)
		// {
		// 	return $query->num_rows();
		// }
		// else
		// {
		// 	return 0;
		// }
	}

	public function getCountbaptis()
	{
		$sql = "select count(status) as status FROM baptis Where status ='0' ";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}

	public function getCountnikah()
	{
		$sql = "select count(status) as status FROM nikah Where status ='0' ";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}

	public function getCountAlljemaat()
	{
		$sql = "select count(id) as id FROM jemaat";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}


}