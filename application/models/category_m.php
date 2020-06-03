<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category_m extends CI_model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('id_category', $post['id_category']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('category');
		if($id != null) {
			$this->db->where('id_category', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['nama_product'] = $post['nama_product'];
		$this->db->insert('category', $params);
	}

	public function edit($post)
	{
		$params['nama_product'] = $post['nama_product'];
		$this->db->where('id_category', $post['id_category']);
		$this->db->update('category', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_category', $id);
		$this->db->delete('category');
	}
}