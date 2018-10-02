<?php
    class Conexion extends mysqli{
      
        public function __construct(){
            parent::__construct('localhost', 'root', '', 'eventos');
            $this->connect_errno ? die('Error en la conexion a la base de datos') : null;
            $this->set_charset('utf8');
        }

        public function rows($sql){
            return mysqli_num_rows($sql);
        }

        public function liberar($sql){
            return mysqli_free_result($sql);
        }

        public function recorrer($sql){
            return mysqli_fetch_array($sql);
        }
    }