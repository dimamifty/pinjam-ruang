<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_listdata extends CI_Model
{

    private $_table = "tb_peminjaman";

    public $id_peminjaman;
    public $nama_ruang;
    public $kode_ruang;
    public $tanggal;
    public $jam_mulai;
    public $jam_selesai;

    public function rules()
    {
        return [
            ['field' => 'id_peminjaman',
            'label' => 'id_peminjaman',
            'rules' => 'numeric'],

            ['field' => 'kode_ruang',
            'label' => 'kode_ruang',
            'rules' => 'numeric'],

            ['field' => 'nama_ruang',
            'label' => 'nama_ruang',
            'rules' => 'numeric'],

            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],
            
            ['field' => 'jam_mulai',
            'label' => 'jam_mulai',
            'rules' => 'required'],

            ['field' => 'jam_selesai',
            'label' => 'jam_selesai',
            'rules' => 'required']
        ];
    }

    public function save($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function getData()
    {
        $this->db->select("*");
        $this->db->from("tb_peminjaman");
        $query = $this->db->get();
        return $query->result();
    }

    public function cekData($table,$where){      
        return $this->db->get_where($table, $where);
    }

    public function index(){
        $this->db->select('tb_peminjaman.*, tb_ruangan.nama_ruang AS nama_ruang');
        $this->db->join('tb_ruangan', 'tb_peminjaman.kode_ruang = tb_ruangan.kode_ruang');
        $this->db->from('tb_peminjaman');
        $this->db->order_by('id_peminjaman', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan()
    {
        $post = $this->input->post();
        //$tanggal = date ('y-m-d', strtotime($tanggal) ); 
        
        $this->tanggal=$post["tanggal"];
        $this->kode_ruang=$post["kode_ruang"];
        $this->jam_mulai=$post["jam_mulai"];
        $this->jam_selesai=$post["jam_selesai"];


        $this->db->insert($this->_table,$this);
        
    }
}