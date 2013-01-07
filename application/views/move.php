<!DOCTYPE HTML>
<html lang="en-UK">
<head>
<?php $this->load->view('includes/header'); ?>
	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/codeigniter/css/css.css" media="screen" />
</head>
<body>
		<center>
			<div class="hero-unit">
		<legend>Move Departments</legend>

			
		
		<form class="form-horizontal" form action="movedepartments" method="POST">

		 
				 <div class="control-group">
    <label class="control-label" > Employee Number </label>
	  	<div class="controls"> 
			 <input type="text" id="emp_no" name="emp_no" value=""/>
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
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Move</button>	
</div></div>
			    

		              
			</div>
		</form>
		</center>
		

    
                
</body>
</html>

