<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {	  
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
		//site_url("controlador/metodo"); 
		//redirect("controlador/metodo");
		$this->load->view('header');
		$this->load->view('footer');
		 /*			
		//<input type="text" name="cliente[nombre]">
		//en el controlador
		$datosCliente = $_POST['cliente'];
		$cliente  = $this->cliente_model->create($datosCliente);
		$cliente->get('cli_nombre');
		//columnas completas
		$columnasCompletas = $cliente->validate();
		if( count($columnasCompletas) == 0 ){
			$cliente->save();
		}else{
			//enviar feedback 
		} 
		*/
	}
	public function administrarClientes(){		
        $this->load->model('Client_model');
		$clientes = $this->Client_model->findAll();
		$datos = array();
	    foreach ($clientes as $key => $registro) {	   
	    	// Primero transformar el registro
	    	// en un Array()  	
	     	$cliente = $registro->toArray();
	     	// asociar el arreglo de registro
	     	// en la posicion $key del arrego $datos
	     	$datos[$key] = $cliente;	     	
	    }
	    $this->load->view('header');
	    $this->load->view('administradorUsuario',$datos);
	    $this->load->view('footer');
	    //$cli = $datos[0];
	    //$columnas = $cli["_columns"];
	}
	public function registrarUsuario(){
		$this->load->model('Client_model');
		$datosCliente = $_POST['cliente'];
		$cliente  = $this->Client_model->create($datosCliente);
		$nombre = $cliente->get('cli_nombre');
		$dv = $cliente->get('cli_rut');		
		$columnasCompletas = $cliente->validate();
		if( count($columnasCompletas) == 0 ){
			$cliente->save();
		
		}else{
			echo "faltan campos";
		}
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function actualizarDatos(){
		$this->load->model('Client_model');
		
	}
}
