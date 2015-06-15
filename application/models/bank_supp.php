<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank_supp extends CI_Model {

	function add(){

		$desc = "CH# ".$this->input->post("ch_num")." ".$this->input->post("desc");

		$data = array(
			'trans_type' => $this->input->post('trans_type'),
			'ref_num' => $this->input->post('ref_num'),
			'ch_num' => $this->input->post('ch_num'),
			'date' => $this->input->post('date'),
			'b_id' => $this->input->post('b_id'),
			'c_id' => $this->input->post('c_id'),
			'desc' => $desc,
			'amnt' => $this->input->post('amnt')
		);

		$query = $this->db->insert('bank_trans',$data);
		if($query){
			return true; //$this->up_supp($desc);
		}else{
			return false;
		}
	}

	function up_supp($desc){
		$this->load->model('general_query');

		$data = array(
			'inv_for' => 1,
			'cmp_name' => $this->input->post('c_id'),
			'pay_type' => $this->input->post('trans_type'),
			'type' => "bank",
			'ref_num' => $this->input->post('ref_num'),
			'date' => $this->input->post('date'),
			'dscr' => $this->general_query->get_bank($this->input->post('b_id'))." ".$desc,
			'tot_amnt' => $this->input->post('amnt')
		);

		// $this->update_purchase_credit();

		$query = $this->db->insert('purchase',$data);
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

/* End of file bank_supp.php */
/* Location: ./application/models/bank_supp.php */