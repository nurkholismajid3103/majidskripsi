<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class items_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('items');
		if($id != null) {
			$this->db->where('id_items', $id);
		}
		$this->db->join('category', 'category.id_category=items.id_category','left');
		$query = $this->db->get();
		return $query;
	}
	public function ambil_data($tabel)
	{
		$this->db->from($tabel);
		
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function add($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['id_category'] = $post['id_category'];
		$params['harga'] = $post['harga'];
		$params['barcode'] = $post['barcode'];
		$this->db->insert('items', $params);
	}

	public function edit($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['id_category'] = $post['id_category'];
		$params['harga'] = $post['harga'];
		$params['barcode'] = $post['barcode'];
		$this->db->where('id_items', $post['id_items']);
		$this->db->update('items', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_items', $id);
		$this->db->delete('items');
	}
}