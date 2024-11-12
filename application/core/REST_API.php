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
 * @author          Prastio, C. Agung
 * @license         MIT
 * @link            https://www.housecode.net
 * @version         1.0.0
 */
abstract class REST_API extends REST_Controller {
    protected function _parse_get(){
        $this->checkURI();
        parent::_parse_get();
    }

    protected function _parse_post(){
        $this->checkURI();
        parent::_parse_post();
    }

    protected function _parse_put(){
        $this->checkURI();
        parent::_parse_put();
    }

    protected function _parse_head(){
        $this->checkURI();
        parent::_parse_head();
    }

    protected function _parse_options(){
        $this->checkURI();
        parent::_parse_options();
    }

    protected function _parse_patch(){
        $this->checkURI();
        parent::_parse_patch();
    }

    protected function _parse_delete(){
        $this->checkURI();
        parent::_parse_delete();
    }

    protected function _parse_query(){
        $this->checkURI();
        parent::_parse_query();
    }

    private function checkURI() {
        $x = count($this->uri->segments);
        $cls = $this->router->fetch_class();
        $opt = null; $ex = null;

        foreach(array_reverse($this->uri->segments) as $key => $val) {
            if($val == $cls) break;
            if($opt == null) {
                $ex = $opt = $val;
            } else {
                $ex = $opt;
                $opt = $val;
            }
        }

        $exists = false;
        if($ex == $opt) {
            if($opt != null) { // find requested function
                $exists = method_exists($this, $opt."_".$this->_detect_method());
                // try with request method
                if(!$exists)
                    $exists = method_exists($this, $opt);
            } else { // find index
                $exists = method_exists($this, "index_".$this->_detect_method());
                // try with request method
                if(!$exists)
                    $exists = method_exists($this, "index");
            }
        }

        if(!$exists) $this->showError();
    }

    private function showError() {
        show_error("Directory access is forbidden.",403,"403 forbidden");
        die;
    }
}
