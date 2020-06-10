<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_principal_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('product_principal');
		if($id != null) {
			$this->db->where('id_product', $id);
		}
		$this->db->join('principal', 'principal.id_principal=product_principal.id_principal','left');
		$query = $this->db->get();
		return $query;
	}
	public function ambil_data_principal()
	{
		$this->db->from('principal');
		
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getprincipal($principal)
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('product_principal');
		$this->db->join('principal', 'principal.id_principal=product_principal.id_principal','left');
        $this->db->where('product_principal.id_principal',$principal);
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function getprincipalall()
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('product_principal');
		$this->db->join('principal', 'principal.id_principal=product_principal.id_principal','left');
		$this->db->order_by('id_product', 'ASC');
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
		$params['id_principal'] = $post['id_principal'];
		$params['harga'] = $post['harga'];
		$params['barcode'] = $post['barcode'];
		$this->db->insert('product_principal', $params);
	}

	public function edit($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['nama_brg'] = $post['nama_brg'];
		$params['id_principal'] = $post['id_principal'];
		$params['harga'] = $post['harga'];
		$params['barcode'] = $post['barcode'];
		$this->db->where('id_product', $post['id_product']);
		$this->db->update('product_principal', $params);
	}

	public function hapus($id)
	{
		$this->db->where('id_product', $id);
		$this->db->delete('product_principal');
	}
}