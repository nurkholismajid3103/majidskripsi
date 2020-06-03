<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('category_m');
	}

	public function index()
	{
		$data['row'] = $this->category_m->get();
		$this->template->load('template', 'product/category/category_data', $data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_product', 'Nama Product', 'required|max_length[30]');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'product/category/category_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->category_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('category')."';</script>";
		}	
	}

	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_product', 'Nama Product', 'required|max_length[30]');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->category_m->get($id);
			if($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$this->template->load('template', 'product/category/category_form_edit', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('category')."';</script>";
		}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->category_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil diedit');</script>";
			}
			echo "<script>window.location='".site_url('category')."';</script>";
		}	
	}

	public function hapus()
	{
		$id = $this->input->post('id_category');
		$this->category_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('category')."';</script>";
	}
}