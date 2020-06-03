<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
		
	}

	public function add()
	{
		$this->form_validation->set_rules('fullname', 'Nama', 'required|max_length[30]');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[5]|matches[password]',
			array('matches' => '%s Tidak Sesuai dengan Password')
		);
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'user/user_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		}	
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('fullname', 'Nama', 'required|max_length[30]');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|callback_username_check');
		if($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'min_length[5]|matches[password]',
			array('matches' => '%s Tidak Sesuai dengan Password')
			);
		}
		if($this->input->post('passconf')) {
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'min_length[5]|matches[password]',
			array('matches' => '%s Tidak Sesuai dengan Password')
			);
		}
		$this->form_validation->set_message('required', '%s masih kosong silahkan di isi');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$this->template->load('template', 'user/user_form_edit', $data);
		} else {
			echo "<script>alert('Data Tidak ditemukan');";
			echo "window.location='".site_url('user')."';</script>";
		}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil diedit');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		}

		
	}

	function username_check() {
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM User WHERE username = '$post[username]' AND id_user != '$post[id_user]'");
		if($query->num_rows() > 0) {
		$this->form_validation->set_message('username_check', '%s ini sudah dipakai');	
		return FALSE;
		} else {
			return TRUE;
		}
	}

	public function hapus()
	{
		$id = $this->input->post('id_user');
		$this->user_m->hapus($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil dihapus');</script>";
		}
			echo "<script>window.location='".site_url('user')."';</script>";
	}


}