<?php
	class usuario extends MySQL
	{

		function __construct()
		{
			$this->connectDB();
		}

		public function get_new_usuario($data)
		{
			return MySQL::consulta("");
		}


		public function get_update_usuario($data)
		{
			if($data[1] == ''){
				return MySQL::consulta("UPDATE admin SET
					NOMBRES='".MySQL::real_escape_string($data[0])."'
					WHERE ID='".MySQL::real_escape_string($data[2])."'");
			} else {
				return MySQL::consulta("UPDATE admin SET
					NOMBRES='".MySQL::real_escape_string($data[0])."',
					PASS='".MySQL::real_escape_string($data[1])."'
					WHERE ID='".MySQL::real_escape_string($data[2])."'");
			}
		}

		public function get_delete_usuario($data)
		{
			return MySQL::consulta("");
		}


		public function get_login_usuario($data)
		{
			return MySQL::consultaForech("SELECT ID FROM admin
			WHERE USER='".MySQL::real_escape_string($data[0])."'
			and PASS='".MySQL::real_escape_string($data[1])."'"
		}

	}
?>