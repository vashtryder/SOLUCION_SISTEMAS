<?php
	class usuario extends MySQL
	{
		function __construct()
		{
			$this->connectDB();
		}

		public function Error($value=''){
			include_once("../../conf.ini.php");
			header('Location: '.$url.'?s=UsuarioSession');
	        die();
		}

		public function Hay_sesion(){
			if(isset($_SESSION["USUARIO"])){
				return true;
			}
		}

	}
?>