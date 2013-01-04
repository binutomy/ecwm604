   
<?php $this->load->view('includes/loginheader'); ?>



    <div id='login_form'>
        <form action='<?php echo base_url('login/Process');?>' method='post' name='process'>
            <h2>User Login</h2>
            <br />            
            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='20' /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='20' /><br />                            
        
      
            <input type='Submit' value='Login' />            
        </form>
        <center>
        	
        	
        	
        <a href='<?php echo base_url('basic/searchEmployee');?>'>Search</a><br /> 
        </center>
    </div>
</body>
</html>