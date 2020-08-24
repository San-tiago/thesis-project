<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function can_login($username, $password){
		$this->db->where('user_name', $username);
        $this->db->where('password', $password);
       $query = $this->db->get('tbl_users');

       if($query->num_rows()> 0){
            return true;
       }
       else{
           return false;
       }
	}

	
	}


    
