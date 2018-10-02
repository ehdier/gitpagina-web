     





<?php

include ("./conexion.php");

$id= $_REQUEST['id'];
$nombre = $_POST['nombre']; 
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query="update tabla_imagenes set nombre='$nombre', imagen='$imagen' where id='$id' ";
$resultado =$conexion->query($query);

if($resultado){
    
    echo 'si se modifico';
}
 else {
    echo 'no se modifico';    
}
    
    
?>


