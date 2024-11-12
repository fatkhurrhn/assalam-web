<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asc_base_model extends CI_Model
{
    protected $table = '';
    protected $message_error ='';

    protected function init_rule(){}

    public function validate($data = null)
    {
        if ( $data != null )
        {
            $this->form_validation->set_data($data);
        }
        $this->init_rule();
        return $this->form_validation->run();
    }

    public function get($where = null , $single = false)
    {
        if ( $where != null )
        {
            $this->db->where($where);
        }
        $this->db->from($this->table . ' t');
        $q = $this->db->get();
        if ( $q == false)
            return false;

        if ( $single )
            return $q->row_array();
        else
            return $q->result_array();
    }

    protected function process($param = null, $use_param_only = false)
    {
        $data = array();
        if ( $use_param_only )
        {
            $data = $param;
        }
        return $data;
    }

    public function save($param = null, $where = null, $use_param_only = false)
    {
        $data = $this->process($param, $use_param_only);
        if( $data == null )
        {
            return false;
        }
        if ( $where == null )
        {
            $this->db->insert($this->table, $data);
        }
        else
        {
            $this->db->where($where);
            $this->db->update($this->table, $data);
        }
        $this->set_error(null);
        return  ($this->db->affected_rows() > 0);
    }

    public function get_error()
    {
        return $this->message_error;
    }

    protected function set_error($msg)
    {
        $this->message_error = $msg;
    }

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
        return  ($this->db->affected_rows() > 0);
	}

    public function remove_file($file)
    {
        if ( file_exists($file))
            unlink($file);
    }
}