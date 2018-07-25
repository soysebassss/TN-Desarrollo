<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/json; charset=utf-8');
	$datos = array ('nombre');
	$datos['nombre'] = $_POST['nombre'];
	echo json_encode($datos);
	exit();
?>