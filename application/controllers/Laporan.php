<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
        $this->load->model('items_m');
        $this->load->model('retur_m');
        $this->load->model('pemusnahan_m');
        $this->load->model('product_principal_m');
	}

    public function items()
    {
     $data['category'] =$this->items_m->ambil_data_category();   
    $this->template->load('template', 'laporan/l_items', $data);

    }

    public function laporanitems()
    {
        $category=$this->input->post('id_category');
        $data['title']= "Laporan Item Percategory";
        $data['p']=$this->items_m->getcategory($category);
        $this->load->view('laporan/l_items_detail', $data);
    }

    public function laporanitemsall()
    {
        $data['title']= "Laporan Semua Data Product";
        $data['p']=$this->items_m->getitemsall();
        $this->load->view('laporan/l_items_detail', $data);
    }

    public function retur()
    {
    $data['customers'] =$this->retur_m->ambil_data_customers();   
    $this->template->load('template', 'laporan/l_retur', $data);
    }

    public function laporanretur()
    {
        $customers=$this->input->post('id_plg');
        $data['title']= "Laporan Retur Perpelanggan";
        $data['p']=$this->retur_m->getcustomers($customers);
        $this->load->view('laporan/l_retur_detail', $data);
    }

    public function laporanreturall()
    {
        $data['title']= "Laporan Semua Data Retur";
        $data['p']=$this->retur_m->getreturall();
        $this->load->view('laporan/l_retur_detail', $data);
    }

    public function pemusnahan()
    {
    $data['retur'] =$this->pemusnahan_m->ambil_data_retur();   
    $this->template->load('template', 'laporan/l_pemusnahan', $data);
    }

    public function laporanpemusnahan()
    {
        $retur=$this->input->post('id_retur');
        $data['title']= "Laporan Pemusnahan Perbarang";
        $data['p']=$this->pemusnahan_m->getretur($retur);
        $this->load->view('laporan/l_pemusnahan_detail', $data);
    }

    public function laporanpemusnahanall()
    {
        $data['title']= "Laporan Semua Data Pemusnahan";
        $data['p']=$this->pemusnahan_m->getpemusnahanall();
        $this->load->view('laporan/l_pemusnahan_detail', $data);
    }

    public function principal()
    {
    $data['principal'] =$this->product_principal_m->ambil_data_principal();   
    $this->template->load('template', 'laporan/l_principal', $data);

    }

    public function laporanproduct_principal()
    {
        $principal=$this->input->post('id_principal');
        $data['title']= "Laporan Product Principal";
        $data['p']=$this->product_principal_m->getprincipal($principal);
        $this->load->view('laporan/l_principal_detail', $data);
    }

    public function laporanproduct_principalall()
    {
        $data['title']= "Laporan Semua Data Product Principal";
        $data['p']=$this->product_principal_m->getprincipalall();
        $this->load->view('laporan/l_principal_detail', $data);
    }

}