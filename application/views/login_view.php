<html>
	<head>
		<style>
			
			
#login_form {
	width: 300px;
	background: #eeeeee  ;
	border: 1px solid white;
	margin: 250px auto 0;
	padding: 1em;
	-moz-border-radius: 3px;
}

}

input[type=text], input[type=password] {
	display: block;
	margin: 0 0 1em 0;
	width: 280px;
	border: 5px;
	-moz-border-radius: 1px;
	-webkit-border-radius: 1px;
	padding: 1em;
}

input[type=submit], form a {
	border: none;
	margin-right: 1em;
	padding: 6px;
	text-decoration: none;
	font-size: 12px;
	-moz-border-radius: 4px;
	background: #999990;
	color: white;
	box-shadow: 0 1px 0 white;
	-moz-box-shadow: 0 1px 0 white;
	-webkit-box-shadow: 0 1px 0 white;

}

input[type=submit]:hover, form a:hover {
	background: #287368;
	cursor: pointer;
}


.error {
	color: #393939;
	font-size: 15px;
}

fieldset {
	width: 300px;
	margin: auto;
	margin-bottom: 2em;
	display: block;
}

			
		</style>
		
		
	</head>

   






    <div id='login_form'>
        <form action='<?php echo base_url('index.php/login/Process');?>' method='post' name='process'>
            <h2>User Login</h2>
            <br />            
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='20' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='20' /><br />                            
        
      
            <input type='Submit' value='Login' />            
        </form>
        <center>
        	
        	
        	
        <a href='<?php echo base_url('index.php/find/findemp');?>'>Search</a><br /> 
        </center>
    </div>
</body>
</html>