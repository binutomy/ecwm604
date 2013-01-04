<!DOCTYPE HTML>
<html lang="en-UK">
<head>
<?php $this->load->view('includes/loginheader'); ?>
	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/codeigniter/css/css.css" media="screen" />
</head>

<style>
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
	</style>

<script language="javascript">
    $('#search').click(function() {
        var findurl = 'http://www.ecwm604.us/' + $('#s_id').val() + '/index.php/basic/searchEmployee';
        $.ajax({ url: findurl,
                 data: {
                        firstname : $('#emp_no').val(),
                        lastname : $('#last_name').val(),
                        dept : $('#title').val(),
                        jobtitle : $('#dept_no').val()
                        },
                 success: function(data) {
                           if (data == null) {
                               $('#submit').val('No data received');
                               return;
                           }
                           if ((typeof data.count === 'undefined') || (typeof data.results === 'undefined')) {
			       var json_text = JSON.stringify(data, null, 2);
                               $('#submit').html('Bad response: ' + json_text);
                           }
                           else {
			       var json_text = JSON.stringify(data, null, 2);
                               $('#submit').html('JSON response with correct count and result fields<br /> ' + json_text);
                           }
                          },
                 dataType: 'json',
                 type: 'get',
                 error: function(jqxhr,textstatus,errorthrown) {
                     var str = JSON.stringify(jqxhr, null, 2);
                     alert('request failed ' + str);
                 }
                });
        return false;
    });

    $('#submit').click(function() {
        $('#result').val('');
        $('#emp_no').val('');
        $('#last_name').val('');
        $('#title').val('');
        $('#dept_no').val('');
    });
</script>
<body>

<center>
	

<table class="table search">

<form class="form-horizontal" form action="searchEmployee" method="GET" >

<div class="hero-unit">
	
	
	      <h3><a href="/codeigniter/index.php/login">Login</a></h3>

	 <legend>Enter Your Search</legend>

	  	<label >Employee No</label>

	<input type= "text" name="emp_no">

	  	<label >Last name</label>
	  	
		 <input type= "text" name="last_name">	

<br />
	  	<label>Title</label>

	  		<input type= "text" name="title">	

	  	<label >	Departments</label>

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



<div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Search</button>
</div></div>

 <div id='result'></div>
        </div>


	
</form>
</div>

	
                <tbody>
                	<?php if (isset($query) && (count($query) > 0)) : ?>
                	<?php foreach($query as $employee): ?>

                    <tr>
                    	<td> <?php echo($employee->emp_no); ?></td>

                        <td> <?php echo($employee->first_name); ?></td>
                        <td> <?php echo($employee->last_name); ?></td>
                     
               
                        <td> <?php echo($employee->dept_no); ?></td>
                        <td> <?php echo($employee->title); ?></td>

                        
                        
                    </tr>   
					<?php endforeach; ?>
					<?php endif;?>
                </tbody>
                
                </table>
</center>

                
 <br/>     
                
</body>
</html>

