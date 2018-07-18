<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_user  =  $this->session->userdata('logged_in');
		if (!is_null($this->_user)) {
			
			$this->load->model('Usuario_model', 'user', true);
		}else{
	
			redirect('/','refresh');
		}
		//Do your magic here
	}
	public function index()
	{
	 	print_r($this->_user['id']);
	}


}

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */