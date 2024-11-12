<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asc_base_controller extends CI_Controller {

    private $title = '';
    private $subtitle = '';
    private $menu_name = '';
    protected $id_guru = '';
    const ALERT_SUCCESS_SAVE="Data berhasil disimpan.";
    const ALERT_SUCCESS_PUBLISH="Data berhasil dipublish.";
    const ALERT_SUCCESS_DELETE="Data berhasil dihapus.";
    const ALERT_FAILED="Terjadi kesalahan.";
    const UPLOAD_TYPE_IMAGE='icon';
    const UPLOAD_TYPE_SOUND='sound';
    const UPLOAD_TYPE_FILE='file';
    const DOC_STATUS_DRAFT='draft';
    const DOC_STATUS_PUBLISH='publish';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('m_admin');
		$this->load->model('m_pesan');
        $id_user = $this->session->userdata('id_user');
        $user    = $this->m_admin->get_one($id_user);
        if ( $user == false )
        {
            redirect(base_url() . 'panel/logout');
            exit;
        }
        $user = $user->row_array();
        $guru = $this->db->from('tabel_guru')
                    ->where('nik', $user['username'])
                    ->get();
        if ( $guru == false )
        {
            redirect(base_url() . 'panel/logout');
            exit;
        }
        $guru = $guru->row_array();
        $this->id_guru = $guru['id_guru'];
    }

    protected function to_index($query = '')
    {
        redirect( base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $query );
    }

    protected function set_title($title)
    {
        $this->title = $title;
    }

    protected function set_subtitle($sub)
    {
        $this->subtitle = $sub;
    }

    protected function set_menu_name($name)
    {
        $this->menu_name = $name;
    }

    protected function set_alert_ilegal_delete($status = '')
    {
        $this->set_alert_danger(self::ALERT_FAILED . ' Data dengan status ' . $status . ' tidak bisa dihapus.');
    }

    protected function set_alert_danger($message = '')
    {
        $this->set_alert($message, false);
    }
    protected function set_alert($message = '', $success = true)
    {
        $alert =  array();
        $alert['type'] = "alert-success";
        if ( !$success )
        {
            $alert['type'] = "alert-danger";
        }
        $alert['message'] = $message;
        $this->session->set_flashdata('alert', $alert);
    }

    protected function upload_file($id, $file_name, $type = 'icon', $removed_file = '', $id_user='')
    {
        $this->load->library('upload');
        $config['file_name']		= $id_user ."-" . date("Ymdhis") . "_" . $file_name;
        $config['max_size']			= '10000';
        $config['upload_path'] 		= $this->config->item("upload_path");
        if ( $type == self::UPLOAD_TYPE_SOUND )
        {
            $config['allowed_types'] 	= 'mp3';
        }
        if ( $type == self::UPLOAD_TYPE_IMAGE )
        {
            $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
            $config['max_width']  		= '10000';
            $config['max_height']  		= '10000';
            $config['max_size']			= '10000';
        }
        $config['file_ext_tolower']     = true;
        $config['remove_spaces']        = true;
        $config['detect_mime']          = true;
		$this->upload->initialize($config);
		if( $this->upload->do_upload($id) )
        {
			$file_name = $this->upload->file_name;
            if ( !empty($removed_file))
            {
                unlink( $config['upload_path'] . $removed_file); //Hapus Gambar
            }
            return $file_name;
		}
        return false;
    }

    protected function template($page, $data = null, $js_view = '')
	{
        $this->session->set_flashdata('js_page', $js_view);
		$name = $this->session->userdata('nama');
		if($name=="")
		{
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."panel'>";
		}else{
            $content = array(
                'judul1' => $this->title,
                'judul2' => $this->subtitle,
                'isi' => $this->menu_name,
                'title' =>  $this->title
            );
			$this->load->view('t_panel/header',$content);
			$this->load->view("t_panel/aside");
			$page = $this->load->view("panel/$page", $data, TRUE);
            $content['page'] = $page;
            $this->load->view("panel/elearning/asc_body", $content);
			$this->load->view('t_panel/footer');
		}
	}
}