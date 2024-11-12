<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranTaaruf extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();		
		date_default_timezone_set("Asia/Jakarta");
		//===== Load Database =====
		$this->load->database();
		$this->load->helper('url');
		//===== Load Model =====
		$this->load->model('m_admin');
		$this->load->model('m_produk');
		$this->load->model('m_pembayaran_taaruf');
		//===== Load Library =====
		$this->load->library('upload');	
	}
	protected function template($page, $data)
	{
		$this->load->view('t_panel/header',$data);
		$this->load->view("t_panel/aside");
		$this->load->view("panel/$page");		
		$this->load->view('t_panel/footer');
	}
	public function index()
	{		
		$page			= "pembayaran_taaruf";	
		$data['isi']    = "pembayaran_taaruf";	
		$data['title']	= "pembayaran_taaruf";			
		$data['judul1']	= "pembayaran_taaruf";			
		$data['judul2']	= "";					
		$data['set']	= "view";	
		$data['dt_pembayaran_taaruf'] = $this->m_pembayaran_taaruf->get_all();		
		$this->load->view('t_panel/header',$data);
		$this->load->view("t_panel/aside");
		$this->load->view("panel/$page");		
		$this->load->view('t_panel/footer');
	}

	public function process()
	{
		$id		= $this->input->post('id');
		$set	= $this->input->post('s_process');		
		
		//DETAIL DATA
		if ($set == 'detail')
		{
			$page			= "pembayaran_taaruf";		
			$data['one_post']= $this->m_pembayaran_taaruf->get_one($id);
			$data['title']	= "Pembayaran Taaruf";			
			$data['judul1']	= "Detail Data Pembayaran Taaruf";	
			$data['isi']    = "pembayaran_taaruf";			
			$data['judul2']	= "";						
			$data['set']	= "detail";	
			$this->template($page, $data);	
		}
		//EDIT DATA KEGIATAN
		elseif ($set == 'approve' )
		{
			$this->m_pembayaran_taaruf->approve($id);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."pembayaranTaaruf'>";
		}
		//HAPUS DATA KEGIATAN
		elseif ($set == 'hapus' )
		{
			$this->m_guru->hapus($id);		
			$_SESSION['pesan'] 	= "Berhasil dihapus!";
			$_SESSION['tipe'] 	= "danger";	
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."pembayaranTaaruf'>";
		}
		else
		{
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."pembayaranTaaruf'>";
		}
	}
	
}

