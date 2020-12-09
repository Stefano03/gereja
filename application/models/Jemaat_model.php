<?php

class Jemaat_model extends CI_Model{

	public function getJemaatById($id)
	{
		return $this->db->get_where('jemaat', ['id' => $id])->row_array();
	}

	public function getAllanak()
	{
		return $this->db->get('anak')->result_array();
	}


	public function getAnak()
	{
		$nij = $this->session->userdata('nij');

		$query = "SELECT `anak`.*, `jemaat`.`nij`
				FROM `anak` JOIN `jemaat`
				ON `anak`.`nij_ayah` = `jemaat`.`nij`
				-- OR `anak`.`nij_ibu` = `jemaat`.`nij`
				 ";
		 return $this->db->query($query)->result_array();

	}

	//membuat nia N.I.A OTOMATIS
	public function BuatNia()
	{
	$this->db->select('RIGHT(anak.nia,2) as nia', FALSE);
	  $this->db->order_by('nia','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('anak');   //cek dulu apakah ada sudah ada nia di tabel.    
	  if($query->num_rows() <> 0){      
	   //jika nia ternyata sudah ada.      
	   $data = $query->row();      
	   $nia = intval($data->nia) + 1;    
	  }
	  else{      
	   //jika nia belum ada      
	   $nia = 1;    
	  }
	  $niamax = str_pad($nia, 3, "00", STR_PAD_LEFT);    
	  $niajadi = "DA-".$niamax;    
	  return $niajadi;  
 	}


 	//membuat data list pencarian nama orang tua
 	// public function JemaatByIbu()
 	// {
  //       $query= "SELECT * FROM jemaat WHERE jenis_kelamin='perempuan' AND status ='Menikah'";
  //       return $this->db->query($query);
  //   }

  //   public function JemaatByAyah()
 	// {
  //       $query= "SELECT * FROM jemaat WHERE jenis_kelamin ='laki-laki' AND status ='Menikah' ";
  //       return $this->db->query($query);
  //   }


	public function tambahAnaksm()
	{
		$data = [

			"nia" 			=> htmlspecialchars($this->input->post('nia', true)),
			"nama" 			=> htmlspecialchars($this->input->post('nama', true)),
			"jenis_kelamin" => htmlspecialchars($this->input->post('jenis_kelamin', true)),
			"tanggal_lahir" => htmlspecialchars($this->input->post('tanggal_lahir', true)),
			"anak_ke" 		=> htmlspecialchars($this->input->post('anak_ke', true)),
			"pendidikan" 	=> htmlspecialchars($this->input->post('pendidikan', true)),
			"nij_ayah" 		=> htmlspecialchars($this->input->post('nij_ayah', true)),
			"nij_ibu" 		=> htmlspecialchars($this->input->post('nij_ibu', true)),
			"bergabung" 	=> time()
		
		];

		$this->db->insert('anak', $data);
	}


	public function getAnakById($id)
	{
		return $this->db->get_where('anak', ['id' => $id])->row_array();
	}

	public function deleteDataAnaksm($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('anak');
	}

	public function editAnaksm()
	{
		$data = [

			"nia" 			=> htmlspecialchars($this->input->post('nia', true)),
			"nama" 			=> htmlspecialchars($this->input->post('nama', true)),
			"jenis_kelamin" => htmlspecialchars($this->input->post('jenis_kelamin', true)),
			"tanggal_lahir" => htmlspecialchars($this->input->post('tanggal_lahir', true)),
			"anak_ke" 		=> htmlspecialchars($this->input->post('anak_ke', true)),
			"pendidikan" 	=> htmlspecialchars($this->input->post('pendidikan', true)),
			"nij_ayah" 		=> htmlspecialchars($this->input->post('nij_ayah', true)),
			"nij_ibu" 		=> htmlspecialchars($this->input->post('nij_ibu', true))	
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('anak', $data);
	}

	public function searchDataAnaksm()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->or_Like('nia', $keyword);
		$this->db->or_Like('nama', $keyword);
		$this->db->or_Like('jenis_kelamin', $keyword);
		$this->db->or_Like('tanggal_lahir', $keyword);
		$this->db->or_Like('pendidikan', $keyword);
		$this->db->or_Like('anak_ke', $keyword);
		$this->db->or_Like('nij_ayah', $keyword);
		$this->db->or_Like('nij_ibu', $keyword);
		$this->db->or_Like('bergabung', $keyword);
		return $this->db->get('anak')->result_array();
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
		$this->db->or_Like('is_active', $keyword);
		$this->db->or_Like('bergabung', $keyword);
		return $this->db->get('jemaat')->result_array();
	}

}