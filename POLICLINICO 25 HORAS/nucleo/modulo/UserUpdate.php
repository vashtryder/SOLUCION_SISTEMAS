<?php
include_once('../../conf.ini.php');
$data = array();
array_push($data,$_POST['nombres']);
array_push($data,$_POST['password']);
array_push($data,$_POST['id']);
$rs = $usuario->get_update_usuario($data);
($rs !== 0) ? $funcion->imprimir(0) : $funcion->imprimir(1);
?>