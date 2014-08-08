<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_usr extends CI_Model {

	function add(){
		$data = array(

			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'is_admin' => $this->input->post('is_admin'),
			'name' => $this->input->post('name'),
			'l_name' => $this->input->post('l_name'),
			'f_name' => $this->input->post('f_name'),
			'address' => $this->input->post('address'),
			'dob' => $this->input->post('dob'),
			'post_address' => $this->input->post('post_address'),
			'qualify' => $this->input->post('qualify'),
			'exp' => $this->input->post('exp'),
			'prev_empl' => $this->input->post('prev_empl'),
			'doj' => $this->input->post('doj'),
			'doc' => $this->input->post('doc'),
			'desig' => $this->input->post('desig'),
			'pop' => $this->input->post('pop'),
			'p_salary' => $this->input->post('p_salary'),
			'rv_on' => $this->input->post('rv_on'),
			'inc_due' => $this->input->post('inc_due'),
			'inc_due_amnt' => $this->input->post('inc_due_amnt'),
			'mar_stat' => $this->input->post('mar_stat'),
			'n_depend' => $this->input->post('n_depend'),
			'ntk' => $this->input->post('ntk'),
			'c_tel' => $this->input->post('c_tel'),
			'ref' => $this->input->post('ref'),
			'comment' => $this->input->post('comment'),
			'recc' => $this->input->post('recc'),
			'pic' => $this->input->post('pic')
		);

		$query = $this->db->insert('user',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}


	function edit(){
		$data = array(
			
			'name' => $this->input->post('name'),
			'l_name' => $this->input->post('l_name'),
			'f_name' => $this->input->post('f_name'),
			'address' => $this->input->post('address'),
			'dob' => $this->input->post('dob'),
			'post_address' => $this->input->post('post_address'),
			'qualify' => $this->input->post('qualify'),
			'exp' => $this->input->post('exp'),
			'prev_empl' => $this->input->post('prev_empl'),
			'doj' => $this->input->post('doj'),
			'doc' => $this->input->post('doc'),
			'desig' => $this->input->post('desig'),
			'pop' => $this->input->post('pop'),
			'p_salary' => $this->input->post('p_salary'),
			'rv_on' => $this->input->post('rv_on'),
			'inc_due' => $this->input->post('inc_due'),
			'inc_due_amnt' => $this->input->post('inc_due_amnt'),
			'mar_stat' => $this->input->post('mar_stat'),
			'n_depend' => $this->input->post('n_depend'),
			'ntk' => $this->input->post('ntk'),
			'c_tel' => $this->input->post('c_tel'),
			'ref' => $this->input->post('ref'),
			'comment' => $this->input->post('comment'),
			'recc' => $this->input->post('recc')
			//'pic' => $this->input->post('pic')
		);
		$this->db->where("id",$this->input->post('id'));
		$query = $this->db->update('user',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}
}

/* End of file add_usr.php */
/* Location: ./application/models/add_usr.php */