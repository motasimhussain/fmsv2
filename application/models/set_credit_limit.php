<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_credit_limit extends CI_Model {

	function set_limit(){
		$c_id = $this->input->post('cmp_name');
		
		$data = array(

		'crd_limit' => $this->input->post('crd_limit')

		);
		$crd_limit = $this->input->post('crd_limit');
		
		$where = $this->db->where('id', $c_id);

		$query = $this->db->update('company', $data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_co.php */
/* Location: ./application/models/add_co.php */