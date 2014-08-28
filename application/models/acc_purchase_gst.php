<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acc_purchase_gst extends CI_Model {

	public function get_entries(){

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$this->load->model('general_query');


			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');

			$this->db->order_by('date','asc');
			$query = $this->db->get('acc_purchase');

			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}

				// $data["st_date"] = $date_1;
				// $data["en_date"] = $date_2;
				$arr = array(
					'st_date' => $date_1, 
					'en_date' => $date_2,
				);
				$this->session->set_userdata($arr);

				// $this->get_opening_bal($date_1);
				$this->get_opening_bal($date_1);
				return $data;
			}

		}


		// $this->db->order_by('date','desc');
		// $query = $this->db->get('acc_purchase');

		// foreach ($query->result() as $row) {
		// 	$data[] = $row;
		// }
		// return $data;
	}

	public function get_opening_bal($date_1){

			
		$this->db->where("date <",$date_1);
		$this->db->order_by('date','asc');
		$query = $this->db->get("acc_purchase");


		if($query->num_rows() > 0){
			
			$prev_bal = 0;

			foreach ($query->result() as $row) {
				if ($row->pay_type == "debit") {
					$prev_bal += $row->sales_tax_tot;
				}else{
					$prev_bal -= $row->sales_tax_tot;
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

/* End of file acc_purchase_gst.php */
/* Location: ./application/models/acc_purchase_gst.php */