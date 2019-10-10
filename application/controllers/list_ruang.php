<?php
/**
 * 
 */
class List_ruang extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();

		$this->load->model("m_ruang");

	}

	public function index(){
	$data["list"] = $this->m_ruang->index();

	$this->load->view('data_ruang', $data);
	
	}
	 
	

}