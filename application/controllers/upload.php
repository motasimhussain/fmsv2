<?php

class Upload extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
		$this->load->model('general_query');
		$data = array();
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$user_id = $this->input->post('user_id');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $user_id;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if($this->upload->do_upload()){
			$data = $this->upload->data();
			$this->general_query->update_usr_img($data['file_name']);
			redirect('site/add_usr');
		}else{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}

		// if ( ! $this->upload->do_upload())
		// {
		// 	$error = array('error' => $this->upload->display_errors());

		// 	$this->load->view('upload_form', $error);
		// }
		// else
		// {
		// 	$data = array('upload_data' => $this->upload->data());

		// 	$this->load->view('upload_success', $data);
		// }
	}
}
?>