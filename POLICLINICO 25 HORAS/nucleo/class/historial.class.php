<?php
	class historial extends MySQL
	{
		function __construct()
		{
			 $this->connectDB();
		}

		public function get_new_historial($data)
		{
			return MySQL::consulta("INSERT INTO historial_clinico(ID, HC, NOMSENORA, APELLIDOPATERNOSENORA, APELLIDOMATERNOSENORA, FECHA_NACIMIENTOSENORA, ESTADOCIVILSENORA, NOMBRESENOR, APELLIDOPATERNOSENOR, APELLIDOMATERNOSENOR, FECHA_NACIMIENTOSENOR, ESTADOCIVILSENOR) VALUES (
			'".MySQL::real_escape_string($data[0])."',
			'".MySQL::real_escape_string($data[1])."',
			'".MySQL::real_escape_string($data[2])."',
			'".MySQL::real_escape_string($data[3])."',
			'".MySQL::real_escape_string($data[4])."',
			'".MySQL::real_escape_string($data[5])."',
			'".MySQL::real_escape_string($data[6])."',
			'".MySQL::real_escape_string($data[7])."',
			'".MySQL::real_escape_string($data[8])."',
			'".MySQL::real_escape_string($data[9])."',
			'".MySQL::real_escape_string($data[10])."',
			'".MySQL::real_escape_string($data[11])."')");
		}

		public function get_update_historial($data)
		{
			return MySQL::consulta("UPDATE historial_clinico SET
			NOMSENORA              ='".MySQL::real_escape_string($data[0])."',
			APELLIDOPATERNOSENORA  ='".MySQL::real_escape_string($data[1])."',
			APELLIDOMATERNOSENORA  ='".MySQL::real_escape_string($data[2])."',
			FECHA_NACIMIENTOSENORA ='".MySQL::real_escape_string($data[3])."',
			ESTADOCIVILSENORA      ='".MySQL::real_escape_string($data[4])."',
			NOMBRESENOR            ='".MySQL::real_escape_string($data[5])."',
			APELLIDOPATERNOSENOR   ='".MySQL::real_escape_string($data[6])."',
			APELLIDOMATERNOSENOR   ='".MySQL::real_escape_string($data[7])."',
			FECHA_NACIMIENTOSENOR  ='".MySQL::real_escape_string($data[8])."',
			ESTADOCIVILSENOR       ='".MySQL::real_escape_string($data[9])."'
			WHERE ID               ='".MySQL::real_escape_string($data[10])."'");
		}

		public function get_delete_historial($data)
		{
			return MySQL::consulta("DELETE FROM historial_clinico
			WHERE ID='".MySQL::real_escape_string($data[0])."'");
		}

		public function get_info_historial()
		{
			return MySQL::consultaArray("SELECT ID, HC, NOMSENORA, APELLIDOPATERNOSENORA, APELLIDOMATERNOSENORA, NOMBRESENOR, APELLIDOPATERNOSENOR, APELLIDOMATERNOSENOR FROM historial_clinico");
		}

		public function set_info_historial($value='')
		{
			return MySQL::consultaForech("SELECT * FROM historial_clinico
			WHERE ID='$value'");
		}

		public function get_datos_historial()
		{
			return MySQL::consultaArray("SELECT ID, HC, NOMSENORA, APELLIDOPATERNOSENORA, APELLIDOMATERNOSENORA
			FROM historial_clinico
			WHERE HC LIKE '%".$_REQUEST['term']."%'
			OR APELLIDOPATERNOSENORA LIKE '%".$_REQUEST['term']."%'
			OR APELLIDOMATERNOSENORA LIKE '%".$_REQUEST['term']."%'");
		}

		public function get_cant_historial()
		{
			return MySQL::consultaForech("SELECT count(ID) FROM `historial_clinico`");
		}

	}
?>