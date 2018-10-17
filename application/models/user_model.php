<?php

class User_model extends CI_Model
{
	public function get_data()
	{
		$data = $this->db->get('users');
		
		return $data->result();
	}
}

?>
