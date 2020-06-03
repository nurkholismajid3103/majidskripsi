<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customers_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('customer');
		if($id != null) {
			$this->db->where('kode_plg', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['kode_plg'] = $post['kode_plg'];
		$params['nama_plg'] = $post['nama_plg'];
		$params['alamat'] = $post['alamat'];
		$params['no_hp'] = $post['no_hp'];
		$params['nama_pemilik'] = $post['nama_pemilik'];
		$params['no_npwp'] = $post['no_npwp'];
		$params['jenis_plg'] = $post['jenis_plg'];
		$this->db->insert('customer', $params);
	}

	public function edit($post)
	{
		$params['kode_plg'] = $post['kode_plg'];
		$params['nama_plg'] = $post['nama_plg'];
		$params['alamat'] = $post['alamat'];
		$params['no_hp'] = $post['no_hp'];
		$params['nama_pemilik'] = $post['nama_pemilik'];
		$params['no_npwp'] = $post['no_npwp'];
		$params['jenis_plg'] = $post['jenis_plg'];
		$this->db->where('kode_plg', $post['kode_plg']);
		$this->db->update('customer', $params);
	}

	public function hapus($id)
	{
		$this->db->where('kode_plg', $id);
		$this->db->delete('customer');
	}
}