<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pv extends CI_Model {

	function add(){
		$data = array(

			'cust_id' => $this->input->post('cust_id'),
			'pay_type' => $this->input->post('pay_type'),
			'amnt' => $this->input->post('amnt'),
			'income_tax' => $this->input->post('income_tax'),
			'witholding_tax' => $this->input->post('witholding_tax'),
			'description' => $this->input->post('description'),
			'inc_t_amnt' => $this->input->post('inc_t_amnt'),
			'wit_t_amnt' => $this->input->post('wit_t_amnt')
		);

		$query = $this->db->insert('payment_v',$data);

		if($query){
			return ture;
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
		$this->db->where('id',$id);
		if($this->db->delete('payment_v')){
			return true;
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
			'cust_id' => $this->input->post('cust_id'),
			'pay_type' => $this->input->post('pay_type'),
			'amnt' => $this->input->post('amnt'),
			'income_tax' => $this->input->post('income_tax'),
			'witholding_tax' => $this->input->post('witholding_tax'),
			'inc_t_amnt' => $this->input->post('inc_t_amnt'),
			'wit_t_amnt' => $this->input->post('wit_t_amnt')
		);

		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('payment_v',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}


}

/* End of file pv.php */
/* Location: ./application/models/pv.php */