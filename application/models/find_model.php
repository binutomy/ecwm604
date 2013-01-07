<?php
class find_model extends CI_Model {
		
			function __construct(){
		
		parent::__construct();
		$this->load->database();
		}
	
	
	
	function findemp ($emp_no,$firstname,$lastname,$title,$dept){

		$this->db->select('employees.emp_no emp_no, employees.first_name firstname, employees.last_name lastname, dept_emp.dept_no deptno ,titles.title,
		 departments.dept_name dept');
		
		$this->db->from('employees');
			$this->db->join('dept_emp', 'employees.emp_no = dept_emp.emp_no');
			$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
			$this->db->join('titles', 'employees.emp_no = titles.emp_no');
			
					$this->db->where('titles.to_date', '9999-01-01' );
			
			
				
	
			if(!empty($emp_no))
			
			{
				
				$this->db->where('employees.emp_no',$emp_no);
				
			}
			
			if(!empty($lastname))
			
			{
				
				$this->db->where('employees.last_name',$lastname);
				
			}
			
			if(!empty($firstname))
			
			{
				
				$this->db->where('employees.first_name',$firstname);
				
			}
			
			
			
			if(!empty($title))
			
			{
				
				$this->db->where('titles.title',$title);
				
			}
			
			
			if(!empty($dept))
			
			{
				
				$this->db->where('dept_emp.dept_no',$dept);
				
			}
			
			
			$query = $this->db->get();
			return $query->result();
			
	
	}
	
	
	
	
}
