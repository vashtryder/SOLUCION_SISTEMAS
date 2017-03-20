<?php
	include_once('../../conf.ini.php');
	$row = $servidor->get_info_user();
	$funcion->imprimir($row[1]);
?>