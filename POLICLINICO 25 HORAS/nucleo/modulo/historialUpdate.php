<?php
include_once('../../conf.ini.php');
$data = array();
array_push($data, $_POST['nombre1']);
array_push($data, $_POST['paterno1']);
array_push($data, $_POST['materno1']);
array_push($data, $_POST['fecha1']);
array_push($data, $_POST['estado1']);
array_push($data, $_POST['nombre2']);
array_push($data, $_POST['paterno2']);
array_push($data, $_POST['materno2']);
array_push($data, $_POST['fecha2']);
array_push($data, $_POST['estado2']);
array_push($data, $_POST['id']);
$rs = $historial->get_update_historial($data);
($rs !== 0) ? $funcion->imprimir(0) : $funcion->imprimir(1);
?>