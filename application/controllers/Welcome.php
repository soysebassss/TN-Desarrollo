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
		//$this->load->view('header');
		$this->load->view('login');		
		//$this->load->view('footer');
		//echo "HOAL DESDE EL CONTROLADOR AMIGO";
	}
	public function detallesProveedor(){
	if(isset($_REQUEST['nombre'])){
		$nombre = $_REQUEST['nombre'];
		$proveedor = $this->proveedor->findByName($nombre);
		print_r($proveedor);
		$datosProveedor = array(
			'id' => $proveedor->get('pro_id'),
            'nombre' => $proveedor->get('pro_nombre'),
            'apellidos'=> $proveedor->get('pro_apelidos'),
            'rut' => $proveedor->get('pro_rut'),
            'dv'=> $proveedor->get('pro_dv'),
            'direccion' => $proveedor->get('pro_direccion'),
            'comuna'=> $proveedor->get('pro_comuna'),
            'banco' => $proveedor->get('pro_banco'));
		print_r($datosProveedor); exit();
		echo json_encode($datosProveedor);
 	}else{
    echo  "existen campos vacíos";

	}
	}
}
