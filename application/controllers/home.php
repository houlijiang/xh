<?php 
class home extends MY_Controller{
	
	public function index($page=0){
		$this->load->model('goods_model');
		$data['title'] = '新婚';
		$data = $this->goods_model->get_list(0,$page);
		$data['page'] = $this->page('/home/index/',3, $data['total'],5);
		$this->load->view("index.html",$data);
	}
}

?>