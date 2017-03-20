<?php
	include_once('../../conf.ini.php');
	$data = array();
	array_push($data,strtoupper($_POST['username']));
	array_push($data,strtoupper($_POST['password']));
	$row_login = $usuario->get_login_usuario($data);
	if($row_login){
		$_SESSION['USUARIO'] = $_POST['username'];
		$funcion->imprimir("BusquedaHistoria");
	} else {
		$funcion->imprimir(0);
	}
?>