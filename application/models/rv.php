<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rv extends CI_Model {

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
			INSERT INTO reciept_v (cust_id,pay_type,amnt,income_tax,witholding_tax,description,inc_t_amnt,wit_t_amnt,date) 
			VALUES ('$cust_id','$pay_type','$amnt','$income_tax','$witholding_tax','$description','$inc_t_amnt','$wit_t_amnt','$date')
		");
		$reciept_id = $this->db->insert_id();
		$this->db->query("
			INSERT INTO sales (reciept_id,ref_num,cmp_name,inv_for,type,pay_type,tot_amnt,dscr,date) 
			VALUES ('$reciept_id','RV','$cust_id','1','reciept_voucher','debit','$amnt','$description','$date')
		");


		if($this->db->insert_id()){
			return true;
		}else{
			return false;
		}

	}

	function get_list(){
		$query = $this->db->get('reciept_v');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

	function del($id){
		$this->db->trans_start();

			$this->db->where('reciept_id',$id);
			$this->db->delete('sales');

			$this->db->where('id',$id);
			$this->db->delete('reciept_v');

		$this->db->trans_complete();

		if($this->db->trans_status() !== FALSE){
			return true;
		}else{
			return false;
		}
	}

	function get_rv($id){
		$data = array();
		$this->db->where('id',$id);
		$query = $this->db->get('reciept_v');
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
		$query = $this->db->update('reciept_v',$data);

		$data = array(
			'tot_amnt' => $this->input->post('amnt')
		);

		$this->db->where('reciept_id',$this->input->post('id'));
		$query = $this->db->update('sales',$data);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}

/* End of file rv.php */
/* Location: ./application/models/rv.php */