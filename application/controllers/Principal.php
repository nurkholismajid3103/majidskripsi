<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('principal_m');
	}

	public function index()
	{
		$data['row'] = $this->principal_m->get();
		$this->template->load('template', 'principal/principal_data', $data);
	}

	public function add()
	{
		$principal = new stdClass();
		$principal->id_principal = null;
		$principal->nama_principal = null;
		$principal->alamat = null;

		$data = array(
			'page' => 'add',
			'row' => $principal,
		);
		$this->template->load('template', 'principal/principal_form', $data);
	}

	public function edit($id)
	{
		$query = $this->principal_m->get($id);
		if($query->num_rows() > 0) {
			$principal = $query->row();

			$data = array(
				'page' => 'edit',
				'row' => $principal,
			);
			$this->template->load('template', 'principal/principal_form', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('principal')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->principal_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->principal_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>window.location='".site_url('principal')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_principal');
		$this->principal_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('principal')."';</script>";
	}

}