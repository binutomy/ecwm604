<?php
class Basic extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('basic_model');
	
		
    }


	public function index(){
        
      
    }


	function searchEmployee(){

		$limit =100;
		$emp_no = $this->input->get('emp_no');
		$last_name = $this->input->get('last_name');
		$title =$this->input->get('title');
		$dept_no =$this->input->get('dept_no');
		
		$this->load->model('basic_model');
		
		if (empty($emp_no) && empty($last_name) && empty($title) && empty($dept_no)) {
			$data = ('');
		} else {
		$data['query'] = $this->basic_model->searchEmployee($emp_no,$last_name,$title,$dept_no,$limit);
		}
		$this->load->view('basic', $data);
	}

}

