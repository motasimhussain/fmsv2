<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acc_purchase_supplier extends CI_Model {

	public function get_entries()
	{

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$this->load->model('general_query');

			$workplace = $this->general_query->get_work(1);
			$company = $this->general_query->get_company($this->input->post('coname'));

			$fields = array(
				'inv_for' => 1,
				'cmp_name' => $this->input->post('coname'),
			);

			$this->db->where($fields);
			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');
			$this->db->order_by('date','asc');

			$query = $this->db->get('purchase');
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}

				// $data["st_date"] = $date_1;
				// $data["en_date"] = $date_2;
				$arr = array('st_date' => $date_1, 
							 'en_date' => $date_2,
							 'workplace' => $workplace,
							 'company' => $company
							);
				$this->session->set_userdata($arr);

				$this->get_opening_bal($date_1);

				return $data;
			}
		}
	}

	// public function get_opening_bal($date_1){

	// 		$query = "SELECT SUM(tot_amnt) AS bal FROM purchase WHERE cmp_name = '".$this->input->post('coname')."' AND date < '".$date_1."' ORDER BY date DESC LIMIT 1";

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

	public function get_opening_bal($date_1){

			
		$this->db->where("date <",$date_1);
		$this->db->where('cmp_name', $this->input->post('coname'));
		$this->db->order_by('date','asc');
		$query = $this->db->get("purchase");


		if($query->num_rows() > 0){
			
			$prev_bal = 0;

			foreach ($query->result() as $row) {
				if ($row->pay_type == "credit") {
					$prev_bal += $row->tot_amnt;
				}else{
					$prev_bal -= $row->tot_amnt;
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

}

/* End of file acc_purchase_supplier.php */
/* Location: ./application/models/acc_purchase_supplier.php */