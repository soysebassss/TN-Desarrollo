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
	public function principal(){
		$this->load->model('Material_model');
		$this->load->model('CostoFijo_model');
		$this->load->model('Factura_model');
		$this->load->model('Trabajo_model');
		$this->load->model('Compra_model');
		$this->load->model('Horas_model');
		$this->load->model('CostoVariable_model');
		$this->load->model('FormaPago_model');
		$datosTrabajo = $_REQUEST['trabajo'];
		$trabajo = $this->Trabajo_model->create($datosTrabajo[0]);
		$camposFaltantes = $trabajo->validate($trabajo);
		if (count($camposFaltantes) == 0) {
			//$trabajo->save($datosTrabajo[0]);
			/*
			for($i=1;$i<=3;$i++){
				if (isset($datosTrabajo[$i])) {
					$trabajoAgregado = $this->Trabajo_model->create($datosTrabajo[$i]);
					$camposFaltantesTrabajo = $trabajoAgregado->validate($trabajoAgregado);
					if (count($camposFaltantesTrabajo) == 0) {
						$trabajoAgregado->save($datosTrabajo[$i]);
					}else{

					}
				}
			}
			*/
			$datosFormaPago = $_REQUEST['formaPago'];
			$formaPago = $this->FormaPago_model->create($datosFormaPago);
			$camposFaltantesFormaPago = $formaPago->validate($formaPago);
			if (count($camposFaltantesFormaPago) == 0) {
				//$formaPago->save($datosFormaPago);
				$datosCostosVariables = $_REQUEST['costos'];
				$datosCostosFijos = $_REQUEST['costosFijos'];
				$costoVariable = $this->CostoVariable_model->create($datosCostosVariables);
				$camposFaltantesCostosVariables = $costoVariable->validate($costoVariable);
				$costoFijo = $this->CostoFijo_model->create($datosCostosFijos[0]);
				$camposFaltantesCostosFijos = $costoFijo->validate($costoFijo);
				if (count($camposFaltantesCostosVariables) == 0 && count($camposFaltantesCostosFijos) == 0) {
					$costoPapelFormulario = $datosCostosVariables['cos_papel'];
					$costoTintaFormulario = $datosCostosVariables['cos_tinta'];
					$costoPapel = explode('$ ', $costoPapelFormulario);
					$costoTinta = explode('$ ', $costoTintaFormulario);
					$costoVariable->set('cos_papel',$costoPapel[1]);
					$costoVariable->set('cos_tinta', $costoTinta[1]);
					//$costoFijo->save($datosCostosFijos);
					//$costoVariable->save();
					//exit();
					//$data = array();
					//$data['factura'] = $_REQUEST['factura'];
					//
					//$joel = $_REQUEST['compra'];
					$bancoProv = implode(";",$_POST['proveedor']);
					$compra = implode(";", $_REQUEST['compra']);
					$factura = implode(";", $_REQUEST['factura']);
					$forma = implode(";",$_POST['formaPago']);
					$formaFac = implode(";",$_POST['formaPagoFac']);
					 redirect('Administrador/principalDos/?valor='.$compra."&valorDos=".$factura."&bancoProv=".$bancoProv."&formaPro=".$forma."&formaFc=".$formaFac,'refresh');
				}else{
					echo 'todo mal';
				}
			}
		}
	}
	public function principalDos(){

		echo 'DATOS FACTURA TOTAL<br>';
		$arrayDos = explode(";", $_GET['valorDos']);
		$arrayDosFac = explode(";", $_GET['formaFc']);
		print_r($arrayDos);
		print_r($arrayDosFac);
		echo '<br><br>DATOS COMPRA PROVEEDOR<br><br>';
		$array = explode(";", $_GET['valor']);
		$prov = explode(";", $_GET['bancoProv']);
		$provForm = explode(";", $_GET['formaPro']);
		print_r($array);
		print_r($prov);
		print_r($provForm);
		 

		//var_dump($compra);
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