<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_bank extends CI_Model {

	function add(){
		$data = array(

			'b_name' => $this->input->post('b_name'),
			'b_address' => $this->input->post('b_address'),
			'b_tel' => $this->input->post('b_tel'),
			'acc_num' => $this->input->post('acc_num'),
			'owner' => $this->input->post('owner'),
			'op_bal' => $this->input->post('op_bal')
		);

		$query = $this->db->insert('banks',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

	function edit(){
		$data = array(
			'b_name' => $this->input->post('b_name'),
			'b_address' => $this->input->post('b_address'),
			'b_tel' => $this->input->post('b_tel'),
			'acc_num' => $this->input->post('acc_num'),
			'owner' => $this->input->post('owner')
		);

		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('banks',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_bank.php */
/* Location: ./application/models/add_bank.php */