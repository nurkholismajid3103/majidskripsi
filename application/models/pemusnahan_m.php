<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemusnahan_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('pemusnahan');
		if($id != null) {
			$this->db->where('id_pemusnahan', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['exp_date'] = $post['exp_date'];
		$params['tgl_pemusnahan'] = $post['tgl_pemusnahan'];
		$params['jumlah'] = $post['jumlah'];
		$this->db->insert('pemusnahan', $params);
	}

	public function edit($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['exp_date'] = $post['exp_date'];
		$params['tgl_pemusnahan'] = $post['tgl_pemusnahan'];
		$params['jumlah'] = $post['jumlah'];
		$this->db->where('id_pemusnahan', $post['id_pemusnahan']);
		$this->db->update('pemusnahan', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_pemusnahan', $id);
		$this->db->delete('pemusnahan');
	}
}