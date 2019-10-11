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

		$this->load->model("m_listdata");

	}

	public function index(){
	$data["list"] = $this->m_listdata->index();

	$this->load->view('listdata', $data);
	
	}

}