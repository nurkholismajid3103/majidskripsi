<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class retur_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('retur');
		if($id != null) {
			$this->db->where('id_retur', $id);
		}
		$this->db->join('customers', 'customers.id_plg=retur.id_plg','left');
		$query = $this->db->get();
		return $query;
	}

	public function ambil_data_customers()
	{
		$this->db->from('customers');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getcustomers($customers)
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('retur');
		$this->db->join('customers', 'customers.id_plg=retur.id_plg','left');
        $this->db->where('retur.id_plg',$customers);
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function getreturall()
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('retur');
		$this->db->join('customers', 'customers.id_plg=retur.id_plg','left');
        $this->db->order_by('no_fttbr', 'ASC');
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function add($post)
	{
		$params['no_fttbr'] = $post['no_fttbr'];
		$params['id_plg'] = $post['id_plg'];
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
		$params['id_plg'] = $post['id_plg'];
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