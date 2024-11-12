<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		//$this->load->view('t_setting/header',$data);		
		$this->load->view("panel/$page",$data);		
		//$this->load->view("t_setting/aside");
		//$this->load->view('t_setting/footer');
	}
	public function index()
	{		
		$data['judul']	= "Installation";				
		$data['isi']	= "setting";				
		$page			= "login";		
		$this->template($page,$data);
	}
	public function set_db()
	{					
		$server = $_POST['server'];
		$dbname = $_POST['dbname'];
		$user 	= $_POST['user'];
		$password = $_POST['password'];
		$conn = new mysqli($server, $user, $password);		
		$cek = $conn->query("CREATE DATABASE ".$dbname);		
		if($cek){
			echo "nihil";		
		}				
	}	
	public function import()
	{							
				
		  $isi_file = file_get_contents('./assets/dbs_absence.sql');
		  $string_query = rtrim( $isi_file, '\n;' );
		  $array_query = explode(';', $string_query);
		  foreach($array_query as $query)
		  {
		    $this->db->query($query);
		  }
		 
		 	unlink("c:/xampp/htdocs/web_absence/assets/panel/font-awesome/fonts/SEC.PDO");
			echo "nihil";
	}

	public function login()
	{
		$username =	$this->input->post('username'); 
		$password = md5($this->input->post('password'));
		
		$rs_login = $this->m_admin->login($username, $password);
		if ($rs_login->num_rows() == 1)
		{	
			
				$row = $rs_login->row();			
				$ses_loginadmin = array( 'username'  => $row->username,
										 'nama' => $row->nama,
										 'level' => $row->level,									 
										 'id_user' => $row->id_user);
				$this->session->set_userdata($ses_loginadmin);			
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin/home'>";			
		}else{
			$_SESSION['pesan'] 	= "Login Gagal!";
			$_SESSION['tipe'] 	= "danger";
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin'>";
		}		
	}

	public function logout()
	{
	session_destroy();
	session_unset();
	echo "<meta http-equiv='refresh' content='0; url=".base_url()."panel'>";
	}

	public function home()
	{
		$page			= "index";		
			$data['title']	= "Dashboard";			
			$data['isi']	= "dashboard";				
			$data['judul1']	= "Dashboard";			
			$data['judul2']	= "Control Panel";			
			$this->load->view('t_panel/header',$data);
		$this->load->view("t_panel/aside");
		$this->load->view("panel/$page");		
		$this->load->view('t_panel/footer');	
	}

	public function produk()
	{		
		$page			= "produk";	
		$data['isi']    = "produk";	
		$data['title']	= "Produk";			
		$data['judul1']	= "Produk";			
		$data['judul2']	= "";					
		$data['set']	= "view";	
		$data['dt_produk'] = $this->m_produk->get_all();		
		$this->load->view('t_panel/header',$data);
		$this->load->view("t_panel/aside");
		$this->load->view("panel/$page");		
		$this->load->view('t_panel/footer');
	}

	public function pembayaranTaaruf()
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
}

