<?php
	class funciones
	{

		public function Seccion()
		{
			global $Secciones;
			$donde = $_GET['s'];
			if(array_key_exists($donde, $Secciones))
				return ROOT_PHP.$Secciones[$donde];
			else
				return ROOT_PHP.'UsuarioLogin.php';
		}

		public function imprimir($value='')
		{
			print_r($value);
		}

	}
?>