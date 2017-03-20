<?php
	if(!$sesion->Hay_sesion()) $usuario->Error();
	include ROOT_HTML.'menu.html.php';
	include ROOT_HTML.'usuario.html.php';
?>