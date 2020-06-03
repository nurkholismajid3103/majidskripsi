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
	public function ambil_data_category()
	{
		$this->db->from('category');
		
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getcategory($category)
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('items');
		$this->db->join('category', 'category.id_category=items.id_category','left');
        $this->db->where('items.id_category',$category);
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function getitemsall()
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('items');
		$this->db->join('category', 'category.id_category=items.id_category','left');
		$this->db->order_by('kode_brg', 'ASC');
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
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