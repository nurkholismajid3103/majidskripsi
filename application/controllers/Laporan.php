<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('items_m');
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

}