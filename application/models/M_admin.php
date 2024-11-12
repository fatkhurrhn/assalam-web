<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function __construct()
	{		
		parent::__construct();		
	}
	public function get_one($id)
	{
		$sql = "select * from tabel_user where id_user = '$id' ";
		return $this->db->query($sql);
	}
	public function get_setting()
	{
		$sql = "select * from tabel_setting where id_setting = '1'";
		return $this->db->query($sql);
	}
	public function delete($tables,$pk,$id){
        $this->db->where($pk,$id);
        $this->db->delete($tables);
    }
	public function get_all()
	{
		$sql = "select * from tabel_user where level <> 'super admin'";
		return $this->db->query($sql);
	}
	public function kondisiCond($tables,$where)
  {
      $this->db->where($where);                 
      return $this->db->get($tables);
  }
  public  function getByID($tables,$pk,$id){
      $this->db->where($pk,$id);
      return $this->db->get($tables);
  }
	public function cek_user($id)
	{
		$sql = "select * from tabel_user where username = '$id' ";
		return $this->db->query($sql);
	}
	function login($username, $password)
	{
		$sql = "select * from tabel_user where username = '$username' AND password = '$password'";
		return $this->db->query($sql);	
	}	
	function edit($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('tabel_user', $data); 
	}
	function edit_setting($id, $data)
	{
		$this->db->where('id_setting', $id);
		$this->db->update('tabel_setting', $data); 
	}
	function edit_akun($id, $data)
	{
		$this->db->where('username', $id);
		$this->db->update('tabel_user', $data); 
	}
	function hapus($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tabel_user'); 
	}
	public function tambah($data)
	{
		$query=$this->db->insert('tabel_user',$data);
	}
	public function tambah_pesan($data)
	{
		$query=$this->db->insert('tabel_pesan',$data);
	}
	public function simpan($tabel,$data)
	{
		$query=$this->db->insert($tabel,$data);
	}
	function ubah($tabel,$key,$id,$data)
	{
		$this->db->where($key, $id);
		$this->db->update($tabel, $data); 
	}
	public function cek_code($c){
		$code 	= $c;
		$sc  		= "assets/panel/font-awesome/fonts/SEC.PDO";
		$lines  = file_get_contents(base_url()."assets/panel/font-awesome/fonts/FILE.PDO");
    $baris  = explode("\n", $lines);             				
		// Store true when the text is found
		$found = false;
		foreach($baris as $line)
		{
		  if(strpos($line, $code) !== false)
		  {
		    $found = true;
		    $line2 = "1";

		    if(!file_exists($sc)){					
	        $handle = fopen($sc, 'w') or die('Cannot open file:  '.$sc);						
		    }
		    $tes  	= file_get_contents(base_url()."assets/panel/font-awesome/fonts/SEC.PDO");	 
		    $pc = getenv('COMPUTERNAME');       					    	
		    $pc_name = strtolower($pc); if($pc_name == '') $pc_name = 'ascsystem';
        $baris  = explode("|", $tes);             				
				// Store true when the text is found
				$found = false;
				foreach($baris as $line)
				{
				  if(strpos($line, $pc_name) !== false)
				  {
				    $found = true;
				    $line4 = "1";
				  }
				}
				// If the text was not found, show a message
				if(!$found)
				{
				  $line4 = "0";
				}

				if($line4 == 0){
					$data = "|".$pc_name;
	        $handle = fopen($sc, 'a') or die('Cannot open file:  '.$sc);				
					fwrite($handle, $data);	
				}
        
		  }
		}
		
		return $line2;
	}
	public function get_code(){
		$pc = getenv('COMPUTERNAME');       					    	
		$pc_name = strtolower($pc); if($pc_name == '') $pc_name = 'ascsystem';
		$sc  		= "assets/panel/font-awesome/fonts/SEC.PDO";			
		if(file_exists($sc)){
			$lines  = file_get_contents(base_url()."assets/panel/font-awesome/fonts/SEC.PDO");
	    $baris  = explode("|", $lines);             				
			// Store true when the text is found
			$found = false;
			foreach($baris as $line)
			{
			  if(strpos($line, $pc_name) !== false)
			  {
			    $found = true;
			    $line2 = "1";
			  }
			}
			if(!$found)
			{
			  $line2 = "0";
			}
		}else{
			$line2 = "0";
		}
		// If the text was not found, show a message
		
		return $line2;
	}
}