<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require APPPATH."/core/REST_Controller.php";

/**
 * CodeIgniter Rest Controller extensions
 * Prevent of using uri query param, otherwise using url query param.
 * Depend to https://github.com/chriskacerguis/codeigniter-restserver
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          M. Asrofie
 * @license         MIT
 * @link            https://www.housecode.net
 * @version         1.0.0
 */
class Asc_api_controller extends REST_API implements Asc_controller {

    private $parameter;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('M_asc_api_session', 'api_session');
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $this->parameter = json_decode($stream_clean, true);
    }

    protected function process_token($role = null)
    {
        $token = $this->input->post("token");
        if ($token == null)
        {
            $token = $this->get_param("token");
        }
        $user = $this->api_session->get(array("token" => $token), true);
        if ( $user == null || ($role != null && $user['level'] != $role) )
            die;

        return $user;
    }

    protected function get_param($key)
    {
        if(array_key_exists($key, $this->parameter))
        {
            return $this->parameter[$key];
        }
        return null;
    }

    protected function send_response($res, $message = null, $response_status = true, $response_code = 200)
    {
        $param = array(
            'server_time' => date('Y-m-d H:i:s'),
            'response_status' => $response_status,
            'message' => $message,
            'data' => $res
        );
        $this->response($param, $response_code);
    }
}
