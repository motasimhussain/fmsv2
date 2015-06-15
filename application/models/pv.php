<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pv extends CI_Model {

	function add(){

		$cust_id = $this->input->post('cust_id');
		$pay_type = $this->input->post('pay_type');
		$amnt = $this->input->post('amnt');
		$income_tax = $this->input->post('income_tax');
		$witholding_tax = $this->input->post('witholding_tax');
		$description = $this->input->post('description');
		$inc_t_amnt = $this->input->post('inc_t_amnt');
		$wit_t_amnt = $this->input->post('wit_t_amnt');
		$date = $this->input->post('date');

		$this->db->query("
			INSERT INTO payment_v (cust_id,pay_type,amnt,income_tax,witholding_tax,description,inc_t_amnt,wit_t_amnt,date) 
			VALUES ('$cust_id','$pay_type','$amnt','$income_tax','$witholding_tax','$description','$inc_t_amnt','$wit_t_amnt','$date')
		");
		$payment_id = $this->db->insert_id();
		$this->db->query("
			INSERT INTO purchase (payment_id,ref_num,cmp_name,inv_for,type,pay_type,tot_amnt,dscr,date) 
			VALUES ('$payment_id','PV','$cust_id','1','payment_voucher','credit','$amnt','$description','$date')
		");

		if($this->db->insert_id()){
			return true;
		}else{
			return false;
		}
	}

	function get_list(){
		$query = $this->db->get('payment_v');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function del($id){
		$this->db->trans_start();

			$this->db->where('payment_id',$id);
			$this->db->delete('purchase');

			$this->db->where('id',$id);
			$this->db->delete('payment_v');

		$this->db->trans_complete();

		if($this->db->trans_status() !== FALSE){
			return true;
		}else{
			return false;
		}
	}

	function get_pv($id){
		$data = array();
		$this->db->where('id',$id);
		$query = $this->db->get('payment_v');
		foreach ($query->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}

	function edit(){
		$data = array(
			'amnt' => $this->input->post('amnt'),
			'income_tax' => $this->input->post('income_tax'),
			'witholding_tax' => $this->input->post('witholding_tax'),
			'inc_t_amnt' => $this->input->post('inc_t_amnt'),
			'wit_t_amnt' => $this->input->post('wit_t_amnt')
		);

		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('payment_v',$data);

		$data = array(
			'tot_amnt' => $this->input->post('amnt')
		);

		$this->db->where('payment_id',$this->input->post('id'));
		$query = $this->db->update('purchase',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}


}

/* End of file pv.php */
/* Location: ./application/models/pv.php */