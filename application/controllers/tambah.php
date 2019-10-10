<?php

class Tambah extends CI_Controller{
 
	function __construct(){
		parent::__construct();			
		$this->load->model("m_tambah");
		$this->load->model("m_ruang");

	}
	public function index(){
		$data["list"] = $this->m_ruang->index();
		$this->load->view('tambah', $data);
	}
	public function tambah_aksi(){
		
		$tanggal = $this->input->post('tanggal');
		$tanggal = date ('y-m-d', strtotime($tanggal) );
		$kode_ruang = $this->input->post('kode_ruang', TRUE);
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
 
		$data = array(
			'tanggal' => $tanggal,
			'kode_ruang' => $kode_ruang,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai
			);
		$this->m_tambah->index($data,'tb_peminjaman');
		redirect('tambah');
	}

	
}
?>