<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		redirect('c_auth');
	}

}


/* End of file logout.php */
/* Location: ./application/controllers/logout.php */