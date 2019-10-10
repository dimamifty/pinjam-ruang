<?php
/**
 * 
 */
class Listdata extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();

		$this->load->model("m_tambah");

	}

	public function index(){
	$data["list"] = $this->m_tambah->getAll();

	$this->load->view('listdata', $data);
	
	}
	 
	public function ruang(){
	$data["list"] = $this->m_listdata->getAll();

	$this->load->view('tambah', $data);
	 
	}

}