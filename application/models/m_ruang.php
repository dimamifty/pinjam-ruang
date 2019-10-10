<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_ruang extends CI_Model
{


	private $_table= "tb_ruangan";

	public $kode_ruang;
	public $nama_ruang;

	public function rules()
    {
        return [
            ['field' => 'kode_ruang',
            'label' => 'kode_ruang',
            'rules' => 'numeric'],

            ['field' => 'nama_ruang',
            'label' => 'nama_ruang',
            'rules' => 'required']

        ];
    }
//menampilkan data ruang
    public function index()
    {
    	$this->db->select("*");
    	$this->db->from("tb_ruangan");
    	 $query = $this->db->get();
      return $query->result();
    }
//menyimpan data
    public function save()
    {
        $post = $this->input->post();
        $this->nama_ruang=$post["nama_ruang"];

       $this->db->insert($this->_table,$this);
        
    }
}