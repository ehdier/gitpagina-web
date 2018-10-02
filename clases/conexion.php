<?php
    class Conectar extends mysqli{
        public function Conectar(){
            parent::__construct('localhost','root','','eventos');
            //$conexion=mysqli_connect();
            //return $conexion;
        }        
 
    }
    