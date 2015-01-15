<?php
class MY_model extends CI_Model{
	public $statusCode = 200;
	public $message = '操作成功';
	public function __construct(){
		parent::__construct();
		$this->load->library("data");
	}
	
	public function page(&$post){
		$page = isset($post['pageNum'])?intval($post['pageNum']):1;
		$page_size = isset($post['numPerPage'])?intval($post['numPerPage']):20;
		$post['page_size'] = $page_size;
		$post['cur_page'] = $page;
		$page = $page<=1?1:$page;
		$post['limit'] = ($page-1)*$page_size;
	}
    function post(){
    	$post = $this->input->post();
    	$get = $this->input->get();
    	if(!empty($get)){
	    	foreach($get as $k=>$v){
	    		$post[$k]=$v;
	    	}
    	}
    	return $post;
    }
	public function update($table=''){
		$id = $this->input->post('id');
		$temp = $post = $this->input->post();
		foreach ($post as $k=>$v){
		if(!in_array($k, $this->get_fields($table)))
			unset($post[$k]);
		}
		if(intval($id)>0){
			$res = $this->data->update($table,$post,array('id'=>$id));
			
		}else{
			if(in_array("create_time", $this->get_fields($table))){
				$post['create_time'] = date("Y-m-d H:i:s");
			}
			$res = $this->data->insert($table,$post);
			
		}
		if(!$res){
			$this->statusCode = 300;
			$this->message = "删除失败!";
		}
		
	}
    function del($table,$id){
   		$res = $this->data->update($table,array('is_delete'=>1),array('id'=>intval($id)));
		if(!$res){
			$this->statusCode = 300;
			$this->message = "删除失败!";
		}
    }
    function get_info($table,$id){
    	if(intval($id)>0){
    		$query = $this->data->db->get_where($table,array('id'=>intval($id)));
    		$info = $query->row_array();
    	}else{
    		$fields = $this->data->db->field_data($table);
			foreach ($fields as $field)
			{
				if($field->type=='int'){
						$val = 0;
				}else{
					$val = '';
				}
				$info[$field->name] = $val;
			} 
    		
    	}
    	return $info;
	    	
    }
}