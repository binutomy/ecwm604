<!DOCTYPE HTML>
<html lang="en-UK">
<head>
<?php $this->load->view('includes/header'); ?>
	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/css/css.css" media="screen" />
</head>
<body>
		<center>
			<div class="hero-unit">
		<legend>Add Employee</legend>

			
		
		<form class="form-horizontal" form action="addfinal" method="POST">

		 
				 <div class="control-group">
    <label class="control-label" > Employee Number </label>
	  	<div class="controls"> 
			 <input type="text" id="emp_no" name="emp_no" value=""/>
		   </div></div>
		 
		
			 <div class="control-group">
    <label class="control-label" for="inputEmail"> Birth Date</label>
	  	<div class="controls"> 
		 <input type="text" id="birth_date" name="birth_date" value=""/>
			  </div></div>
			
			
			 <div class="control-group">
    <label class="control-label" for="inputEmail"> First Name</label>
	  	<div class="controls"> 
			 <input type="text" id="first_name" name="first_name" value=""/>
			    </div></div>
			  
			  
				 <div class="control-group">
    <label class="control-label" for="inputEmail"> Second Name  </label>
	  	<div class="controls"> 
			  <input type="text" id="last_name" name="last_name" value=""/> 
			       </div></div>			    
			    
			   			 <div class="control-group">
    <label class="control-label" for="inputEmail"> Gender </label>
	  	<div class="controls"> 
			   <input type="text" id="gender" name="gender" value=""/> 
			       </div></div>
			    
			 
			  <div class="control-group">
    <label class="control-label" for="inputEmail">Hire date</label>
	  	<div class="controls"> 
			     <input type="text" id="hire_date" name="hire_date" value=""/>
			       </div></div>
			    
			    
			    
			    			 
			  <div class="control-group">
    <label class="control-label" for="inputEmail">From Date</label>
	  	<div class="controls"> 
			     <input type="text" id="from_date" name="from_date" value=""/>
			       </div></div>
			    
			    
			    <div class="control-group">
    <label class="control-label" for="inputEmail">To Date</label>
	  	<div class="controls"> 
			    <input type="text" id="to_date" name="to_date" value=""/>
			       </div></div>
			       
			  <div class="control-group">
    <label class="control-label" for="inputEmail">  Department </label>
	  	<div class="controls"> 
			  <select name="dept_no">
<option value="d009" selected="d009">Customer Service</option>
<option value="d005" selected="d005">Development</option>
<option value="d002" selected="d002">Finance</option>
<option value="d003" selected="d003">Human Resources</option>
<option value="d001" selected="d001">Marketing</option>
<option value="d004" selected="d004">Production</option>
<option value="d006" selected="d006">Quality Management</option>
<option value="d008" selected="d008">Research</option>
<option value="d007" selected="d007">Sales</option>
	<option value="" selected="">Select</option>
</select>
			    </div></div>
			    
			    
			  <div class="control-group">
    <label class="control-label" for="inputEmail"> Salary</label>
	  	<div class="controls"> 
			    <input type="text" id="salary" name="salary" value=""/>
			    </div></div>
			    
			    
  <div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Add</button>	
</div></div>
			    
			    

		              
			</div>
		</form>
		</center>
		

    
                
</body>
</html>

