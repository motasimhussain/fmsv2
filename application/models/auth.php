<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Model {


	function verify(){
		$this->db->where('username', $this->input->post("username"));
		$this->db->where('password', $this->input->post("password"));

		$query = $this->db->get('user');
		if($query->num_rows == 1){

			foreach ($query->result() as $row) {
				if($row->is_admin == 1 && $row->password != ""){

					$data = array(
						'is_admin' => 'true',
						'pic' => $row->pic
					);
					$this->session->set_userdata($data);
					return true;
				}else if($row->is_admin == 0 && $row->password != ""){
					$data = array(
						'is_admin' => 'false',
						'pic' => $row->pic
					);
					$this->session->set_userdata($data);
					return true;
				}else{
					return false;
				}
			}

			
		}else {
			$this->session->sess_destroy();
			return false;
		}
	}
	

}

/* End of file auth.php */
/* Location: ./application/models/auth.php */