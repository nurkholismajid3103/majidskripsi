<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_principal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('product_principal_m');
		$this->load->model('principal_m');
	}

	public function index()
	{
		$data['row'] = $this->product_principal_m->get();
		
		$this->template->load('template', 'principal/product_data', $data);
		
	}

	public function add()
	{
		$product_principal = new stdClass();
		$product_principal->id_product = null;
		$product_principal->kode_brg = null;
		$product_principal->nama_brg = null;
		$product_principal->id_principal = null;
		$product_principal->harga = null;
		$product_principal->barcode = null;

		$principal = $this->principal_m->get();

		$data = array(
			'page' => 'add',
			'row' => $product_principal,
			'principal' => $principal,
		);
		$this->template->load('template', 'principal/product_form', $data);
	}

	public function edit($id)
	{
		$query = $this->product_principal_m->get($id);
		if($query->num_rows() > 0) {
			$product_principal = $query->row();

			$principal = $this->principal_m->get();
			$data = array(
				'page' => 'edit',
				'row' => $product_principal,
				'principal' => $principal,
			);
			$this->template->load('template', 'principal/product_form', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('product_principal')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->product_principal_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->product_principal_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>window.location='".site_url('product_principal')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_product');
		$this->product_principal_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('product_principal')."';</script>";
	}

}