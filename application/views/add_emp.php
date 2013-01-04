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
			  <input type="text" id="dept_no" name="dept_no" value=""/>
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

