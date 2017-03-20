<?php
  include 'conf.ini.php';
  if(empty($_GET['s'])) $var_sesion ='UsuarioLogin'; else $var_sesion = $_GET['s'];
  $seccion = $funcion->Seccion();
  include ROOT_HTML.'cabecera.html.php';
  include $seccion;
  include ROOT_HTML.'pie.html.php';
?>