<?php
class Employees extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
		$this->check_isvalidated();
		$this->load->helper('url');
    }
	
	
	public function index(){
        // If the user is validated, then this function will run

		redirect('employees/searchEmployee');
        // Add a link to logout
      
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 
	function add()
{
	
			$this->load->view('add_emp');
	
	
}
	function addfinal(){


		$emp_no = $this->input->post('emp_no');
		$birth_date= $this->input->post('birth_date');
		$first_name =$this->input->post('first_name');
		$last_name =$this->input->post('last_name');
		$gender =$this->input->post('gender');
		$hire_date =$this->input->post('hire_date');
		
		$dept_emp =$this->input->post('dept_emp');
		$from_date =$this->input->post('from_date');
		
		$to_date = $this->input->post('to_date');
		$dept_no = $this->input->post('dept_no');
		$salary = $this->input->post('salary');
		
		$this->load->model('employee_model');
		$this->employee_model->create($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$to_date,$dept_no,$salary,$dept_emp,$from_date,$to_date);
		$this->load->view('success');
		}
	
	
		function delete()
		{
			
					$this->load->view('delete');

		}
	
	
		function deletefinal(){
	
		
			$emp_no = $this->input->post('emp_no');
		
			$this->load->model('employee_model');
			$this->employee_model->delete($emp_no);
			$this->load->view('success');
		}
		

	function searchEmployee(){



		$limit =100;
		$emp_no = $this->input->get('emp_no');
		$last_name = $this->input->get('last_name');
		$title =$this->input->get('title');
		$dept_no =$this->input->get('dept_no');
		
		$this->load->model('employee_model');
		
		if (empty($emp_no) && empty($last_name) && empty($title) && empty($dept_no)) {
			$data = ('');
		} else {
		$data['query'] = $this->employee_model->searchEmployee($emp_no,$last_name,$title,$dept_no,$limit);
		}
		$this->load->view('employees', $data);
	}
	
	function updateSalary()
		{
			
					$this->load->view('updateSalary');

		}
		
		function Salary(){
	
		
			$emp_no = $this->input->post('emp_no');
			$salary = $this->input->post('salary');

			$this->load->model('employee_model');
			$this->employee_model->Salary($emp_no,$salary);
			$this->load->view('success');
		}
		
		function updatejobtitle()
		{
			
					$this->load->view('updatejobtitle');

		}
		
		
	function Title(){
	
		
			$emp_no = $this->input->post('emp_no');
			$title = $this->input->post('title');

			$this->load->model('employee_model');
			$this->employee_model->Title($emp_no,$title);
			$this->load->view('success');
		}
		
		function promote()
		{
			
					$this->load->view('promote');

		}
		
		
	function promoteManager(){
	
		$dept_no = $this->input->post('dept_no');
			$emp_no = $this->input->post('emp_no');
		$from_date =$this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		
		
		

			$this->load->model('employee_model');
			$this->employee_model->promote($dept_no,$emp_no,$from_date,$to_date);
			$this->load->view('success');
		}
		
		function demote()
		{
			
					$this->load->view('demote');

		}
		
		
	function demoteManager(){
	
	
			$emp_no = $this->input->post('emp_no');
		$this->load->model('employee_model');
			$this->employee_model->demote($emp_no);
			$this->load->view('success');
		}
	
	function move()
		{
			
					$this->load->view('move');

		}
		
		
	function movedepartments(){
	
	
			$emp_no = $this->input->post('emp_no');
			$dept_no = $this->input->post('dept_no');
			
		$this->load->model('employee_model');
			$this->employee_model->move($emp_no,$dept_no);
			$this->load->view('success');
		}
	

}

