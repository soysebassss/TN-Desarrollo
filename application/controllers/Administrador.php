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
			$this->load->model('Proveedor_model', 'proveedor', true);
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
	public function verProveedores(){
	// $this->load->model('Cliente_model');
    $proveedores ['dataProveedores'] = $this->proveedor->findAll();
	$this->load->view('header');
	$this->load->view('proveedores',$proveedores);		
	//$this->load->view('contenido',$clientes['dataClientes']);
	$this->load->view('footer');
	}
	public function agregarCliente(){
		$this->load->view('header');
		$this->load->view('agregarClientes');	
		$this->load->view('footer');
	}
	public function agregarProveedor(){
	$this->load->view('header');
	$this->load->view('agregarProveedores');	
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
		$camposFaltantes = $cliente->validate($cliente);
		if (count($camposFaltantes) == 0) {
			var_dump($cliente);
			//exit();
			$cliente->save($dataCliente);
			redirect('Administrador/verClientes','refresh');
		}else{
			echo 'Faltan campos';
		}
	}
	public function registrarProveedor(){
	$dataProveedor = $_POST['proveedor'];
	$proveedor = $this->proveedor->create($dataProveedor);
	$camposFaltantes = $proveedor->validate($proveedor);
	if (count($camposFaltantes) == 0) {
		var_dump($proveedor);
		//exit();
		$proveedor->save($dataCliente);
		redirect('Administrador/verProveedores','refresh');
	}else{
		echo 'Faltan campos';
	}
	}
	public function detallesCliente(){
		if(isset($_REQUEST['nombre'])){
			$nombre = $_REQUEST['nombre'];
			$cliente = $this->cliente->findByName($nombre);
			print_r($cliente);
			$datosCliente = array(
				'id' => $cliente->get('cli_id'),
	            'nombre' => $cliente->get('cli_nombre'),
	            'apellidos'=> $cliente->get('cli_apelidos'),
	            'rut' => $cliente->get('cli_rut'),
	            'dv'=> $cliente->get('cli_dv'),
	            'direccion' => $cliente->get('cli_direccion'),
	            'nombreFantasia'=> $cliente->get('cli_nombreFantasia'),
	            'estado' => $cliente->get('cli_estado'));
			print_r($datosCliente); exit();
			echo json_encode($datosCliente);
	 	}else{
        echo  "existen campos vacíos";

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