<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_work extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function add(){
		$data = array(

			'w_name' => $this->input->post('w_name'),
			'w_address' => $this->input->post('w_address'),
			'w_tel' => $this->input->post('w_tel'),
			'w_gst' => $this->input->post('w_gst'),
			'w_ntn' => $this->input->post('w_ntn')
		);

		$query = $this->db->insert('workplace',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_work.php */
/* Location: ./application/models/add_work.php */