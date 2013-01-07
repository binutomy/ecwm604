<!DOCTYPE HTML>
<html lang="en-UK">
<head>
<?php $this->load->view('includes/loginheader'); ?>
	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/css/css.css" media="screen" />
</head>

<script>
	$(document).ready(function(){
	$('#search_results').click(function(e) {
		e.preventDefault();
		var querystring = "basic/searchEmployee?";
		if ($('#emp_no').val() != ''){
			querystring += "emp_no=" + $('#emp_no').val();
		}
		if ($('#last_name').val() != ''){
			querystring += "&last_name=" + $('#last_name').val();
		}
		if ($('#dept_no').val() != ''){
			querystring += "&dept_no=" + $('#dept_no').val();
		}
		if ($('#title').val() != ''){
			querystring += "&title=" + $('#title').val();
		}
		$.getJSON(querystring,
			null,
			function(data){
			$.each(data, function() {
				$.each(this, function(i, item) {
					$('.search_results tbody').append(
					'<tr>' +
					'<td>' + item.emp_no + '</td>' +
					'<td>' + item.last_name + '</td>' +
					'<td>' + item.dept_no + '</td>' +
					'<td>' + item.title + '</td>' +
					'</tr>'
					);
				});
			});
		});
	});
});
	
	
</script>


<style>
		body{
			background-color:white;
		}
		
		* {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid #666666;
			padding:  4px;
		}
		div {
			margin: 4px;
		}

		label {
			display: inline-block;
			width: 120px;
		}
		.search tr:nth-child(odd) {
			background:#C4B0B7;
		}
		
			.navbar ul { 
			margin: 0; 
			padding: 10px; 
			list-style-type: none; 
			text-align: center; 
			background-color: #000;
			font-family: sans-serif; 
			} 
			
			.navbar ul li { 
			display: inline;
			font-family: sans-serif; 
			} 
			
			.navbar ul li a { 
			text-decoration: none; 
			padding: .2em 5em; 
			color: #fff; 
			background-color: #000;
			font-family: sans-serif; 
			} 
			
			.navbar ul li a:hover { 
			color: #000; 
			background-color: #fff;
			font-family: sans-serif; 
			}
					
					
	</style>

<script language="javascript">

</script>
<body>

<center>
	

<table class="table search">

<form class="form-horizontal" form action="findemp" method="GET" >

<div class="hero-unit">
	
	
	      <h3><a href="/codeigniter/index.php/login">Login</a></h3>

	 <legend>Enter Your Search</legend>

	  	<label >Employee No</label>

	<input type= "text" id= "title" name="emp_no">

	  	<label >First name</label>
	  	
		 <input type= "text" name="firstname">	

<br />

	  	<label >Last name</label>
	  	
		 <input type= "text" name="lastname">	

<br />
	  	<label>Title</label>

	  		<input type= "text" name="jobtitle">	

	  	<label >	Departments</label>

	<select name="dept">
	
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



<div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Search</button>
</div></div>

 <div id='result'></div>
        </div>


	
</form>
</div>
<?php 
if(isset ($data)){
echo json_encode($data); 
}
?>
		
	

		<thead>
                		<th>Employee_No</th>
 
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Title</th>

                        <th>Department</th>
                		
                    
                        
                </thead>
                <tbody>
                	<?php if (isset($query) && (count($query) > 0)) : ?>
                	<?php foreach($query as $employee): ?>

                    <tr>
                    	<td> <?php echo($employee->emp_no); ?></td>

                        <td> <?php echo($employee->firstname); ?></td>
                        <td> <?php echo($employee->lastname); ?></td>
                        <td> <?php echo($employee->title); ?></td>
              
                        <td> <?php echo($employee->dept); ?></td>
                        
                        
                        
                    </tr>   
					<?php endforeach; ?>
					<?php endif;?>
                </tbody>
                

                </table>
</center>

                
 <br/>     
                
</body>
</html>

