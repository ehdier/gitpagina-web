<?php
    if (!empty($_POST['user']) and !empty($_POST['pass'])) {
        $db = new Conexion();
        $data = $db->real_escape_string($_POST['user']);
        $pass = Encrypt($_POST['pass']);
        $sql = $db->query("SELECT rol FROM  usuario WHERE (usuario='$data' OR email='$data') and contraseña='$pass' LIMIT 1;");//correo o email
        if($db->rows($sql) > 0){
           // if($_POST['session']) { ini_set('session.cookie_lifetime', time() + (60*60*24));}
            //var_dump (recorrer($sql));
            
           // $_SESSION['app_id']=$db->recorrer($sql)['usuario']; 
            $_SESSION['rol']=$db->recorrer($sql)['rol'];
            echo 1;//le envimos el numero ajax
        }else{
            echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Error</strong> Las credenciales son incorrectas.
            </div>'; 
        }
        $db->liberar($sql);
        $db->close();
    }else {
        echo '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Error</strong> Todos los datos deben estar llenos.
      </div>';
    }