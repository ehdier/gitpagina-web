<?php 
    require('core/core.php');
?>
<!doctype html>
<html lang="es">

<head id="test">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/app/css/bootstrap.min.css">
    <!-- Datatbles -->
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!-- Alertify -->
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.min.css">
    
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="view/app/css/main.css">
    <script src="view/app/js/generales.js"></script>
    <title>Hip-hop</title>
</head>

<body>
    <?php require_once('view/overall/nav.php')?>

    <div class="container-fluid p-0 main" id="main">
    </div>


    <footer id="footer">
        <div class="fotterfin">
            <a> <img class="imgfooter" src="view/app/img/f.png" alt="Card image cap"></a>
            <a> <img class="imgfooter" src="view/app/img/i.png" alt="Card image cap"> </a>
            <a> <img class="imgfooter" src="view/app/img/t.png" alt="Card image cap"> </a>
        </div>    
        <p style="margin-left: 43%;  "> © propietario de la pagina tecpro </p>
    </footer>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="view/app/js/libs/jquery-3.3.1.min.js">
    </script>
    <script src="view/app/js/libs/popper.min.js"></script>
    <script src="view/app/js/libs/bootstrap.min.js"></script>
    <script type="text/javascript" src="view/app/js/main.js"></script>
    <!--Datatables-->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="librerias/alertify/alertify.min.js"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <script>
    $(document).ready(function () {
      $('#btnAgregarnuevo').click(function () {
        datos = $('#frmnuevo').serialize();
        $.ajax({
          type: "POST",
          data: datos,
          url: "procesos/agregar.php",
          success: function (r) {
            if (r == 1) {
              $('#frmnuevo')[0].reset();
              $('#tablaDatatable').load('view/tabla.php');
              alertify.success("agregado con exito");
            } else {
              alertify.error("Fallo al agregar");
            }
          }
        });
      });
      $('#btnActualizar').click(function () {
        datos = $('#frmnuevoU').serialize();
        $.ajax({
          type: "POST",
          data: datos,
          url: "procesos/actualizar.php",
          success: function (r) {
            if (r == 1) {
              $('#frmnuevoU')[0].reset();
              $('#tablaDatatable').load('view/tabla.php');
              alertify.success("Actualizado con exito");
            } else {
              alertify.error("Fallo al actualizar");
            }
          }
        });
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('#tablaDatatable').load('view/tabla.php');
    });
  </script>
  <script>
    function agregaFrmActualizar(idjuego) {
      $.ajax({
        type: "POST",
        data: "idjuego=" + idjuego,
        url: "procesos/obtenDatos.php",
        success: function (r) {
          datos = jQuery.parseJSON(r);
          $('#idjuego').val(datos['id_juego']);
          $('#nombreU').val(datos['nombre']);
          $('#anioU').val(datos['anio']);
          $('#empresaU').val(datos['empresa']);
        }
      });
    }
    function eliminarDatos(idjuego) {
      alertify.confirm('Eliminar un juego', '¿Seguro de elimar este juego?',
        function () {
          $.ajax({
            type: "POST",
            data: "idjuego=" + idjuego,
            url: "procesos/eliminar.php",
            success: function (r) {
             if(r == 1){
                $('#tablaDatatable').load('view/tabla.php');
               alertify.success("Elimanado con exito");
             }else{
               alertify.error("No se pudo elimanr...");
             }
            }
          });
        }
        , function () {});
    }
  </script>
</body>

</html>