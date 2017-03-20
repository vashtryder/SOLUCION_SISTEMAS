<?php
    class MysQL
    {
        private $conexion;

        protected function connectDB()
        {
            if(!isset($this->conexion))
            {
                // $this->conexion = new mysqli("localhost", "solucir2_ss", "ss.873jm.DW@3", "solucir2_policlinico");
                $this->conexion = new mysqli("localhost", "root", "", "policlinico");

                if (!$this->conexion->set_charset("utf8")){
                    printf("<div class='alert alert-danger alert-dismissible' role='alert'>Error cargando el conjunto de caracteres utf8: %s </div>\n", $this->conexion->error);
                    exit();
                }

                if ($this->conexion->connect_errno) {
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'><span class='glyphicon glyphicon-remove-circle'></span>
                    <strong>Oh! Conexion Fallida </strong> Comuniquese con &Aacute;rea de Inform&aacute;tica.\n".mysqli_connect_error()."</div>";
                    exit();
                }
            }
        }

        function __construct()
        {
            $this->connectDB();
        }

        public function consultaForech($consulta='')
        {
            $arrayName = array();
            $rs = $this->conexion->query($consulta);
            while ($row = $rs->fetch_array(MYSQLI_NUM)) {
                foreach ($row as $rows) {
                    $arrayName[] = $rows;
                }
            }
            return $arrayName;
            $this->conexion->close();
        }

        public function consultaArray($consulta='')
        {
            $arrayName = array();
            $rs = $this->conexion->query($consulta);
            while ($row = $rs->fetch_array(MYSQLI_NUM)) {
                $arrayName[] = $row;
            }
            return $arrayName;
            $this->conexion->close();
        }

        public function consulta($consulta='')
        {
            $this->conexion->query("START TRANSACTION");
            $rs = $this->conexion->query($consulta);
            if($rs !== false){
                $this->conexion->query("COMMIT");
                return 1;
            }else{
                $this->conexion->query("ROLLBACK");
                return 0;
            }
            $this->conexion->close();
        }

        public function consultaRetornoID()
        {
            return $this->conexion->insert_id;
        }

        public function real_escape_string($consulta='')
        {
            return $this->conexion->real_escape_string($consulta);
        }

        public function mysql_close()
        {
            return $this->conexion->close();
        }
    }
?>