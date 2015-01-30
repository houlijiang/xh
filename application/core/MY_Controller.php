<?php
class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
	//	$this->load->set_path();
	}
	public function page($url,$uri=3,$total,$page_size=10){
		$this->load->library('pagination');
		$config['base_url'] = $url;
		$config['total_rows'] = $total;
		$config['per_page'] = $page_size; 
		
		$config['prev_tag_open'] = '<li class="disabled">';
		$config['prev_tag_close'] = '</li>';
		
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['uri_segment'] = $uri;
		
		$this->pagination->initialize($config); 
		
		return $this->pagination->create_links();
		
	}
}