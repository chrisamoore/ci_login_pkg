<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
<<<<<<< HEAD
/**
 * Login Controller Class
 * 
 * Description: This is a User Login Class Controller
 * Requres: Phil Sturgeons' Template class http://getsparks.org/packages/template/show
 * 
 * @license     GNU General Public License    
 * @author      Christopher A. Moore
 * @link        http://camdesigns.net
 * @email       chris@camdesigns.net
 * 
 * @file        login.php
 * @version     2.1  
 * 
 * Copyright (c) 2011
 */ 
=======

>>>>>>> ba4d707... init commit
class Login extends CI_Controller {
	function __construct()
	{
			// run the CI Controllers default methods, then start the session library
			parent :: __construct();
			session_start();	
	}

	/**
	 *login controller 
	 */
	public function index()
	{
		// check if the user is logged in... if so let them admin 
		if(isset($_SESSION['username']))
		{
			redirect('admin');
		}	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
			if ($this->form_validation->run() !==false )
				{
					// check the DB to see if the user is valid and bind that to a var $res
					$this->load->model('admin_model');
					$res = 	$this
								->admin_model
									->verify_user(
										$this->input->post('email_address'),
									 	$this->input->post('password')
									 );
							// if the result is true let them into the admin area
							if($res !== FALSE)
								{
									$_SESSION['username'] = $this->input->post('email_address');
									redirect('admin');
								}
				}
			
		//build the login view with the template
		$this->template->set_layout('cam');
		$this->template->build('login_view');
	}
	
	public function logout()
	{
		// on logout sedn 'em to the frontend
		session_unset();
		redirect('frontend');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */