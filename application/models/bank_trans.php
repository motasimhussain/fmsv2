<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank_trans extends CI_Model {

	function add(){

		$desc = "CH# ".$this->input->post("ch_num")." ".$this->input->post("desc");

		if($this->input->post('trans_type') == 'credit'){
			$amnt = ($this->input->post('amnt')*(-1));
		}else{
			$amnt = $this->input->post('amnt');
		}

		$data = array(
			'trans_type' => $this->input->post('trans_type'),
			'ref_num' => $this->input->post('ref_num'),
			'ch_num' => $this->input->post('ch_num'),
			'date' => $this->input->post('date'),
			'b_id' => $this->input->post('b_id'),
			'c_id' => $this->input->post('c_id'),
			'desc' => $desc,
			'amnt' => $amnt
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
			'trans_type' => $this->input->post('trans_type'),
			'ref_num' => $this->input->post('ref_num'),
			'ch_num' => $this->input->post('ch_num'),
			'date' => $this->input->post('date'),
			'b_id' => $this->input->post('b_id'),
			'c_id' => $this->input->post('c_id'),
			'desc' => $this->input->post("desc"),
			'amnt' => $this->input->post('amnt')
		);
		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('bank_trans',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file bank_trans.php */
/* Location: ./application/models/bank_trans.php */