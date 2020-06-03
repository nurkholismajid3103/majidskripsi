<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('customers_m');
	}

	public function index()
	{
		$data['row'] = $this->customers_m->get();
		$this->template->load('template', 'customers/customers_data', $data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_plg', 'Kode Pelanggan', 'required|max_length[30]|is_unique[customer.kode_plg]');
		$this->form_validation->set_rules('nama_plg', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
		$this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');
		$this->form_validation->set_rules('no_npwp', 'No NPWP', 'required');
		$this->form_validation->set_rules('jenis_plg', 'Jenis Pelanggan', 'required');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'customers/customers_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->customers_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('customers')."';</script>";
		}	
	}

	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_plg', 'Kode Pelanggan', 'required|max_length[30]|is_unique[customer.kode_plg]');
		$this->form_validation->set_rules('nama_plg', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
		$this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');
		$this->form_validation->set_rules('no_npwp', 'No NPWP', 'required');
		$this->form_validation->set_rules('jenis_plg', 'Jenis Pelanggan', 'required');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->customers_m->get($id);
			if($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$this->template->load('template', 'customers/customers_form_edit', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('customers')."';</script>";
		}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->customers_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil diedit');</script>";
			}
			echo "<script>window.location='".site_url('customers')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('kode_plg');
		$this->customers_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('customers')."';</script>";
	}

}