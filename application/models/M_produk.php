<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_produk extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		$sql = "SELECT * FROM tabel_produk
				ORDER BY tabel_produk.id_produk asc";
		return $this->db->query($sql);
	}

	public function get_one($id)
	{
		$sql = "SELECT * FROM tabel_produk
				WHERE id_produk = '$id'";
		return $this->db->query($sql);
	}	
	
	public function tambah($data)
	{
		$query=$this->db->insert('tabel_produk',$data);
	}

	function edit($id, $data)
	{
		$this->db->where('id_produk', $id);
		$this->db->update('tabel_produk', $data); 
	}
	
	function hapus($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('tabel_produk'); 
	}
	function remove_checked() 
    {
	 	$delete = $this->input->post('item');
 		for ($i=0; $i < count($delete) ; $i++) 
 		{ 
 			$this->db->where('id_produk', $delete[$i]);
 			$this->db->delete('tabel_produk');
 		}
	}
	 
}