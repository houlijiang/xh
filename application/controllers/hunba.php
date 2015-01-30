<?php
class hunba extends MY_Controller{
	public function index(){
		$data['title'] = "新婚520";
		$this->load->view('hunba_home',$data);
	}
}