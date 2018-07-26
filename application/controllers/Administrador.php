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
			$this->load->model('Factura_model', 'facturas', true);
			$this->load->model('FormaPago_model', 'formapagos', true);
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
	public function papeleraClientes(){
	// $this->load->model('Cliente_model');
    $clientes ['dataClientes'] = $this->cliente->findAll();
	$this->load->view('header');
	$this->load->view('papeleraClientes',$clientes);		
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
	public function agregarCliente($id = null){
		$cliente;
		if(  !is_null($id) && is_numeric($id)  && !is_null($cliente = $this->cliente->findById($id))  ){
			
			
		}else{

			$cliente = new Cliente_model();
		}
		if(isset($_POST['cliente'])){
			$cliente = $this->cliente->create($_POST['cliente']);
			//$cliente->set('cli_id', $id);
			$camposFaltantes = $cliente->validate($cliente);
			if (count($camposFaltantes) == 0) {
				$cliente->save();
				redirect('Administrador/verClientes','refresh');
			}else{
				$data['mensaje'] = 'Faltan campos';
			}
		}	
		$data['cliente'] = $cliente;
		$this->load->view('header');
		$this->load->view('agregarClientes', $data);	
		$this->load->view('footer');
	}
	public function recuperarCliente($id = null){
		$cliente;
		if(  !is_null($id) && is_numeric($id)  && !is_null($cliente = $this->cliente->findById($id))  ){
			
			
		}else{

			$cliente = new Cliente_model();
		}	
		if(!is_null($cliente)){
			$cliente->set('cli_estado', 0);
			$camposFaltantes = $cliente->validate($cliente);
			if (count($camposFaltantes) == 0) {
				$cliente->save();
				redirect('Administrador/verClientes','refresh');
			}else{
				$data['mensaje'] = 'Faltan campos';
			}
		}	
		$data['cliente'] = $cliente;
		$this->load->view('header');
		$this->load->view('papeleraClientes', $data);	
		$this->load->view('footer');
	}
	public function agregarProveedor($id = null){
	$proveedor;
	if(  !is_null($id) && is_numeric($id)  && !is_null($proveedor = $this->proveedor->findById($id))  ){
		
		
	}else{

		$proveedor = new Proveedor_model();
	}
	if(isset($_POST['proveedor'])){
		$proveedor = $this->proveedor->create($_POST['proveedor']);
		//$proveedor->set('cli_id', $id);
		$camposFaltantes = $proveedor->validate($proveedor);
		if (count($camposFaltantes) == 0) {
			$proveedor->save();
			redirect('Administrador/verProveedores','refresh');
		}else{
			$data['mensaje'] = 'Faltan campos';
		}
	}	
	$data['proveedor'] = $proveedor;
	$this->load->view('header');
	$this->load->view('agregarProveedores', $data);	
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
	public function eliminarCliente($id = null){
		if(!is_null($id) && is_numeric($id)){
			$this->db->delete('Cliente', array('cli_id' => $id)); 
			redirect('Administrador/papeleraClientes','refresh');
			
		}else{

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
	public function agregarFactura(){
		if ($this->input->post()) {
			$factura = $this->facturas->create($this->input->post('factura'));
			$factura->insert();
			$formapago = $this->formapagos->create($this->input->post('formapago'));
			$formapago->insert();

			$this->session->set_flashdata('notice', 'Factura creada exitosamente');
		}else{
			$this->session->set_flashdata('alert', 'No se ha podido crear, favor verificar los datos ingresados');
			redirect('Administrador/index');
		}
	}

}

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */