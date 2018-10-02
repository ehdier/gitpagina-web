<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <!-- Datatbles -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!-- Alertify -->
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.min.css">
  <!--CUSTOM CSS-->
  <style>
      
*{
    font-family: 'Roboto', sans-serif;    
}

body{
    background-image: url(view/img/login.jpg); /* fallback for old browsers */
    margin-top: 80px;    
    width: 100%;
    background-color: rgba(195, 195, 195,.8);  
}
.navbar{
    width: 100%;
    background-color: rgba(195, 195, 195,.8);  
    padding: 0px;
    text-transform: uppercase;
    margin-bottom: 100px;
    display: flex;
    
}

.navbar span{
    cursor: pointer;
}
.logo{
    width: 200px;
    height: 70px;
}
h2.test-nav{
    font-size: 22px;
    display: flex;
    padding: 24px;
    border: -7px;
    margin: -7px;  
}
h2.test-nav:hover{
    background-color: rgb(195, 195, 195);
}
.main{
    width: 100%;
    margin: auto;
}
  </style>
    <script src="view/app/js/generales.js"></script>
  <title>Data Table</title>
</head>

<body>
    
<div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="#index" style="margin-left:10%;">
                <img src="view/app/img/logo.png" alt="Logo" width="20%" height="70%" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 5%;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ancho" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                
                    <a class="nav-item nav-link active" pagina="index.php" href="index.php">
                        <h2 class="test-nav">Home</h2>
                    </a>
                    <a class="nav-item nav-link active" pagina="pro" href="indextabla.php">
                        <h2 class="test-nav">Users</h2>
                    </a>
                    <a class="nav-item nav-link active" href="index.php#nosotros" pagina="nosotros">
                        <h2 class="test-nav">Quienes somos</h2>
                    </a>
                    <a class="nav-item nav-link active" href="index.php#buscar" pagina="buscar">
                        <h2 class="test-nav">Buscar</h2>
                    </a>
                    <a class="nav-item nav-link active" href="index.php#restaurantes" pagina="buscar">
                        <h2 class="test-nav">Perfil</h2>
                    </a>
                   
                
                    
                    <a class="nav-item nav-link active" href="" pagina="login">
                        <h2 class="test-nav">SALIR</h2>
                    </a>
                
                </div>
            </div>
        </nav>
    </div>

    
    
    
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            Usuarios Registrados
          </div>
          <div class="card-body">
            <span class="btn btn-primary" data-toggle="modal" data-target="#agreganuevosdatos">
              Agregar nuevo <span class="fas fa-plus-circle"></span>
            </span>
            <hr>
            <div id="tablaDatatable">

            </div>
          </div>
          <div class="card-footer text-muted">
            By Andres
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="agreganuevosdatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" name="frmnuevo" id="frmnuevo">
            <label for="">
              Nombre
            </label>
            <input type="text" class="form-control input-sm" id="nombre" name="nombre">
            <label for="">
              Apellido
            </label>
            <input type="text" class="form-control input-sm" id="anio" name="anio">
            <label for="">
              Tipo
            </label>
            <input type="text" class="form-control input-sm" id="empresa" name="empresa">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btnAgregarnuevo">Agregar nuevo</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" name="frmnuevoU" id="frmnuevoU">
            <input type="text" name="idjuego" hidden="" id="idjuego">
            <label for="">
              Nombre
            </label>
            <input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
            <label for="">
              Apellido
            </label>
            <input type="text" class="form-control input-sm" id="anioU" name="anioU">
            <label for="">
              Rol
            </label>
            <input type="text" class="form-control input-sm" id="empresaU" name="empresaU">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
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
              $('#tablaDatatable').load('tabla.php');
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
              $('#tablaDatatable').load('tabla.php');
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
      $('#tablaDatatable').load('tabla.php');
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
                $('#tablaDatatable').load('tabla.php');
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