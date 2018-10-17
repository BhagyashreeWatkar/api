<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$query=$this->db->query('select * from users');
		$result = $query->result();
		echo json_encode($result);
		/*$data = $this->user_model->get_data();
				return $this->output  
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array('users'=>$data)));*/
	}
}
