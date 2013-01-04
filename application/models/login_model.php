<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
		$pass = sha1($password);
        // Prep the query
        $this->db->where('Username', $username);
        $this->db->where('Password', $pass);
        // Run the query
		$query = $this->db->get('users');
		
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'username' => $row->Username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
			redirect('employees');
           
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>