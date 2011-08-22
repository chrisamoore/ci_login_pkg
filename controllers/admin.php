<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 *Admin controller 
	 */
	public function __construct()
	{
		parent:: __construct();
		session_start();
		// check to see if user is logged in... if not send 'em to the frontend
		if(!isset($_SESSION['username']))
		{
			redirect('frontend');
		}	
			
	}
	public function index()
	{
		//build the admin view with the template
		$this->template->set_layout('cam');
		$this->template->build('admin_view');
		// create add user CRUD 
		// create Pages CRUD
		// create projects CRUD
		// create snippets CRUD 
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/admin.php */