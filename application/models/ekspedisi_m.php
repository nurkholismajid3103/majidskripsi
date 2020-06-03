<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ekspedisi_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('ekspedisi');
		if($id != null) {
			$this->db->where('id_ekspedisi', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['id_ekspedisi'] = $post['id_ekspedisi'];
		$params['nama_ekspedisi'] = $post['nama_ekspedisi'];
		$params['alamat'] = $post['alamat'];
		$params['no_hp'] = $post['no_hp'];
		$this->db->insert('ekspedisi', $params);
	}

	public function edit($post)
	{
		$params['id_ekspedisi'] = $post['id_ekspedisi'];
		$params['nama_ekspedisi'] = $post['nama_ekspedisi'];
		if(!empty($post['alamat'])) {
			$params['alamat'] = ($post['alamat']);
		}
		$params['no_hp'] = $post['no_hp'];
		$this->db->where('id_ekspedisi', $post['id_ekspedisi']);
		$this->db->update('ekspedisi', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_ekspedisi', $id);
		$this->db->delete('ekspedisi');
	}
}