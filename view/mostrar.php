<!DOCTYPE html>
<html>
    
    <head>
        
        <title>imagenes</title>
    </head>
    
    <body>
        
    <center>
        
        <table border="2">
            
            <thead>
                
                
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>imagen</th>
                    <th>operaciones</th>
                    
                </tr>
            </thead>
            
            
            
            <tbody>
                
                <?php
                
                
                include './conexion.php';
                $query = "select * from tabla_imagenes";
                $resultado=$conexion->query($query);
                while ($row = $resultado->fetch_assoc()){
                    
               
                ?>
                
                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['nombre']; ?> </td>
                    <td>  <img height="90px"  width="90px;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/> </td>
                    <th><a href="modificar.php?id= <?php echo $row ['id'];?> ">modificar</a></th>
                    <th><a href="#">eliminar</a></th>
                    
                </tr>
                
                <?php
                }
                ?>
                
            </tbody>
            
            
            
            
        </table>
        
        
        
        
    </center>
        
        
        
    </body>
    
</html>
