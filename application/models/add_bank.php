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
			$this->set_op_bal($this->db->insert_id());
			return true;
		}else{
			return false;
		}

	}

	public function set_op_bal($id){
		$data = array(
			'b_id' => $id,
			'c_id' => 0,
			'trans_type' => 'debit',
			'amnt' => $this->input->post('op_bal')
		);


		$query = $this->db->insert('bank_trans',$data);

		if($query){
			return true;
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
			return true;
		}else{
			return false;
		}

	}

}

/* End of file add_bank.php */
/* Location: ./application/models/add_bank.php */