<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pembayaran_taaruf extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		$sql = "SELECT *, tabel_pembayaran_taaruf.gambar as gambar_pembayaran_taaruf FROM tabel_pembayaran_taaruf 
				inner join tabel_user on tabel_pembayaran_taaruf.id_user = tabel_user.id_user 
				where tabel_user.status_taaruf = '0' 
				ORDER BY tabel_pembayaran_taaruf.id_pembayaran_taaruf desc";
		return $this->db->query($sql);
	}

	public function get_one($id)
	{
		$sql = "SELECT *, tabel_pembayaran_taaruf.gambar as gambar_pembayaran_taaruf FROM tabel_pembayaran_taaruf 
		inner join tabel_user on tabel_pembayaran_taaruf.id_user = tabel_user.id_user
				WHERE tabel_pembayaran_taaruf.id_pembayaran_taaruf = '$id'";
		return $this->db->query($sql);
	}	
	
	public function tambah($data)
	{
		$query=$this->db->insert('tabel_pembayaran_taaruf',$data);
	}

	function edit($id, $data)
	{
		$this->db->where('id_pembayaran_taaruf', $id);
		$this->db->update('tabel_pembayaran_taaruf', $data); 
	}
	
	function hapus($id)
	{
		$this->db->where('id_pembayaran_taaruf', $id);
		$this->db->delete('tabel_pembayaran_taaruf'); 
	}
	function remove_checked() 
    {
	 	$delete = $this->input->post('item');
 		for ($i=0; $i < count($delete) ; $i++) 
 		{ 
 			$this->db->where('id_pembayaran_taaruf', $delete[$i]);
 			$this->db->delete('tabel_pembayaran_taaruf');
 		}
	}
	function approve($id) {
		$this->db->where('id_user', $id);
		$this->db->delete('tabel_pembayaran_taaruf');

		$this->db->query("update tabel_user set status_taaruf='1' where id_user='$id'");

	}
	 
}