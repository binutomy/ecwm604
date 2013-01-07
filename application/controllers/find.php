<?php
class Find extends CI_Controller {
	
function index() {
	$data ['title'] =  "find";
	$this->load->view('basic', $data);
}

	function findemp (){

	
		$emp_no = $this->input->get('emp_no');
		$firstname = $this->input->get('firstname');
		$lastname = $this->input->get('lastname');
			
		$title = $this->input->get('title');
		$dept =$this->input->get('dept');

		$this->load->model('find_model');
		
		if (empty($emp_no) && empty($lastname) && empty($firstname) && empty($title) && empty($dept)) {
			$data = ('');
		} else {
		$data['query'] = $this->find_model->findemp ($emp_no,$firstname,$lastname,$title,$dept);
		}
		$this->load->view('basic', $data);
		
				
	
				echo json_encode($data);
	
	}

}

