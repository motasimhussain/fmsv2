<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_ledger extends CI_Model {

	//SELECT SUM(tot_amnt) FROM `sp_merge` WHERE cmp_name = 1 AND (date BETWEEN '2014-07-01' AND '2014-07-03' )

	

	public function get_entries()
	{

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$this->load->model('general_query');

			$bank = $this->general_query->get_bank($this->input->post('b_id'));

			$fields = array(
				'b_id' => $this->input->post('b_id')
			);

			$this->db->where($fields);
			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');
			$this->db->order_by('date','asc');

			$query = $this->db->get('bank_trans');
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}

				// $data["st_date"] = $date_1;
				// $data["en_date"] = $date_2;
				$arr = array('st_date' => $date_1, 
							 'en_date' => $date_2,
							 'bank' => $bank
							);
				$this->session->set_userdata($arr);

				$this->get_opening_bal($date_1,$this->input->post('b_id'));

				return $data;
			}
		}
	}

	// public function get_opening_bal($date_1){

	// 		$query = "SELECT SUM(amnt) AS bal FROM bank_trans WHERE c_id = '".$this->input->post('coname')."' AND date < '".$date_1."' ORDER BY date DESC LIMIT 1";

	// 		$result = $this->db->query($query);


	// 	if($result->num_rows() > 0){
			
	// 			$arr= array(
	// 					'prev_bal' => $result->row('bal')
	// 				);
	// 			$this->session->set_userdata($arr);

	// 	}else{
	// 		$arr= array(
	// 					'prev_bal' => 0
	// 				);
	// 			$this->session->set_userdata($arr);
	// 	}
	// }

	public function get_opening_bal($date_1,$b_id){


			
		$this->db->where("date <",$date_1);
		$this->db->where("b_id",$b_id);
		$this->db->order_by('date','asc');
		$query = $this->db->get("bank_trans");


		if($query->num_rows() > 0){
			
			$prev_bal = 0;

			foreach ($query->result() as $row) {
				if ($row->trans_type == "debit") {
					$prev_bal += $row->amnt;
				}else{
					$prev_bal -= $row->amnt;
				}
			}

			$arr= array(
					'prev_bal' => $prev_bal
				);
			
			$this->session->set_userdata($arr);

		}else{
			$arr= array(
						'prev_bal' => 0
					);
				$this->session->set_userdata($arr);
		}
	}

	// function get_opening_bal($date_1){
	// 	$query = "SELECT * FROM ledger WHERE inv_for =".$this->input->post('led_for')." AND cmp_name =".$this->input->post('coname')." AND `date` < '".$date_1."' ORDER BY `date` DESC LIMIT 1";
	// 	$result = $this->db->query($query);
	// 	if($result->num_rows() > 0){
	// 		foreach ($result->result() as $row) {
	// 			$arr= array(
	// 					'prev_bal' => $row->balance
	// 				);
	// 			$this->session->set_userdata($arr);

	// 		}
	// 	}else{
	// 		$arr= array(
	// 					'prev_bal' => 0
	// 				);
	// 			$this->session->set_userdata($arr);
	// 	}

	//}

}



/* End of file get_ledger.php */
/* Location: ./application/models/get_ledger.php */