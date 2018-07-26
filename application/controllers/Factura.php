<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->_user  =  $this->session->userdata('logged_in');
		if (!is_null($this->_user)) {
			$this->load->model('Factura_model', 'fact', true);
			$this->load->model('FormaPago_model', 'pago', true);
		}else{
	
			redirect('/','refresh');
		}
		//Do your magic here
	}
	public function index(){	
		$this->load->view('header');
		$this->load->view('factura');		
		$this->load->view('footer');
	}

	public function agregarFactura(){
		
	}

}
