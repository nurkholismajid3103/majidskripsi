<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemusnahan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pemusnahan_m');
		$this->load->model('retur_m');
	}

	public function index()
	{
		$data['row'] = $this->pemusnahan_m->get();
		$this->template->load('template', 'pemusnahan/pemusnahan_data', $data);
		
	}

	public function add()
	{
		$pemusnahan = new stdClass();
		$pemusnahan->id_pemusnahan = null;
		$pemusnahan->kode_brg = null;
		$pemusnahan->id_retur = null;
		$pemusnahan->exp_date = null;
		$pemusnahan->tgl_pemusnahan = null;
		$pemusnahan->jumlah = null;

		$retur = $this->retur_m->get();
		$data = array(
			'page' => 'add',
			'row' => $pemusnahan,
			'retur' => $retur,
		);
		$this->template->load('template', 'pemusnahan/pemusnahan_form', $data);
	}

	public function edit($id)
	{
		$query = $this->pemusnahan_m->get($id);
		if($query->num_rows() > 0) {
			$pemusnahan = $query->row();

			$retur = $this->retur_m->get();
			$data = array(
			'page' => 'add',
			'row' => $pemusnahan,
			'retur' => $retur,
		);
			$this->template->load('template', 'pemusnahan/pemusnahan_form', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('pemusnahan')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->pemusnahan_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->pemusnahan_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			echo "<script>window.location='".site_url('pemusnahan')."';</script>";
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_pemusnahan');
		$this->pemusnahan_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('pemusnahan')."';</script>";
	}

}