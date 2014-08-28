<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_frm extends CI_Model {

	function add(){
		if(!$this->session->userdata('sale_id'))
		{
			$data = array('sale_id' => time());
			$this->session->set_userdata($data); 
			//echo $this->session->userdata('sale_id');

		}

		if($this->input->post('pay_type') == 'debit'){
			$tot_amnt = $this->input->post('tot_amnt');
		}else{
			$tot_amnt = ($this->input->post('tot_amnt')*(-1));
		}

		// echo $this->input->post('date');
		// die();

		$data = array(
			'inv_for' => $this->input->post('inv_for'),
			'cmp_name' => $this->input->post('cmp_name'),
			'pay_type' => $this->input->post('pay_type'),
			'acc' => $this->input->post('acc'),
			'serial' => $this->input->post('serial'),
			'ref_num' => $this->input->post('ref_num'),
			'bill_num' => $this->input->post('bill_num'),
			'date' => $this->input->post('date'),
			'i_name' => $this->input->post('i_name'),
			'dscr' => (" Sales: "
						.number_format($this->input->post('qunty'),2).
						" "
						.$this->input->post('i_name').
						$this->input->post('desc').
						" @ "
						.number_format($this->input->post('amnt'),2).
						" Add S.Tax "
						.$this->input->post('sales_tax').
						"% = "
						.number_format($this->input->post('st_num'),2)),

			'qunty' => $this->input->post('qunty'),
			'price' => $this->input->post('price'),
			'wght' => $this->input->post('wght'),
			'sales_tax' => $this->input->post('sales_tax'),
			'sales_tax_tot' => $this->input->post('st_num'),
			'fed_tax' => $this->input->post('fed_tax'),
			'amnt' => $this->input->post('amnt'),
			'tot_amnt' => $tot_amnt,
			'amnt_in_wrd' => $this->input->post('amnt_wrd'),
			'sale_sess' => $this->session->userdata('sale_id')
		);

		// $this->update_purchase_credit();

		$query = $this->db->insert('sales',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

// function update_purchase_credit(){
// 	// $query = $this->db->get_where('purchase_supplier_account', array('acc' => $this->input->post('acc')), 1);

// 	$query = $this->db->query("
// 		SELECT * FROM 
// 		purchase_supplier_account WHERE
// 		acc = '".$this->input->post('acc')."' ORDER BY date DESC LIMIT 1
// 	");

// 	// $query = $this->db->get($query);

// 	if($query->num_rows() == 1){
// 		// print_r("hello");
// 		// die();

// 		$row = $query->row();
// 		$amount= $row->amount;
// 		$amount -= $this->input->post('tot_amnt');

// 		$data = array(
// 			'acc' => $this->input->post('acc'),
// 			'amount' => $amount
// 		);

// 		$this->db->insert('purchase_supplier_account',$data);

// 	}else{
// 		// $data = array(

// 		// 	'acc' => $this->input->post('acc'),
// 		// 	'amount' => -($this->input->post('tot_amnt'))
// 		// );

// 		// $query = $this->db->insert('purchase_supplier_account',$data);
// 		print_r("
// 			<h1>Opening Supplier Account Not Defined</h1>
// 			<script>
// 				function goBack() {
// 				    window.history.back()
// 				}
// 			</script>
// 			<button onclick='goBack()'>Go Back</button>
// 			");
// 		die();
// 	}
// }

	

}

/* End of file add_pro.php */
/* Location: ./application/models/add_pro.php */