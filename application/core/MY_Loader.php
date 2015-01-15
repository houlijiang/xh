<?php
class MY_Loader extends CI_Loader {

    function __construct()
    {
        parent::__construct();
    }
    function set_path(){
    	//	$this->_ci_view_paths = array(APPPATH.'views/'.$path.'/'	=> TRUE);
    		$this->_ci_view_paths = array('./'=>true);
    }
}