<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Function ADMIN_model
 * 
 * Description check the DB for user authentication
*/ 
class Admin_model extends CI_Model{
	
	function __construct()
	{
		// default method goes here
	}
	
	// go into the DB and see if the user is valid using sha1 encryption
	public function verify_user($email, $password)
	{
		$q = $this
				->db
				->where('email_address', $email)
				->where('password', sha1($password))
				->limit(1)
				->get('users');
		// if there is a user return that row as an object	
		if( $q->num_rows > 0)
		{
			return $q->row();
		}
		return FALSE;
	}
	
}
/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */