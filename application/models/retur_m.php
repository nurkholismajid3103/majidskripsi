<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class retur_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('retur');
		if($id != null) {
			$this->db->where('id_retur', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['no_fttbr'] = $post['no_fttbr'];
		$params['nama_plg'] = $post['nama_plg'];
		$params['nama_sales'] = $post['nama_sales'];
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['no_batch'] = $post['no_batch'];
		$params['exp_date'] = $post['exp_date'];
		$params['jumlah'] = $post['jumlah'];
		$this->db->insert('retur', $params);
	}

	public function edit($post)
	{
		$params['no_fttbr'] = $post['no_fttbr'];
		$params['nama_plg'] = $post['nama_plg'];
		$params['nama_sales'] = $post['nama_sales'];
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['no_batch'] = $post['no_batch'];
		$params['exp_date'] = $post['exp_date'];
		$params['jumlah'] = $post['jumlah'];
		$this->db->where('id_retur', $post['id_retur']);
		$this->db->update('retur', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_retur', $id);
		$this->db->delete('retur');
	}
}