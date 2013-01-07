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
		<legend>Update Job Title</legend>

			
		
		<form class="form-horizontal" form action="Title" method="POST">

		 
				 <div class="control-group">
    <label class="control-label" for="inputEmail"> Employee Number </label>
	  	<div class="controls"> 
			 <input type="text" id="emp_no" name="emp_no" value=""/>
		   </div></div>


			  <div class="control-group">
    <label class="control-label" for="inputEmail"> Job Title</label>
	  	<div class="controls"> 
			    <input type="text" id="title" name="title" value=""/>
			    </div></div>
			    
			    
  <div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Update</button>	
</div></div>
			    
			    

		              
			</div>
		</form>
		</center>
		

    
                
</body>
</html>

