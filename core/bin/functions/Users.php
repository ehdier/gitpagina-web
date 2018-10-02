<?php
    //toda la informacion de los usuarios
    function Users(){
        $db = new Conexion();
        $sql= $db->query('SELECT * FROM usuario;');
        if ($db->rows($sql)>0) {
            while($d = $db->recorrer($sql)){ 
                $users[$d['user']] = array(
                    
                    'user'=>$d['user'],
                    'pass'=>$d['pass'],
                    'email'=>$d['email'],
                    'permisos'=>$d['permisos']
                );
            }

        }else{
            $users=false;
        }
        $db->liberar($sql);
        $db->close();
        return $users;
    }