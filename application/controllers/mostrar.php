<?php
 class Prueba extends CI_Controller{
 	public function __construct()
	{
		parent::__construct();
		 
			 
			$this->load->model('Cliente_model', 'cliente', true);
			 
		//Do your magic here
	}
	public function detallesCliente($nombre){
		 
			$cliente = $this->cliente->findByName($nombre);
			foreach($cliente as $key){
			   //print_r($key->get('cli_id'));
			if ($key->get('cli_nombreFantasia') == $nombre) {
				  $datosCliente['id'] = $key->get('cli_id');
			$datosCliente['nombre'] = $key->get('cli_nombre');
			$datosCliente['apellidos'] = $key->get('cli_apellidos');
			$datosCliente['rut'] = $key->get('cli_rut');
			$datosCliente['dv'] = $key->get('cli_dv');
			$datosCliente['direccion'] = $key->get('cli_direccion');
			$datosCliente['nombreFantasia'] = $key->get('cli_nombreFantasia');
			$datosCliente['estado'] = $key->get('cli_estado');
			$datosCliente['giro'] = $key->get('cli_giro');
			$datosCliente['telefono'] = $key->get('cli_telefono');
			$datosCliente['correo'] = $key->get('cli_correo');
				}else{
					$datosClientes['error'] = "hola";
				}
			 
			
			}
			
			return $datosCliente;
	 	 
	}
 }
 $nombre = $_POST['nombre'];
 $cliente = new Prueba();
 $r = $cliente->detallesCliente($nombre);
 echo json_encode($r);
/*$this->load->database();
$cliente = $this->cliente->findByName($nombre);
$nombre = $_POST['nombre'];
$datos['text'] = "chao pa";
if ($nombre == $cliente['nombreFantasia']) {
	echo json_encode($datos);
}*/
/*$datosCliente['id'] = $cliente->get('cli_id');
$datosCliente['nombre'] = $cliente->get('cli_nombre');
$datosCliente['apellidos'] = $cliente->get('cli_apelidos');
$datosCliente['rut'] = $cliente->get('cli_rut');
$datosCliente['dv'] = $cliente->get('cli_dv');
$datosCliente['direccion'] = $cliente->get('cli_direccion');
$datosCliente['nombreFantasia'] = $cliente->get('cli_nombreFantasia');
$datosCliente['estado'] = $cliente->get('cli_estado');
echo json_encode($datosCliente);*/
	 

//echo "<br><br> TRABAJO <br><br>";
//print_r($_POST['trabajo']);
//echo "<br><br> COSTOS FIJOS <br><br>";
//print_r($_POST['costosFijos']);
//echo "TOTAL TRABAJO: ".$_POST['totalTrab'];
//echo "TOTAL COSTOS FIJOS: ".$_POST['costosTotalFijo'];
/*echo "CLIENTE<br><br>";
print_r($_POST['cliente']) ;
echo "<br><br> TRABAJO <br><br>";
print_r($_POST['trabajo']);
echo "<br><br> HORAS <br><br>";
print_r($_POST['horas']);
echo "<br><br> TOTAL COSTOS VARIABLES <br><br>";
print_r($_POST['costos']);
echo "<br><br> COSTOS FIJOS <br><br>";
print_r($_POST['costosFijos']);
echo "<br><br> PROVEEDOR <br><br>";
print_r($_POST['proveedor']);
echo "<br><br> COMPRA A PROVEEDOR <br><br>";
print_r($_POST['compra']);
echo "<br><br> FORMA DE PAGO PROVEEDOR <br><br>";
print_r($_POST['formaPago']);
echo "<br><br> FACTURA <br><br>";
print_r($_POST['factura']);
echo "<br><br> FORMA DE PAGO FACTURA <br><br>";
print_r($_POST['formaPagoFac']);*/
exit();