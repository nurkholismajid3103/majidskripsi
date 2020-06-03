<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class salesman_m extends CI_model {
	public function get($id = null)
	{
		$this->db->from('sales');
		if($id != null) {
			$this->db->where('id_salesman', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['id_salesman'] = $post['id_salesman'];
		$params['nama'] = $post['nama'];
		$params['tgl_lahir'] = $post['tgl_lahir'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		$params['alamat'] = $post['alamat'];
		$params['route_list'] = $post['route_list'];
		$params['rayon'] = $post['rayon'];
		$this->db->insert('sales', $params);
	}

	public function edit($post)
	{
		$params['id_salesman'] = $post['id_salesman'];
		$params['nama'] = $post['nama'];
		$params['tgl_lahir'] = $post['tgl_lahir'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		if(!empty($post['alamat'])) {
			$params['alamat'] = ($post['alamat']);
		}
		$params['route_list'] = $post['route_list'];
		$params['rayon'] = $post['rayon'];
		$this->db->where('id_salesman', $post['id_salesman']);
		$this->db->update('sales', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_salesman', $id);
		$this->db->delete('sales');
	}
}