<?php
include_once('../../conf.ini.php');
$data = array()
array_push($data, $_POST['id']);
$rs = $historial->get_delete_historial($data);
($rs !== 0) ? $funcion->imprimir(0) : $funcion->imprimir(1);
?>