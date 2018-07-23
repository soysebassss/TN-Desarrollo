<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		// $this->load->view('prueba');      	
		$this->load->view('header');
		$this->load->view('index');		
		$this->load->view('footer');
		//echo "HOAL DESDE EL CONTROLADOR AMIGO";
	}
	public function verClientes(){
		//$this->load->model('Client_model');
        //$clientes ['dataClientes'] = $this->Client_model->findAll();
		$this->load->view('header');
		$this->load->view('clientes');		
		//$this->load->view('contenido',$clientes['dataClientes']);
		$this->load->view('footer');
	}
	public function verRevista(){
		//$this->load->model('Client_model');
        //$clientes ['dataClientes'] = $this->Client_model->findAll();
		$this->load->view('header');
		$this->load->view('revista');		
		//$this->load->view('contenido',$clientes['dataClientes']);
		$this->load->view('footer');
	}
	public function verSemaforo(){
		//$this->load->model('Client_model');
        //$clientes ['dataClientes'] = $this->Client_model->findAll();
		$this->load->view('header');
		$this->load->view('semaforo');		
		//$this->load->view('contenido',$clientes['dataClientes']);
		$this->load->view('footer');
	}
	public function verEstadisticas(){
		//$this->load->model('Client_model');
        //$clientes ['dataClientes'] = $this->Client_model->findAll();
		$this->load->view('header');
		$this->load->view('estadisticas');		
		//$this->load->view('contenido',$clientes['dataClientes']);
		$this->load->view('footer');
	}
	public function login(){
		$this->load->view('login');
	}
	public function admin(){
		echo "funciono todo bien";
	}
	public function noLogin(){
		echo "funciono todo mal";
	}
}
