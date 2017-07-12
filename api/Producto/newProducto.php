<?php 
require_once 'Producto.php';

	$data = json_decode(file_get_contents("php://input"));
	echo json_encode($data);

	$name = $data->name ? $data->name : '';
	$last = $data->last ? $data->last : '';

	if(empty($name)){
		die();
	}else if(empty($last)){
		die();
	}else{
		$user = new Producto();
		$user->setUsuarios($name, $last);	
	}
 ?>