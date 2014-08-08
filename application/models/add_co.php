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

	// function initializeTables(){
	// 	$this->db->select_max('id');
	// 	$query = $this->db->get('company');
	// 	foreach ($query->result() as $row) {
	// 		$id = $row->id;
	// 	}

	// 	$p_bal = 0;
	// 	$s_bal = 0;

		
	// 	$count = $this->db->count_all('workplace');

	// 	for ($i=1; $i<=$count  ; $i++) { 

	// 		$data = array(
	// 			'type' => 'purchase',
	// 			'inv_for' => $i,
	// 			'cmp_name' => $id,
	// 			'p_serial' => 0,
	// 			'price' => 0,
	// 			'amnt' => 0,
	// 			'tot_amnt' => 0
	// 		);

	// 		$this->db->insert('sp_records',$data);

	// 		$data = array(
	// 			'type' => 'sales',
	// 			'inv_for' => $i,
	// 			'cmp_name' => $id,
	// 			's_serial' => 0,
	// 			'price' => 0,
	// 			'amnt' => 0,
	// 			'tot_amnt' => 0
	// 		);

	// 		$this->db->insert('sp_records',$data);

	// 		if($this->input->post('op_bal_type') == 'sales' && ('op_bal' != "" || 'op_bal' != 0)){

	// 			$s_bal = $this->input->post('op_bal');
	// 			$data = array(
	// 				'type' => 'sales',
	// 				'inv_for' => $i,
	// 				'cmp_name' => $id,
	// 				's_serial' => 0,
	// 				'price' => 0,
	// 				'amnt' => 0,
	// 				'tot_amnt' => $s_bal
	// 			);
	// 			$this->db->insert('sp_records',$data);

	// 		}else if($this->input->post('op_bal_type') == 'purchase' && ('op_bal' != "" || 'op_bal' != 0)){

	// 			$p_bal = $this->input->post('op_bal');
	// 			$data = array(
	// 				'type' => 'purchase',
	// 				'inv_for' => $i,
	// 				'cmp_name' => $id,
	// 				'p_serial' => 0,
	// 				'price' => 0,
	// 				'amnt' => 0,
	// 				'tot_amnt' => $p_bal
	// 			);

	// 			$this->db->insert('sp_records',$data);

	// 		}
			

	// 	}
	// }

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