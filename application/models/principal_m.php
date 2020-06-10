<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('principal');
		if($id != null) {
			$this->db->where('id_principal', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['nama_principal'] = $post['nama_principal'];
		$params['alamat'] = $post['alamat'];
		$this->db->insert('principal', $params);
	}

	public function edit($post)
	{
		$params['nama_principal'] = $post['nama_principal'];
		$params['alamat'] = $post['alamat'];
		$this->db->where('id_principal', $post['id_principal']);
		$this->db->update('principal', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_principal', $id);
		$this->db->delete('principal');
	}
}