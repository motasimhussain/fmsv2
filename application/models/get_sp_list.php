<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_sp_list extends CI_Model {

	public function get_entries($type)
	{

		$parse_date = $this->input->post('set_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();
			//$date_1 = $parse_date;

			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');
			$this->db->where('serial !=',0);

			$query = $this->db->get($type);
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}

				// $data["st_date"] = $date_1;
				// $data["en_date"] = $date_2;
				$arr = array('st_date' => $date_1);
				$this->session->set_userdata($arr);

				return $data;
			}
		}
	}

}

/* End of file get_sp_list.php */
/* Location: ./application/models/get_sp_list.php */