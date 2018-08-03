<?php
 class PruebaProveedor extends CI_Controller{
 	public function __construct()
	{
		parent::__construct();
		 
			 
			$this->load->model('Proveedor_model', 'proveedor', true);
			 
		//Do your magic here
	}
	public function detallesProveedor($nombre){
		 
			$proveedor = $this->proveedor->findByName($nombre);
			foreach($proveedor as $key){
			   //print_r($key->get('cli_id'));
			if ($key->get('pro_nombre') == $nombre) {
				$datosProveedor['id'] = $key->get('pro_id');
				$datosProveedor['nombre'] = $key->get('pro_nombre');
				$datosProveedor['apellidos'] = $key->get('pro_apellidos');
				$datosProveedor['rut'] = $key->get('pro_rut');
				$datosProveedor['dv'] = $key->get('pro_dv');
				$datosProveedor['direccion'] = $key->get('pro_direccion');
				$datosProveedor['comuna'] = $key->get('pro_comuna');
				$datosProveedor['banco'] = $key->get('pro_banco');
				}else{
					$datosProveedor['error'] = "hola";
				}
			 
			
			}
			
			return $datosProveedor;
	 	 
	}
 }
 $nombre = $_POST['nombre'];
 $proveedor = new PruebaProveedor();
 $r = $proveedor->detallesProveedor($nombre);
 echo json_encode($r);
exit();