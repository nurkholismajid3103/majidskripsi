<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemusnahan_m extends CI_model {

	public function get($id = null)
	{
		$this->db->from('pemusnahan');
		if($id != null) {
			$this->db->where('id_pemusnahan', $id);
		}
		$this->db->join('retur', 'retur.id_retur=pemusnahan.id_retur','left');
		$query = $this->db->get();
		return $query;
	}

	public function ambil_data_retur()
	{
		$this->db->from('retur');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getretur($retur)
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('pemusnahan');
		$this->db->join('retur', 'retur.id_retur=pemusnahan.id_retur','left');
        $this->db->where('pemusnahan.id_retur',$retur);
        $q = $this->db->get_where();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function getpemusnahanall()
	{
		$kondisi = "";
        $this->db->select('');
        $this->db->from('pemusnahan');
		$this->db->join('retur', 'retur.id_retur=pemusnahan.id_retur','left');
        $this->db->order_by('id_pemusnahan', 'ASC');
        $q = $this->db->get();
        $q = $q->result_array();
        //echo $this->db->last_query();
        //print_r($q);
        return $q;
	}

	public function add($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['id_retur'] = $post['id_retur'];
		$params['exp_date'] = $post['exp_date'];
		$params['tgl_pemusnahan'] = $post['tgl_pemusnahan'];
		$params['jumlah'] = $post['jumlah'];
		$this->db->insert('pemusnahan', $params);
	}

	public function edit($post)
	{
		$params['kode_brg'] = $post['kode_brg'];
		$params['id_retur'] = $post['id_retur'];
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