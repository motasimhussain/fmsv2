<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_query extends CI_Model {


	//////// Employee Profiles ///////////
	function del_emp($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
		return True;
	}
	
	

	function get_all_emp(){
	
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_emp_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	/////// ITEM LIST //////////////

	function del_pro($id){
		$this->db->where('id', $id);
		$this->db->delete('items');
		return True;
	}

	function get_all_items(){
	
		$query = $this->db->get('items');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_item_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('items');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}


	/////// INVOICE LIST //////////////

	function del_inv($id,$type){
		$this->db->where('id', $id);
		$this->db->where('type', $type);
		if ($type=="sale") {
			$this->db->delete('sales');
		}else if($type=="purchase"){
			$this->db->delete('purchase');
		}
		
		return True;
	}

	function get_all_inv(){
	
		$query = $this->db->get('sp_merge');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_inv_pro($id,$type){
		$this->db->where('id', $id);
		$this->db->where('type', $type);
		$query = $this->db->get('sp_merge');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	/////// Company LIST //////////////

	function del_co($id){
		$this->db->where('id', $id);
		$this->db->delete('company');
		return True;
	}

	function get_all_co(){
	
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_co_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}


	////////// Sale Opening Balance //////////

	function del_op_bal($id){
		$this->db->where('id', $id);
		$this->db->delete('company');
		return True;
	}

	function get_all_op_bal(){
		$this->db->where("date","0000-00-00");
		$this->db->where("serial","0");
		$query = $this->db->get('sales');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_op_bal_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}


	/////////// Bank List ////////////

	function del_bank($id){
		$this->db->where('id', $id);
		$this->db->delete('banks');
		return True;
	}

	function get_all_banks(){
	
		$query = $this->db->get('banks');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_bank_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('banks');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	/////////////// BANK VOUCHER LIST ////////////////
	function del_bv($id){
		$this->db->where('id', $id);
		$this->db->delete('bank_trans');
		return True;
	}

	function get_all_bv(){
	
		$query = $this->db->get('bank_trans');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_bv_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('bank_trans');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

/////////    SALES MODELS ////////
	function gen_sales_serial(){
	
		$this->db->where('serial', $this->input->post('serial'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_sales_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, date, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `sale_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_sales_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, date,  w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `serial`="'.$this->input->post("serial").'"'
						);


	}


	function get_sale_rec(){

		$s_id = $this->session->userdata('sale_id');

		if(isset($s_id) && $s_id != 0){

		$this->db->where('sale_sess',$this->session->userdata('sale_id'));
		$query = $this->db->get('sales');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}

		}
	}

	////////// END SALES MODELS //////////////

	///////// PURCHASE MODELS //////////

	function gen_purchase_serial(){
	
		$this->db->where('serial', $this->input->post('serial'));
		$query = $this->db->get('purchase_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_purchase_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, date, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `sale_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_purchase_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, date, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `serial`="'.$this->input->post("serial").'"'
						);


	}

	function get_purchase_rec(){

		$p_id = $this->session->userdata('purchase_id');

		if(isset($p_id) && $p_id != 0){

			$this->db->where('sale_sess', $this->session->userdata('purchase_id'));
			$query = $this->db->get('purchase');
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}else{
				return false;
			}
		}
	}

	///////// END PURCHASE MODELS //////////

	////////// CHALLAN START ////////////

	function get_challan(){

		$ser = $this->input->post('serial');

		if(isset($ser) && $ser != 0){

		$this->db->where('serial', $this->input->post('serial'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		}		

	}

	function gen_challan(){

		return $this->db->query('SELECT * FROM sales_inv WHERE `serial`="'.$this->input->post("serial").'"');

	}

	////////// CHALLAN END ////////////


	function get_curr_serial($s_type){

		$this->db->select_max('serial');
		$query = $this->db->get($s_type);
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->serial;
			}
		if(!$this->session->userdata('sale_id') && !$this->session->userdata('purchase_id'))
		{
			return $num + 1;

		}
		else
			return $num;

		}
	}

	function get_curr_id($s_type){

		$this->db->select_max('id');
		$query = $this->db->get($s_type);
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->id;
			}
		if(!$this->session->userdata('sale_id') && !$this->session->userdata('purchase_id'))
		{
			return $num + 1;

		}
		else
			return $num;

		}
	}
	

	function get_sales_view(){
		$this->db->where('sale_sess', $this->input->post('sale_sess'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_purchase_view(){
		$this->db->where('sale_sess', $this->input->post('sale_sess'));
		$query = $this->db->get('purchase_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_banks(){
		$this->db->select('id,b_name');
		$query = $this->db->get('banks');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_wn(){
		$this->db->select('id,w_name');
		$query = $this->db->get('workplace');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_work($id){
		$this->db->where('id',$id);
		$query = $this->db->get('workplace');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data = $row->w_name;
			}
			return $data;
		}
	}

	function get_bank($id){
		$this->db->where('id',$id);
		$query = $this->db->get('banks');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data = $row->b_name;
			}
			return $data;
		}
	}

	function get_cn(){
		$this->db->select('id,c_name');
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_company($id){
		$this->db->where('id',$id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data = $row->c_name;
			}
			return $data;
		}
	}

	function get_items(){
		$this->db->select('i_code,i_name');
		$query = $this->db->get('items');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_names(){
		$this->db->select('id,name');
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_pic(){
		$this->db->select('pic');
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function update_usr_img($data){
		$data = array(
			'pic' => base_url()."uploads/".$data
		);

		$this->db->where('id',$this->input->post('user_id'));
		$this->db->update('user',$data);
	}

	function check_credit($cmp_name){
		$this->db->where('cmp_name',$cmp_name);
		$this->db->where('type','purchase');
		$this->db->select_sum('tot_amnt','crd_amnt');
		$query = $this->db->get('sp_merge');

		return $query->row()->crd_amnt;

	}

	function check_credit_limit($id){
		$this->db->where('id',$id);
		$this->db->select('crd_limit');
		$query = $this->db->get('company');
		// foreach ($query->result() as $row) {
		// 	if($row->crd_limit == 0){
		// 		return 999999999;
		// 	}else{
		// 		return $row->crd_limit;
		// 	}
		// }
		if($query->num_rows() > 0){
		  	$row = $query->row();
		   	$crd_limit = $row->crd_limit;
		}

		if(isset($crd_limit) || $crd_limit == 0){
			if($crd_limit == 0){
				return (double) 99999999;
			}else{
				return (double)$crd_limit;
			}
		}
	}

	function get_cmp_ids(){
		$query = $this->db->get('company');
	    $array = array();

	    foreach($query->result() as $row)
	    {
	        $array[] = $row->id; // add each user id to the array
	    }

	    return $array;
	}

	function evaluate_credit(){
		$j = 0;
		$array = $this->get_cmp_ids();
		$credit = 0;
		$credit_limit = 0;
		for ($i=0; $i < sizeof($array); $i++) {

			$credit = $this->check_credit($array[$i]);
			$credit_limit = $this->check_credit_limit($array[$i]);
			if($credit > $credit_limit){
				$data[$j] = $array[$i];
				$j++;
			}
		}
		if($j>0){
			return $data;
		}else{
			return false;
		}
	}

	function alert_credit(){
		$arr = array();
		if($data = $this->evaluate_credit()){
			for ($i=0; $i < sizeof($data); $i++) {
				$cmp =  $this->get_cn_by_id($data[$i]);
				$limit = $this->get_cmp_limit($data[$i]);
				$credit = $this->check_credit($data[$i]);
				$arr[$i] = array(
						'company' => $cmp,
						'limit' => $limit,
						'credit' => $credit
				);
			}
			return $arr;
		}else{
			return false;
		}
	}

	function get_cn_by_id($id){
		$this->db->select('c_name');
		$this->db->where('id',$id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			return $query->row()->c_name;
		}
	}

	function get_cmp_limit($id){
		$this->db->select('crd_limit');
		$this->db->where('id',$id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			return $query->row()->crd_limit;
		}
	}
	
	function get_voucher_serial(){
	
		$this->db->select_max('id');
		$query = $this->db->get('bank_trans');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->id;
			}
		
			return $num + 1;
		}else{
			return 0;
		}
	}

}


/* End of file general_query.php */
/* Location: ./application/models/general_query.php */