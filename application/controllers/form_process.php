<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_process extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	public function add_co(){
		$this->load->model('add_co');
		if($this->add_co->add()){
			redirect('site/add_co');
		}
	}

	public function edit_co(){
		$this->load->model('add_co');
		if($this->add_co->edit()){
			redirect('site/all_co');
		}
	}

	public function add_rv(){
		$this->load->model('rv');
		if($this->rv->add()){
			redirect('site/reciept_frm');
		}
	}
	public function add_pv(){
		$this->load->model('pv');
		if($this->pv->add()){
			redirect('site/payment_frm');
		}
	}


	public function add_bank(){
		$this->load->model('add_bank');
		if($this->add_bank->add()){
			redirect('site/add_bank');
		}
	}
	public function edit_bank(){
		$this->load->model('add_bank');
		if($this->add_bank->edit()){
			redirect('site/all_bank');
		}
	}

	public function add_pro(){
		$this->load->model('add_pro');
		if($this->add_pro->add()){
			redirect('site/add_pro');
		}
	}

	public function add_usr(){
		$this->load->model('add_usr');
		if($this->add_usr->add()){
			redirect('site/add_usr');
		}
	}

	public function edit_usr(){
		$this->load->model('add_usr');
		if($this->add_usr->edit()){
			redirect('site/all_emp');
		}
	}

	public function edit_item(){
		$this->load->model('add_pro');
		if($this->add_pro->edit()){
			redirect('site/all_items');
		}
	}
	public function edit_inv(){
		$this->load->model('edit_inv');
		if($this->edit_inv->edit()){
			redirect('site/all_inv');
		}
	}

	public function sales_frm(){
		$this->load->model('sales_frm');
		if ($this->sales_frm->add()) {
			redirect('site/sales_frm');
		}
	}

	public function purchase_frm(){
		$this->load->model('purchase_frm');
		if ($this->purchase_frm->add()) {
			redirect('site/purchase_frm');
		}
	}


	public function add_work(){
		$this->load->model('add_work');
		if ($this->add_work->add()) {
			redirect('site/add_work');
		}
	}

	public function get_ledger(){
		$this->load->model('get_ledger');
		if ($this->get_ledger->get_entries()){
			redirect('site/acc_ledger');
		}
	}

	public function clear_session_sales(){
		$this->session->unset_userdata('sale_id');
		redirect('site/sales_frm');
	}

	public function clear_session_purchase(){
		$this->session->unset_userdata('purchase_id');
		redirect('site/purchase_frm');
	}

		public function set_credit_limit(){
		$this->load->model('set_credit_limit');
		if ($this->set_credit_limit->set_limit()){
			redirect('site/set_credit_limit');
		}
	}

	public function voucher_frm(){
		$this->load->model('voucher_frm');
		if ($this->voucher_frm->add()){
			redirect('site/voucher_frm');
		}
	}

	public function bank_trans(){
		$this->load->model('bank_trans');
		if ($this->bank_trans->add()){
			redirect('site/bank_trans');
		}
	}
	
	public function bank_cust(){
		$this->load->model('bank_cust');
		if ($this->bank_cust->add()){
			redirect('site/bank_cust');
		}
	}
	public function bank_supp(){
		$this->load->model('bank_supp');
		if ($this->bank_supp->add()){
			redirect('site/bank_supp');
		}
	}

	public function edit_bv(){
		$this->load->model('bank_trans');
		if($this->bank_trans->edit()){
			redirect('site/all_bv');
		}
	}

	public function acc_purchase_op_bal(){
		$this->load->model('acc_purchase');
		if($this->acc_purchase->set_op_bal()){
			redirect('site/acc_purchase_op_bal');
		}
	}

	public function acc_sale_op_bal(){
		$this->load->model('acc_sale');
		if($this->acc_sale->set_op_bal()){
			redirect('site/acc_sale_op_bal');
		}
	}

}

/* End of file form_process.php */
/* Location: ./application/controllers/form_process.php */