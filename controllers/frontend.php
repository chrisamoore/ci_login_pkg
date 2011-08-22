<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

	
	public function index()
	{
		//build the frontend view with the template
		$this->template->set_layout('cam');
		$this->template->build('frontend_view');
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/frontend.php */