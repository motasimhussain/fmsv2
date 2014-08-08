<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_inv extends CI_Model {

	function edit(){
		$data = array(
			'cmp_name' => $this->input->post('cmp_name'),
			'serial' => $this->input->post('serial'),
			'ref_num' => $this->input->post('ref_num'),
			'bill_num' => $this->input->post('bill_num'),
			'date' => $this->input->post('date'),
			'i_name' => $this->input->post('i_name'),
			'dscr' => $this->input->post('dscr'),
			'qunty' => $this->input->post('qunty'),
			'price' => $this->input->post('price'),
			'wght' => $this->input->post('wght'),
			'sales_tax' => $this->input->post('sales_tax'),
			'sales_tax_tot' => $this->input->post('sales_tax_tot'),
			'fed_tax' => $this->input->post('fed_tax'),
			'amnt' => $this->input->post('amnt'),
			'tot_amnt' => $this->input->post('tot_amnt'),
			'amnt_in_wrd' => $this->input->post('amnt_in_wrd')
		);
		$this->db->where("id",$this->input->post('id'));
		if ($this->input->post('type') == 'sale') {
			$query = $this->db->update('sales',$data);
		}else if($this->input->post('type') == 'purchase'){
			$query = $this->db->update('purchase',$data);
		}
		

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file edit_inv.php */
/* Location: ./application/models/edit_inv.php */