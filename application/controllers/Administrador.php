<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_user  =  $this->session->userdata('logged_in');
		if (!is_null($this->_user)) {
			$this->load->model('Usuario_model', 'user', true);
			$this->load->model('Cliente_model', 'cliente', true);
		}else{
	
			redirect('/','refresh');
		}
		//Do your magic here
	}
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('index');		
		$this->load->view('footer');
	}
	public function verClientes(){
		// $this->load->model('Cliente_model');
        $clientes ['dataClientes'] = $this->cliente->findAll();
		$this->load->view('header');
		$this->load->view('clientes',$clientes);		
		//$this->load->view('contenido',$clientes['dataClientes']);
		$this->load->view('footer');
	}
	public function verRevista(){
		$this->load->view('header');
		$this->load->view('revista');
		$this->load->view('footer');
	}
	public function verSemaforo(){
		$this->load->view('header');
		$this->load->view('semaforo');
		$this->load->view('footer');
	}
	public function verEstadisticas(){
		$this->load->view('header');
		$this->load->view('estadisticas');
		$this->load->view('footer');
	}
	public function registrarCliente(){
		$dataCliente = $_POST['cliente'];
		$cliente = $this->cliente->create($dataCliente);
		$camposFaltantes = $this->cliente->validate($cliente);
		if (count($camposFaltantes) == 0) {
			$this->cliente->save($dataCliente);
			redirect('Administrador/verClientes','refresh');
		}else{
			echo 'Faltan campos';
		}
	}
	public function eliminarCliente(){
		$idCliente = $_POST['idCliente'];
		$cliente = $this->cliente->findById($idCliente);
		$datosCliente = $cliente->toArray();
		$datosCliente = $datosCliente['_columns'];
		$datosCliente['cli_estado'] = 1;
		var_dump($datosCliente);
		exit();
		$cliente = $this->cliente->create($datosCliente);
		$camposFaltantesCliente = $this->cliente->validate();
		if (count($camposFaltantesCliente) == 0) {
			$this->cliente->save($datosCliente);
			redirect('Administrador/verClientes','refresh');
		}else{
			echo "faltan campos";
		}
	}

}

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */