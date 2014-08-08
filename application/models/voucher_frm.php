<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_frm extends CI_Model {

	function add(){
		
		

		 if($this->input->post("method") == "cash"){
				$dscr = $this->input->post('dscr'); 
			}else{
				$dscr = "CH# ".$this->input->post("chq_num")." ".$this->input->post("dscr");
			}


			if($this->input->post('v_type') == 'sales'){
				$data = array(
				'type' => $this->input->post('v_type'),
				'serial' => 0,
				'ref_num' => $this->input->post('ref_num'),
				'date' => $this->input->post('date'),
				'inv_for' => $this->input->post('inv_for'),
				'cmp_name' => $this->input->post('cmp_name'),
				'dscr' => $dscr,
				'tot_amnt' => $this->input->post('tot_amnt'),
				);

				$query = $this->db->insert('sales',$data);

			} else{
				$data = array(
					'type' => $this->input->post('v_type'),
					'serial' => 0,
					'ref_num' => $this->input->post('ref_num'),
					'date' => $this->input->post('date'),
					'inv_for' => $this->input->post('inv_for'),
					'cmp_name' => $this->input->post('cmp_name'),
					'dscr' => $dscr,
					'tot_amnt' => $this->input->post('tot_amnt')*(-1),
				);

				$query = $this->db->insert('purchase',$data);

			}

		if($query){
			return ture;
		}else{
			return false;
		}
	}

}

/* End of file voucher_frm.php */
/* Location: ./application/models/voucher_frm.php */