<?php
    class Crud{
        protected $obj;

        public function Crud(){
            $this->obj= new Conectar();
        }

        public function agregarNuevo($datos){
            
            $sql="INSERT INTO t_juegos(nombre, anio, empresa) VALUES('$datos[0]','$datos[1]','$datos[2]');";           
            return $this->obj->query($sql);
        }

        public function obtenDatos($idjuego){
            $sql="SELECT `id`,`nombre`,`apellido`,`telefono`,`email` FROM `datos_usuario` 
					where id='$idjuego'";
            $result=$this->obj->query($sql);
            $ver=$result->fetch_row();
            $datos=array(
                'id' => $ver[0],
                'nombre' => $ver[1],
                'apellido' => $ver[2],
                'telefono' => $ver[3],
                'email' =>$ver[4]
            );
            return $datos;
        }

        public function actualizar($datos){
            $sql="UPDATE t_juegos SET nombre='$datos[0]',
                                        anio='$datos[1]',
                                        empresa='$datos[2]' WHERE id_juego='$datos[3]'";

            return $this->obj->query($sql);
        }

        public function eliminar($idjuego){
            $sql="DELETE FROM t_juegos WHERE id_juego='$idjuego'";
            return $this->obj->query($sql);
        }
    }