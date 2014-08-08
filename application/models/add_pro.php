<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_pro extends CI_Model {

	function add(){
		$data = array(
			'i_code' => $this->input->post('item_code'),
			'i_name' => $this->input->post('des'),
			'i_cat' => $this->input->post('cat'),
			'i_p_price' => $this->input->post('p_price'),
			'i_s_price' => $this->input->post('s_price'),
			'i_unit' => $this->input->post('unit')
		);

		$query = $this->db->insert('items',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

	function edit(){
		$data = array(
			'i_code' => $this->input->post('i_code'),
			'i_name' => $this->input->post('i_name'),
			'i_cat' => $this->input->post('i_cat'),
			'i_p_price' => $this->input->post('i_p_price'),
			'i_s_price' => $this->input->post('i_s_price'),
			'i_unit' => $this->input->post('i_unit')
		);

		$this->db->where('id',$this->input->post('id'));
		$query = $this->db->update('items',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_pro.php */
/* Location: ./application/models/add_pro.php */