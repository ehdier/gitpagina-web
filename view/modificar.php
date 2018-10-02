


<!DOCTYPE html>
<html>
    
    <head>
        
        <title></title>
    </head>
    
    <body>
          <?php
                
                
                include './conexion.php';
               $id = $_REQUEST['id'];
                $query = "select * from tabla_imagenes where id='$id' ";
                $resultado=$conexion->query($query);
               $row = $resultado->fetch_assoc();
                    
               
                ?>
                
        
        
        
    <center>
        <form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                
               <input type="text" required=""  name="nombre" placeholder="nombre.." value=" <?php echo $row['nombre'];?>"/><br/><br/>
               <img height="90px" width="90px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
                     <input type="file"  required="" name="imagen"/><br/><br/>
                    <input type="submit" value="aceptar"/> <br/><br/>
                
            </form>
    </center>
        
    </body>
    
</html>