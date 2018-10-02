<?php
    
    $db = new Conexion();
    $pass=  Encrypt($_POST['pass']);
    $user = $db->real_escape_string($_POST['user']);
    $email= $db->real_escape_string($_POST['email']);
    $nombre=$db->real_escape_string($_POST['nombre']);
    $apellido=$db->real_escape_string($_POST['apellido']);
    $rol=$_POST['rol'];
    //verificamos si ya hay email registrado
    $sql= $db->query("SELECT `usuario` FROM `usuario` WHERE `user`='$user' OR `email`='$email' LIMIT 1;");
    
    if($db->rows($sql) == 0){//si no tienen resultados 

        
            //como solo se ejecuta no es necasrio crear una variable 
            $db->query("INSERT INTO `usuario`(`usuario`, `email`, `contraseña`, `rol`) VALUES ('$user','$email','$pass','$rol');");
            $db->query("INSERT INTO `datos_usuario`(`usuario`, `nombre`, `apellido`, `email`) VALUES ('$user','$nombre','$apellido','$email');");
            //$sql_2=$db->query("SELECT usuario FROM usuario where $user;");//ultima id seleccionada
            $_SESSION['app_id'] = $user;
            $_SESSION['rol'] = $rol;
              //  $db->liberar($sql_2);
            
        echo 1;
        //$html='ok';

        //sino significa que sis tiene una consulta
    }else{
        $usuario = $db->recorrer($sql)['usuario'];//valor del usuario
        if(strtolower($user) == strtolower($usuario)){//signifa que ya existe el usuario
            echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Error</strong> EL usuario ingresado ya existe.
            </div>';
        }else{//si no significa que el email es el que coincide
            echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Error</strong> El email ingresado ya existe.
            </div>';
        }
    }
    //$db->liberar($sql); 
    //$db->close();

    