<?php
 	error_reporting(0);
	date_default_timezone_set('America/Lima');
	$fechaHoy = date("Y-m-d h:i:s");

	$partes_ruta = pathinfo(dirname(__FILE__));
	define('ROOT_PADRE', realpath(dirname(__FILE__)));
	define('ROOT_CLASS', ROOT_PADRE. DIRECTORY_SEPARATOR .'nucleo'. DIRECTORY_SEPARATOR .'class'. DIRECTORY_SEPARATOR);
	define('ROOT_HTML', ROOT_PADRE. DIRECTORY_SEPARATOR .'nucleo'. DIRECTORY_SEPARATOR .'html'. DIRECTORY_SEPARATOR);
	define('ROOT_PHP', ROOT_PADRE. DIRECTORY_SEPARATOR .'nucleo'. DIRECTORY_SEPARATOR .'php'. DIRECTORY_SEPARATOR);
	define('LOCALHOST', 'http://'.$_SERVER['HTTP_HOST'].'/'.$partes_ruta['basename']);
	define('ROOT_ARCHIVO', 'http://'.$_SERVER['HTTP_HOST'].'/archivos/');
	define('ROOT_JS', LOCALHOST.'/js');
	define('ROOT_FRAMEWORK', 'http://solucionsistemas.net/FRAMEWORK');

	include ROOT_CLASS.'conexion.class.php';
	include ROOT_CLASS.'mysql.class.php';
	include ROOT_CLASS.'historial.class.php';
	include ROOT_CLASS.'sesion.class.php';
	include ROOT_CLASS.'usuario.class.php';
	include ROOT_CLASS.'funciones.class.php';


	$Secciones = array(
		'AgregarHistoria'  => 'AgregarHistoria.php',
		'BusquedaHistoria' => 'BusquedaHistoria.php',
		'UsuarioClinica'   => 'UsuarioClinica.php',
		'UsuarioSession'   => 'UsuarioSession.php',
		'UsuarioLogin'     => 'UsuarioLogin.php'
	);

	$historial = new historial();
	$sesion    = new usuario();
	$servidor  = new servidor();
	$funcion   = new funciones();

	session_start();
?>