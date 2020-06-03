<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('salesman_m');
	}

	public function index()
	{
		$data['row'] = $this->salesman_m->get();
		$this->template->load('template', 'salesman/salesman_data', $data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_salesman', 'Id Salesman', 'required|max_length[30]|is_unique[sales.id_salesman]');
		$this->form_validation->set_rules('nama', 'Nama Salesman', 'required|max_length[30]');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('route_list', 'Route List', 'required');
		$this->form_validation->set_rules('rayon', 'Rayon', 'required');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'salesman/salesman_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->salesman_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('salesman')."';</script>";
		}	
	}

	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_salesman', 'Id salesman', 'required|max_length[30]');
		$this->form_validation->set_rules('nama', 'Nama Salesman', 'required|max_length[30]');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin');
		$this->form_validation->set_rules('alamat', 'Alamat');
		$this->form_validation->set_rules('route_list', 'Route List', 'required');
		$this->form_validation->set_rules('rayon', 'Rayon', 'required');
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->salesman_m->get($id);
			if($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$this->template->load('template', 'salesman/salesman_form_edit', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('salesman')."';</script>";
		}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->salesman_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil diedit');</script>";
			}
			echo "<script>window.location='".site_url('salesman')."';</script>";
		}	
	}

	public function hapus()
	{
		$id = $this->input->post('id_salesman');
		$this->salesman_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('salesman')."';</script>";
	}
}