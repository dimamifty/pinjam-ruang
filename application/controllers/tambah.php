<?php

class Tambah extends CI_Controller{
 
	function __construct(){
		parent::__construct();			
		$this->load->model("m_listdata");
		$this->load->model("m_ruang");
		$this->load->library('form_validation');

	}
	public function index(){
		$data["list"] = $this->m_ruang->index();
		$this->load->view('tambah', $data);
	}
	public function tambah_aksi(){
		
		$jadwal = $this->m_listdata;
		$validation = $this->form_validation;
		$validation -> set_rules($jadwal->rules());

		if ($validation->run()){
			$jadwal->simpan();
			$this->session->set_flashdata('success','Jadwal berhasil Disimpan');
		redirect('tambah');
		} 
		else{
			$this->load->view('tambah');
			echo "<script>alert('Masukan data dengan benar');</script>";
	}

	
}
}
?>