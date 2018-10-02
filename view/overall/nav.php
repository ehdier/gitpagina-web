
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
                <?php 
                if(!isset($_SESSION['rol'])){
                    ?>
                    <a class="nav-item nav-link active" pagina="pro" href="#index">
                        <h2 class="test-nav">Home</h2>
                    </a>
                    
                    <a class="nav-item nav-link active" href="#nosotros" pagina="nosotros">
                        <h2 class="test-nav">Quienes somos</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#buscar" pagina="buscar">
                        <h2 class="test-nav">Buscar</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#login" pagina="login">
                        <h2 class="test-nav">Login</h2>
                    </a>
                <?php 
                
                }elseif(isset($_SESSION['rol']) == 'restaurante'){
                   $html =  'restaurante';?>
                <a class="nav-item nav-link active" pagina="pro" href="#index">
                        <h2 class="test-nav">Home</h2>
                    </a>
                    <a class="nav-item nav-link active" pagina="pro" href="indextabla.php">
                        <h2 class="test-nav">Users</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#nosotros" pagina="nosotros">
                        <h2 class="test-nav">Quienes somos</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#buscar" pagina="buscar">
                        <h2 class="test-nav">Buscar</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#restaurantes" pagina="buscar">
                        <h2 class="test-nav">Perfil</h2>
                    </a>
                    <a class="nav-item nav-link active" href="logoutController.php" pagina="login">
                        <h2 class="test-nav">Salir</h2>
                    </a>
                <?php  }elseif(isset($_SESSION['rol']) == 'artista'){
                    $html = 'artista'?>
                    <a class="nav-item nav-link active" pagina="pro" href="#index">
                        <h2 class="test-nav">Home</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#nosotros" pagina="nosotros">
                        <h2 class="test-nav">Quienes somos</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#buscar" pagina="buscar">
                        <h2 class="test-nav">Buscar</h2>
                    </a>
                    <a class="nav-item nav-link active" href="#restaurantes" pagina="buscar">
                        <h2 class="test-nav">Perfil</h2>
                    </a>
                    <a class="nav-item nav-link active" href="logoutController.php" pagina="login">
                        <h2 class="test-nav">Salir</h2>
                    </a>
                <?php }?>          
                </div>
            </div>
        </nav>
    </div>

    
    
    