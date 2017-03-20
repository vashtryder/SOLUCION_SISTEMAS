<?php
	class servidor extends MySQL
	{
		function __construct()
        {
            $this->connectDB();
        }

		public function get_info_user()
		{
			return MySQL::consultaArray("SELECT * FROM admin");
		}

		public function get_info_cantidad_historial($value='')
		{
			return MySQL::consultaForech("SELECT ID FROM historial_clinico");
		}

	}

?>