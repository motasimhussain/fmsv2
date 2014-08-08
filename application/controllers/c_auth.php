<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_auth extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$this->load->model('auth');

		if($this->auth->verify()){

			$data = array(
				'user' =>$this->input->post('username'),
				'is_logged_in' => 'true'
			);

			if($this->input->post('username') != ""){
				$this->session->set_userdata($data);
				redirect('site');
			}else{
				redirect('c_auth');
			}

		}else{
			//$this->load->view('View File');
			$this->session->sess_destroy();
			redirect('c_auth');
		}
	}

}

/* End of file c_auth.php */
/* Location: ./application/controllers/c_auth.php */