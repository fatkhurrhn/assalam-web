<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		//===== Load Library =====
		$this->load->library('upload');	
	}
	public function index()
	{		
		$data['judul']	= "Installation";				
		$data['isi']	= "setting";				
		$page			= "home";		
		$this->load->view("panel/$page");	
	}
	
}

