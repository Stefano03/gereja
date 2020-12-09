<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{

	public function getSubMenu()
	{
		$query = "SELECT `jemaat_sub_menu`.*, `jemaat_menu`.`menu`
		FROM `jemaat_sub_menu` JOIN `jemaat_menu`
		ON `jemaat_sub_menu`.`menu_id` = `jemaat_menu`.`id`
		 ";

		 return $this->db->query($query)->result_array();

	}


	//membuat kode nij otomatis pada registrasi
	public function BuatNij()
	{
	$this->db->select('RIGHT(jemaat.nij,2) as nij', FALSE);
	  $this->db->order_by('nij','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('jemaat');   //cek dulu apakah ada sudah ada nij di tabel.    
	  if($query->num_rows() <> 0){      
	   //jika nij ternyata sudah ada.      
	   $data = $query->row();      
	   $nij = intval($data->nij) + 1;    
	  }
	  else{      
	   //jika nij belum ada      
	   $nij = 1;    
	  }
	  $nijmax = str_pad($nij, 3, "00", STR_PAD_LEFT);    
	  $nijjadi = "D-".$nijmax;    
	  return $nijjadi;  
 	}


 	public function BuatKodeRenungan()
	{
	$this->db->select('RIGHT(renungan.kode,2) as kode', FALSE);
	  $this->db->order_by('kode','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('renungan');   //cek dulu apakah sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;    
	  }
	  else{      
	   //jika kode belum ada      
	   $kode = 1;    
	  }
	  $kodemax = str_pad($kode, 3, "00", STR_PAD_LEFT);    
	  $kodejadi = "BR-".$kodemax;    
	  return $kodejadi;  
 	}

 	public function tambahRenungan()
 	{
 		$data = [
 			"kode"     => htmlspecialchars($this->input->post('kode', true)),
 			"title"    => htmlspecialchars($this->input->post('title', true)),
 			"poster"   => htmlspecialchars($this->input->post('poster', true)),
 			"judul"    => htmlspecialchars($this->input->post('judul', true)),
 			"kategori" => htmlspecialchars($this->input->post('kategori', true)),
 			"content"  => $this->input->post('content', true),
 			"time"     => time()


 		];
 		$this->db->insert('renungan', $data);
 	}

 	public function getAllRenungan()
	{
		return $this->db->get('renungan')->result_array();
	}

	public function getRenunganById($id)
	{
		return $this->db->get_where('renungan', ['id' => $id])->row_array();
	}

}