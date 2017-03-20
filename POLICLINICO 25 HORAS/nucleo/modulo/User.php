<?php
	include_once('../../conf.ini.php');
	$row = $historial->get_cant_historial();
	$fb->imprimir($row[0]);
?>