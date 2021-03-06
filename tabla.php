<?php 
    require_once ("clases/conexion.php");
    $conexion= new Conectar();
    $sql="SELECT * from t_juegos;";
    $result=$conexion->query($sql);
?>
<div>
    <table class="table table-hover table-condensed table-bordered" id="iddatatable">
        <thead style="background-color: rgba(195, 195, 195); color: white; font-weight: bold">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Rol</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tfoot style="background-color: #ccc; color: white; font-weight: bold">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Rol</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </tfoot>
        <tbody style="background-color: white;">
            <?php 
                while($mostrar=$result->fetch_row()):
            ?>
            <tr>
                <td>
                    <?php echo $mostrar[1]?>
                </td>
                <td>
                    <?php echo $mostrar[2]?>
                </td>
                <td>
                    <?php echo $mostrar[3]?>
                </td>
                <td style="text-align: center;">
                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0]?>')" id="btnActualizar">
                        <span class="fas fa-edit"></span>
                    </span>

                </td>
                <td style="text-align: center;">
                    <span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0]?>')">
                        <span class="fas fa-trash"></span>
                    </span>
                </td>
            </tr>
            <?php
                endwhile;
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#iddatatable').DataTable();
        });
    </script>