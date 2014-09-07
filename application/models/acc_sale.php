<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acc_sale extends CI_Model {

	public function get_entries(){

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$this->load->model('general_query');


			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');
			$this->db->where('type !=','bank');
			$this->db->order_by('serial','asc');
			$query = $this->db->get('acc_sale');

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
		$query = $this->db->get("acc_sale");


		if($query->num_rows() > 0){
			
			$prev_bal = 0;

			foreach ($query->result() as $row) {
				if ($row->pay_type == "debit") {
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

	public function set_op_bal(){
		$data = array(
			'inv_for' => 1,
			'cmp_name' => $this->input->post('cmp_name'),
			'pay_type' => $this->input->post('pay_type'),
			'dscr' => $this->input->post('dscr'),
			'amnt' => $this->input->post('tot_amnt'),
			'tot_amnt' => $this->input->post('tot_amnt')
		);


		$query = $this->db->insert('sales',$data);

		if($query){
			return ture;
		}else{
			return false;
		}
	}

}

/* End of file acc_sale.php */
/* Location: ./application/models/acc_sale.php */