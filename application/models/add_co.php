<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_co extends CI_Model {

	function add(){
		$data = array(

			'c_name' => $this->input->post('c_name'),
			'c_address' => $this->input->post('c_address'),
			'c_tel' => $this->input->post('c_tel'),
			'c_gst' => $this->input->post('c_gst'),
			'c_ntn' => $this->input->post('c_ntn')
		);

		$query = $this->db->insert('company',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}


	function edit(){
		$data = array(
			'c_name' => $this->input->post('c_name'),
			'c_address' => $this->input->post('c_address'),
			'c_tel' => $this->input->post('c_tel'),
			'c_gst' => $this->input->post('c_gst'),
			'c_ntn' => $this->input->post('c_ntn'),
			'crd_limit' => $this->input->post('crd_limit')
		);

		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('company',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_co.php */
/* Location: ./application/models/add_co.php */