<?php
include_once('../../conf.ini.php');
$data = array();
array_push($data, NULL);
array_push($data, $_POST['numero']);
array_push($data, $_POST['nombre1']);
array_push($data, $_POST['paterno1']);
array_push($data, $_POST['paterno1']);
array_push($data, $_POST['fecha1']);
array_push($data, $_POST['estado1']);
array_push($data, $_POST['nombre2']);
array_push($data, $_POST['paterno2']);
array_push($data, $_POST['materno2']);
array_push($data, $_POST['fecha2']);
array_push($data, $_POST['estado2']);
$rs1 = $historial->get_new_historial($data);
($rs1 !== 0) ? $funcion->imprimir(0) : $funcion->imprimir(1);
?>