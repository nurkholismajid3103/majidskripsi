<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('retur_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->retur_m->get();
		$this->template->load('template', 'retur/retur_data', $data);
		
	}

	public function add()
	{
		$retur = new stdClass();
		$retur->id_retur = null;
		$retur->no_fttbr = null;
		$retur->nama_plg = null;
		$retur->nama_sales = null;
		$retur->kode_brg = null;
		$retur->nama_brg = null;
		$retur->no_batch = null;
		$retur->exp_date = null;
		$retur->jumlah = null;
		$data = array(
			'page' => 'add',
			'row' => $retur
		);
		$this->template->load('template', 'retur/retur_form', $data);
	}

	public function edit($id)
	{
		$query = $this->retur_m->get($id);
		if($query->num_rows() > 0) {
			$retur = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $retur
			);
			$this->template->load('template', 'retur/retur_form', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('retur')."';</script>";
		}


	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->retur_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->retur_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>window.location='".site_url('retur')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_retur');
		$this->retur_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('retur')."';</script>";
	}

}