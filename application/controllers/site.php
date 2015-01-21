<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();
		//Do your magic here

		$logged_in = $this->session->userdata('is_logged_in');

		if(!isset($logged_in) || $logged_in != 'true'){
			echo "you dont have permission to access the page!";
			die();
		}else{
			$this->data['dashboard'] = '';
			//$this->data['inv_form'] = '';
			$this->data['tools'] = '';
			$this->data['company'] = '';
			$this->data['products'] = '';
			$this->data['bank'] = '';
			$this->data['vouchers'] = '';
			$this->data['employee'] = '';
			$this->data['inv_list'] = '';
			$this->data['invoice'] = '';
			$this->data['sales'] = '';
			$this->data['purchase'] = '';
			$this->data['ledger'] = '';
			$this->data['calendar'] = '';
			$this->data['mailbox'] = '';
			$this->data['data_table'] = '';
			$this->data['scan_doc'] = '';
			$this->data['user'] = $this->session->userdata('user');
			$this->data['user_pic'] = $this->session->userdata('pic');

			$is_admin = $this->session->userdata('is_admin');


			//show or hide add user tab if the user is admin or not. //
			if($is_admin == 'true') {
			$this->data['hide_usr'] = 'display:block';
			}else{
				$this->data['hide_usr'] = 'display:none';
			}

		}

		$this->load->model('general_query');
		// die();

	}

	public function index(){

		if($this->general_query->alert_credit()){
			$arr = $this->general_query->alert_credit();
			$this->data['limit'] = $arr;
		}
		
		$this->data['dashboard'] = ' active';
		$this->data['main_content'] = 'index';
		$this->load->view('includes/template', $this->data);

		if ($this->session->userdata('is_admin') == true) {
			$this->data['hide_usr'] = 'display:block';
		}else{
			$this->data['hide_usr'] = 'display:none';
		}
	}

	public function led_temp()
	{
		$this->data['main_content'] = 'ledger_template';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the start of the forms included in the Forms //

	public function add_work(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_work';
		$this->load->view('includes/template', $this->data);
	}

	public function sale_list(){
		$this->load->model('get_sp_list');
		if($this->get_sp_list->get_entries('sale_list')){
			$this->data['sale_table'] = $this->get_sp_list->get_entries('sale_list');
		}else{
			$this->data['sale_table'] = false;
		}
		$this->data['inv_list'] = ' active';
		$this->data['main_content'] = 'sale_list';
		$this->load->view('includes/template2', $this->data);
	}

	public function purchase_list(){
		$this->load->model('get_sp_list');
		if($this->get_sp_list->get_entries('sale_list')){
			$this->data['purchase_table'] = $this->get_sp_list->get_entries('purchase_list');
		}else{
			$this->data['purchase_table'] = false;
		}
		$this->data['inv_list'] = ' active';
		$this->data['main_content'] = 'purchase_list';
		$this->load->view('includes/template2', $this->data);
	}

	public function sales_frm(){

		if($this->general_query->get_sale_rec()){

			$this->data['sale_table'] =  $this->general_query->get_sale_rec();
		}else{
			$this->data['sale_table'] = 'No Sales';
		}
		
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}

		if($this->general_query->get_items()){
			$this->data['select_item'] = $this->general_query->get_items();
		}else{
			$this->data['select_item'] = 'no content';
		}

		$this->data['serial'] = $this->general_query->get_curr_serial('sales');
		$this->data['s_id'] = $this->general_query->get_curr_id('sales');
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'sales_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function purchase_frm(){

		if($this->general_query->get_purchase_rec()){

			$this->data['purchase_table'] =  $this->general_query->get_purchase_rec();
		}else{
			$this->data['purchase_table'] = 'No Sales';
		}
		
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_items()){
			$this->data['select_item'] = $this->general_query->get_items();
		}else{
			$this->data['select_item'] = 'no content';
		}

		$this->data['serial'] = $this->general_query->get_curr_serial('purchase');
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'purchase_frm';
		$this->load->view('includes/template', $this->data);
	}

	/////////////////// ADD AND EDIT COMPANY///////////////

	public function add_co(){
		$this->data['company'] = ' active';
		$this->data['main_content'] = 'add_co';
		$this->load->view('includes/template', $this->data);
	}

	public function co_list($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_co($id)){
			redirect('site/all_co');
		}
		}
		if($this->general_query->get_co_pro($id)){
			$this->data['co_det'] = $this->general_query->get_co_pro($id);
			$this->data['co_id'] = $id;
		}else{
			$this->data['co_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['company'] = ' active';
		$this->data['main_content'] = 'co_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_co(){
		if($this->general_query->get_all_co()){
			$this->data['all_co'] = $this->general_query->get_all_co();
		}else{
			$this->data['all_co'] = 'no content';
		}
		$this->data['company'] = ' active';
		$this->data['main_content'] = 'all_co';
		$this->load->view('includes/template2', $this->data);
	}


	//////////// EDIT/DELETE BANKS //////////

	public function b_list($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_bank($id)){
			redirect('site/all_bank');
		}
		}
		if($this->general_query->get_bank_pro($id)){
			$this->data['bank_det'] = $this->general_query->get_bank_pro($id);
			$this->data['bank_id'] = $id;
		}else{
			$this->data['bank_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bank_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_bank(){
		if($this->general_query->get_all_banks()){
			$this->data['all_bank'] = $this->general_query->get_all_banks();
		}else{
			$this->data['all_bank'] = 'no content';
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'all_bank';
		$this->load->view('includes/template2', $this->data);
	}



	////////// ADD PRODUCT ////////////
	public function add_pro(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}
		$this->data['products'] = ' active';
		$this->data['main_content'] = 'add_pro';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the end of the forms included in the Forms //

	//invoce start//

	public function gen_sales_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_sales_view()) {
			$this->data['top_tables'] = $this->general_query->gen_sales_inv();
			$this->data['gen_inv'] = $this->general_query->get_sales_view();

		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_s_inv';
		$this->load->view('includes/print_template', $this->data);	

	}

	public function gen_sales_serial(){
		$this->load->model('general_query');
		if ($this->general_query->gen_sales_serial()) {
			$this->data['top_tables'] = $this->general_query->gen_sales_inv_serial();
			$this->data['gen_inv'] = $this->general_query->gen_sales_serial();
		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_s_inv';
		$this->load->view('includes/print_template', $this->data);
	}
	

	public function gen_purchase_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_purchase_view()) {
			$this->data['top_tables'] = $this->general_query->gen_purchase_inv();
			$this->data['gen_inv'] = $this->general_query->get_purchase_view();

		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_p_inv';
		$this->load->view('includes/print_template', $this->data);	

	}

	public function gen_purchase_serial(){
		$this->load->model('general_query');
		if ($this->general_query->gen_purchase_serial()) {
			$this->data['top_tables'] = $this->general_query->gen_purchase_inv_serial();
			$this->data['gen_inv'] = $this->general_query->gen_purchase_serial();
		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_p_inv';
		$this->load->view('includes/print_template', $this->data);
	}


	public function gen_challan(){
		$this->load->model('general_query');
		if ($this->general_query->get_challan()) {
			$this->data['top_tables'] = $this->general_query->gen_challan();
			$this->data['gen_inv'] = $this->general_query->get_challan();
		}

		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'd_chal';
		$this->load->view('includes/template',$this->data);
	}

	public function gen_sales_tax_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_challan()) {
			$this->data['top_tables'] = $this->general_query->gen_challan();
			$this->data['gen_inv'] = $this->general_query->get_challan();
		}

		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'sales_tax_inv';
		$this->load->view('includes/template',$this->data);
	}

	//invoice end //


	//ledger start//

	public function acc_ledger(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}

		$this->load->model('get_ledger');
		if($this->get_ledger->get_entries()){
			$this->data['data'] = $this->get_ledger->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['ledger'] = ' active';
		$this->data['main_content'] = 'acc_ledger';
		$this->load->view('includes/template', $this->data);
	}

	public function b_ledger(){
		if($this->general_query->get_banks()){
			$this->data['select_bank'] = $this->general_query->get_banks();
		}else{
			$this->data['select_bank'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}

		$this->load->model('b_ledger');
		if($this->b_ledger->get_entries()){
			$this->data['data'] = $this->b_ledger->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bank/b_ledger';
		$this->load->view('includes/template', $this->data);
	}

	//ledger end //

	public function calendar(){
		$this->data['calendar'] = ' active';
		$this->data['main_content'] = 'calendar';
		$this->load->view('includes/template2',$this->data);
	}

	
	//included in forms, is hidden on non-admin login

	public function add_usr(){
		$is_admin = $this->session->userdata('is_admin');

		if($this->general_query->get_names()){
			$this->data['names'] = $this->general_query->get_names();
		}else{
			$this->data['names'] = 'no content';
		}

		if($is_admin == 'true') {
			$this->data['employee'] = ' active';
			$this->data['main_content'] = 'add_usr';
			$this->load->view('includes/template',$this->data);
		}else{
			return;
		}
		
	}


	//scan documents

	public function scan_doc(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['scan_doc'] = ' active';
		$this->data['main_content'] = 'scan_doc';
		$this->load->view('includes/template', $this->data);
	}

	// Used for setting the credit limit for a specific company
		public function set_credit_limit(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['tools'] = ' active';
		$this->data['main_content'] = 'set_credit_limit';
		$this->load->view('includes/template', $this->data);
	}

	public function voucher_frm(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'voucher_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function bank_trans(){
		if($this->general_query->get_banks()){
			$this->data['select_bank'] = $this->general_query->get_banks();
		}else{
			$this->data['select_bank'] = 'no content';
		}
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_voucher_serial()){
			$this->data['v_serial'] = $this->general_query->get_voucher_serial();
		}else{
			$this->data['v_serial'] = 0;
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bank_trans';
		$this->load->view('includes/template', $this->data);
	}

	public function bank_cust(){
		if($this->general_query->get_banks()){
			$this->data['select_bank'] = $this->general_query->get_banks();
		}else{
			$this->data['select_bank'] = 'no content';
		}
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_voucher_serial()){
			$this->data['v_serial'] = $this->general_query->get_voucher_serial();
		}else{
			$this->data['v_serial'] = 0;
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bank/bank_cust';
		$this->load->view('includes/template', $this->data);
	}

	public function bank_supp(){
		if($this->general_query->get_banks()){
			$this->data['select_bank'] = $this->general_query->get_banks();
		}else{
			$this->data['select_bank'] = 'no content';
		}
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_voucher_serial()){
			$this->data['v_serial'] = $this->general_query->get_voucher_serial();
		}else{
			$this->data['v_serial'] = 0;
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bank/bank_supp';
		$this->load->view('includes/template', $this->data);
	}


	public function add_bank(){
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'add_bank';
		$this->load->view('includes/template', $this->data);
	}
	public function emp_pro($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_emp($id)){
			redirect('site/all_emp');
		}
		}
		if($this->general_query->get_emp_pro($id)){
			$this->data['emp_det'] = $this->general_query->get_emp_pro($id);
			$this->data['emp_id'] = $id;
		}else{
			$this->data['emp_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['employee'] = ' active';
		$this->data['main_content'] = 'emp_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_emp(){
		if($this->general_query->get_all_emp()){
			$this->data['all_emp'] = $this->general_query->get_all_emp();
		}else{
			$this->data['all_emp'] = 'no content';
		}
		$this->data['employee'] = ' active';
		$this->data['main_content'] = 'all_emp';
		$this->load->view('includes/template2', $this->data);
	}


	//////////// PAYMENT AND RECIEPT VOUCHERS //////////

	public function reciept_frm(){
		$this->data['vouchers'] = ' active';
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['main_content'] = 'vouchers/reciept_frm';
		$this->load->view('includes/template', $this->data);
	}
	public function payment_frm(){
		$this->data['vouchers'] = ' active';
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['main_content'] = 'vouchers/payment_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function reciept_list($id=0,$action=0){
		$this->load->model('rv');
		if ($action == "delete") {
			if($this->rv->del($id)){
				redirect('site/reciept_list');
			}
		}elseif ($action == "print") {
			$this->print_reciept($id);
			return;
		}

		$q = $this->rv->get_list();
		if($q){
			$this->data["list"] = $q;
		}else{
			$this->data["list"] = false;
		}
		$this->data["main_content"] = "vouchers/reciept_list";
		$this->load->view('includes/template2', $this->data);

	}

	public function payment_list($id=0,$action=0){
		$this->load->model('pv');
		if ($action == "delete") {
			
			if($this->pv->del($id)){
				//redirect('site/payment_list');
			}
		}elseif ($action == "print") {
			$this->print_payment($id);
			return;
		}

		$q = $this->pv->get_list();
		if($q){
			$this->data["list"] = $q;
		}else{
			$this->data["list"] = false;
		}

		$this->data["main_content"] = "vouchers/payment_list";
		$this->load->view('includes/template2', $this->data);

	}

	public function print_reciept($id)
	{
		$this->load->model('rv');
		$this->data["info"] = $this->general_query->get_co_pro($id);
		$this->data["list"] = $this->rv->get_rv($id);
		$this->data["main_content"] = "vouchers/reciept";
		$this->load->view('includes/template2', $this->data);
	}

	public function print_payment($id)
	{
		$this->load->model('pv');
		$this->data["info"] = $this->general_query->get_co_pro($id);
		$this->data["list"] = $this->pv->get_pv($id);
		$this->data["main_content"] = "vouchers/journal";
		$this->load->view('includes/template2', $this->data);
	}

	/////// ITEM LIST ////////////

	public function pro_list($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_pro($id)){
			redirect('site/all_items');
		}
		}
		if($this->general_query->get_item_pro($id)){
			$this->data['item_det'] = $this->general_query->get_item_pro($id);
			$this->data['item_id'] = $id;
		}else{
			$this->data['item_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['products'] = ' active';
		$this->data['main_content'] = 'item_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_items(){
		if($this->general_query->get_all_items()){
			$this->data['all_items'] = $this->general_query->get_all_items();
		}else{
			$this->data['all_items'] = 'no content';
		}
		$this->data['products'] = ' active';
		$this->data['main_content'] = 'all_pro';
		$this->load->view('includes/template2', $this->data);
	}

	///////////// Edit/Delete Invoices ////////////


	public function inv_pro($id,$type,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_inv($id,$type)){
			redirect('site/all_inv');
		}
		}
		if($this->general_query->get_inv_pro($id,$type)){
			$this->data['inv_det'] = $this->general_query->get_inv_pro($id,$type);
			$this->data['inv_id'] = $id;
		}else{
			$this->data['inv_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'inv_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_inv(){
		if($this->general_query->get_all_inv()){
			$this->data['all_inv'] = $this->general_query->get_all_inv();
		}else{
			$this->data['all_inv'] = 'no content';
		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'all_inv';
		$this->load->view('includes/template2', $this->data);
	}

	///////////// Edit Delete Bank Vouchers ///////////////

	public function bv_pro($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_bv($id)){
			redirect('site/all_bv');
		}
		}
		if($this->general_query->get_bv_pro($id)){
			$this->data['bv_det'] = $this->general_query->get_bv_pro($id);
			$this->data['bv_id'] = $id;
		}else{
			$this->data['bv_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'bv_pro';
		$this->load->view('includes/template2', $this->data);
	}

	public function all_bv(){
		if($this->general_query->get_all_bv()){
			$this->data['all_bv'] = $this->general_query->get_all_bv();
		}else{
			$this->data['all_bv'] = 'no content';
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'all_bv';
		$this->load->view('includes/template2', $this->data);
	}




 	/////// Vouchers /////////

	// public function jv(){
	// 	$this->data['main_content'] = 'vouchers/journal';
	// 	$this->load->view('includes/template', $this->data);
	// }
	
	// public function rv(){
	// 	$this->data['main_content'] = 'vouchers/reciept';
	// 	$this->load->view('includes/template', $this->data);
	// }

	/////// Purchase Accounts //////////

	public function acc_purchase(){

		$this->load->model('acc_purchase');
		if($this->acc_purchase->get_entries()){
			$this->data['data'] = $this->acc_purchase->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['purchase'] = ' active';
		$this->data['main_content'] = 'ledger/acc_purchase';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_purchase_gst(){

		$this->load->model('acc_purchase_gst');
		if($this->acc_purchase_gst->get_entries()){
			$this->data['data'] = $this->acc_purchase_gst->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['purchase'] = ' active';
		$this->data['main_content'] = 'ledger/acc_purchase_gst';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_purchase_supplier(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->load->model('acc_purchase_supplier');
		if($this->acc_purchase_supplier->get_entries()){
			$this->data['data'] = $this->acc_purchase_supplier->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['purchase'] = ' active';
		$this->data['main_content'] = 'ledger/acc_purchase_supplier';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_purchase_op_bal(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['purchase'] = ' active';
		$this->data['main_content'] = 'ledger/acc_purchase_op_bal';
		$this->load->view('includes/template', $this->data);
	}

	/////// Sale Account ////////

	public function acc_sale(){

		$this->load->model('acc_sale');
		if($this->acc_sale->get_entries()){
			$this->data['data'] = $this->acc_sale->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['sales'] = ' active';
		$this->data['main_content'] = 'sales/acc_sale';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_sale_gst(){

		$this->load->model('acc_sale_gst');
		if($this->acc_sale_gst->get_entries()){
			$this->data['data'] = $this->acc_sale_gst->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['sales'] = ' active';
		$this->data['main_content'] = 'sales/acc_sale_gst';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_sale_customer(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->load->model('acc_sale_customer');
		if($this->acc_sale_customer->get_entries()){
			$this->data['data'] = $this->acc_sale_customer->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
		$this->data['sales'] = ' active';
		$this->data['main_content'] = 'sales/acc_sale_customer';
		$this->load->view('includes/template', $this->data);
	}

	public function acc_sale_op_bal(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['sales'] = ' active';
		$this->data['main_content'] = 'sales/acc_sale_op_bal';
		$this->load->view('includes/template', $this->data);
	}

	// public function co_list($id,$action){
	// 	if ($action == "delete") {
	// 	$this->load->model('general_query');

	// 	if($this->general_query->del_co($id)){
	// 		redirect('site/all_co');
	// 	}
	// 	}
	// 	if($this->general_query->get_co_pro($id)){
	// 		$this->data['co_det'] = $this->general_query->get_co_pro($id);
	// 		$this->data['co_id'] = $id;
	// 	}else{
	// 		$this->data['co_det'] = 'no content';
	// 	}
	// 	$this->data['action'] = $action;
	// 	$this->data['company'] = ' active';
	// 	$this->data['main_content'] = 'co_pro';
	// 	$this->load->view('includes/template2', $this->data);
	// }

	public function all_op_bal(){
		if($this->general_query->get_all_op_bal()){
			$this->data['all_op_bal'] = $this->general_query->get_all_op_bal();
		}else{
			$this->data['all_op_bal'] = 'no content';
		}
		$this->data['sales'] = ' active';
		$this->data['main_content'] = 'sales/sale_op_bal_list';
		$this->load->view('includes/template2', $this->data);
	}

}
/* End of file site.php */
/* Location: ./application/controllers/site.php */