<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_ledger extends CI_Model {

	//SELECT SUM(tot_amnt) FROM `sp_merge` WHERE cmp_name = 1 AND (date BETWEEN '2014-07-01' AND '2014-07-03' )

	

	public function get_entries()
	{

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$this->load->model('general_query');

			$workplace = $this->general_query->get_work($this->input->post('led_for'));
			$company = $this->general_query->get_company($this->input->post('coname'));

			$fields = array(
				'inv_for' => $this->input->post('led_for'),
				'cmp_name' => $this->input->post('coname'),
			);

			$this->db->where($fields);
			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');

			$query = $this->db->get('sp_merge');
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

	public function get_opening_bal($date_1){

			$query = "SELECT SUM(tot_amnt) AS bal FROM sp_merge WHERE cmp_name = '".$this->input->post('coname')."' AND date < '".$date_1."' ORDER BY date DESC LIMIT 1";

			$result = $this->db->query($query);


		if($result->num_rows() > 0){
			
				$arr= array(
						'prev_bal' => $result->row('bal')
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