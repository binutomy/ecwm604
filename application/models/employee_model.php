<?php
class Employee_model extends CI_Model {
		
			function __construct(){
		
		parent::__construct();
		$this->load->database();
		}
	
	function search($limit,$offset) {

		// results query
		$q = $this->db->select('employees.emp_no AS emp, employees.first_name AS firstname, employees.last_name AS lastname, employees.gender AS gender, employees.hire_date AS hiredate, dept_emp.dept_no AS dept,titles.title AS jobtitle,
		 departments.dept_name AS dept, departments.dept_id AS deptid','salaries.salary');
		 $this->db->select("IF('employees'.'emp_no' = 'dept_manager'.'emp_no', 1, 0)AS ismanager", FALSE);
			$this->db->from('employees');
				$this ->db->limit($limit, $offset);
			$this->db->join('dept_emp', 'employees.emp_no = dept_emp.emp_no');
			$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
			$this->db->join('titles', 'dept_emp.emp_no = titles.emp_no');
			$this->db->join('salaries', 'employees.emp_no = salaries.emp_no');
			$this->db->join('dept_manager', 'dept_manager.emp_no= employees.emp_no', 'left');
		
		$ret['rows'] = $q->get()->result();
		
		$q= $this->db->select('COUNT(*) as count', FALSE)
			->from('employees');

		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		return $ret;
		
	}
	
	function create($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$to_date,$dept_no,$salary,$dept_emp,$from_date,$to_date){
			
		$this->db->set('emp_no', $emp_no);
		$this->db->set('birth_date', $birth_date);
		$this->db->set('first_name', $first_name);
		$this->db->set('last_name', $last_name);
		$this->db->set('gender', $gender);
		$this->db->set('hire_date', $hire_date);
		
		$query= $this->db->insert('employees');
		
	
		//dept_emp table
		$this->db->set('emp_no', $emp_no);
		$this->db->set('dept_no', $dept_no);
		$this->db->set('from_date', $from_date);
		$this->db->set('to_date', $to_date);
		$query= $this->db->insert('dept_emp');

	//into salaries
	$this->db->set('emp_no', $emp_no);
	$this->db->set('salary', $salary);
	$this->db->set('from_date', $from_date);
	$this->db->set('to_date', $to_date);
	$query= $this->db->insert('salaries');
	
	
	
	}
	
	function searchEmployee($emp_no,$last_name,$title,$dept_no,$limit){
			


			
		$this->db->select('*');
		$this->db->from('employees');
			$this->db->join('dept_emp','employees.emp_no = dept_emp.emp_no');
			$this->db->join('titles','dept_emp.emp_no = titles.emp_no');
			$this->db->join('salaries', 'dept_emp.emp_no = salaries.emp_no');
			$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
				$this->db->where('titles.to_date', '9999-01-01' );
				$this->db->where('salaries.to_date', '9999-01-01' );
				$this->db->limit($limit);
				
	
			if(!empty($emp_no))
			
			{
				
				$this->db->where('employees.emp_no',$emp_no);
				
			}
			
			if(!empty($last_name))
			
			{
				
				$this->db->where('employees.last_name',$last_name);
				
			}
			
			
			if(!empty($title))
			
			{
				
				$this->db->where('titles.title',$title);
				
			}
			
			
			if(!empty($dept_no))
			
			{
				
				$this->db->where('dept_emp.dept_no',$dept_no);
				
			}
			
			
			$query = $this->db->get();
			return $query->result();
			
	
	}
	
		function delete($emp_no){
	
	
			$this->db->set('emp_no', $emp_no);
			$this->db->delete('employees', array('emp_no' => $emp_no)); 
			
		}

			 function Salary($salary,$emp_no)
			{
			       $data = array(
			              'salary' => $salary,
			              'emp_no' => $emp_no
			              
			           );
			                       $this->db->where('emp_no', $emp_no);
			                       $this->db->update('salaries', $data); 
			                                       
			}




		/**function update($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date,$to_date,$dept_no,$salary,$dept_emp,$from_date,$to_date){
		
		
		
		
		$data = array(
	               'emp_no' => $emp_no,
	               'first_name' => $first_name,
	                 'last_name' => $last_name,
	                   'gender' => $gender,
	               'hire_date' => $hire_date
	                );
	
				$this->db->where('emp_no', $emp_no);
				$this->db->update('employees', $data);
			
		
		
		}**/


		  function promote($empno,$dept_no,$hire_date,$to_date)
		{
		       
		               //Add employee details into the dept_manager table
		               $this->db->set('emp_no', $empno);
		               $this->db->set('dept_no', $dept_no);
		               $this->db->set('from_date', $hire_date);
		               $this->db->set('to_date', $to_date);
		               $query= $this->db->insert('dept_manager');
		               
		}
			function demote($empno)
		{
		       
		               //delete employee from dept_manager table
		           $this->db->delete('dept_manager', array('emp_no' => $empno));         
		               
		}
				
				
		function move($empno,$dept_no)
		{
		       
		 $data = array(
		       
		  'emp_no' => $empno,
		  'dept_no' => $dept_no,
		              
		 );
		   $this->db->where('emp_no', $empno);
		 $this->db->update('dept_emp', $data); 
                                       
               
}
	
	
}
