<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class items extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('items_m');
		$this->load->model('category_m');
	}

	public function index()
	{
		$data['row'] = $this->items_m->get();
		$this->template->load('template', 'product/items/items_data', $data);
		
	}

	public function add()
	{
		$items = new stdClass();
		$items->id_items = null;
		$items->kode_brg = null;
		$items->nama_brg = null;
		$items->id_category = null;
		$items->harga = null;
		$items->barcode = null;

		$category = $this->category_m->get();

		$data = array(
			'page' => 'add',
			'row' => $items,
			'category' => $category,
		);
		$this->template->load('template', 'product/items/items_form', $data);
	}

	public function edit($id)
	{
		$query = $this->items_m->get($id);
		if($query->num_rows() > 0) {
			$items = $query->row();

			$category = $this->category_m->get();
			$data = array(
				'page' => 'edit',
				'row' => $items,
				'category' => $category,
			);
			$this->template->load('template', 'product/items/items_form', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('items')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->items_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->items_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>window.location='".site_url('items')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_items');
		$this->items_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('items')."';</script>";
	}

}