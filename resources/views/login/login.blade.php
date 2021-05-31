<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Librerias CSS Bootstrap -- Personalizada-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--Iconos Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Libreria Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;700&display=swap" rel="stylesheet"> 
    <title>TransportuWeb</title>
</head>
<body>
    <!--Barra de Navegación o Menú del Sitio-->
    <header class="header">
        <nav class="navbar navbar-expand-md fixed-top">
          <div class="container"> 
              <div class="logo">
              <img src="images/logo_transportu.PNG" alt="Girl in a jacket" width="150" height="70">

              </div>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="false" aria-label="Tag Menu">
                  <span class="navbar-toggler-icon"></span>
              </button><!--./button-->

              <div class="collapse navbar-collapse" id="navegacion">
                <ul class="nav navbar-nav navbar-center ml-auto">
                  <li data-scroll="" class="nav-item active" style="margin-top: 15px"><a class="nav-link" href="#"><i class="fas fa-search"></i> Buscar</a></li>
                    <li data-scroll="" class="nav-item" style="margin-top: 15px"><a class="nav-link" href="#"><i class="fas fa-plus-circle"></i> Publicar viaje</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="perfil" src="imgs/perfil.svg" alt=""> 
                        
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="opc_login.html">Iniciar sesión</a>
                        <a class="dropdown-item" href="#">Registrarse</a>
                    </li>
                </ul>
              </div><!--./collapse-->
          </div><!--./container-fluid-->
      </nav><!--./navbar-->
     </header>

     <section id="frmlogin">
      <div class="container" style="margin-top:30px;">
          <h1 class="titulos text-center font-weight-bold">¿Como quieres iniciar sesión?</h1>
          <div class="row mb-0 justify-content-center" style="margin-top:40px;">
              <div class="col-md-6 col-sm-12">
                  <div class="list-group">
                      <a href="#" class="texto list-group-item d-flex list-group-item-action list-group-item-light justify-content-between align-items-center " >Continuar con Facebook <span class="badge badge-pill"><i class="fab fa-facebook fa-2x"></i><i class="fas fa-chevron-right fa-2x"></i></span></a>
                      <hr>
                      <a href="{{route('logine.index')}}" class="texto list-group-item d-flex list-group-item-action list-group-item-light justify-content-between align-items-center">Continuar con el Email <span class="badge badge-pill"><i class="fas fa-chevron-right fa-2x"></i></span></a>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center" style="margin-top:30px;">
              <div class="col-md-6 col-sm-12 mt-3">
                  <p class="texto">¿No tienes una cuenta? <a href="#">Regístrate</a></p>
              </div>
          </div>
      </div>
  </section>

    <!--Librerias JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  <!--Librerias JQuery -->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>  <!--Bootstrap --> 
    <!-- <script src="js/main.js"></script>  Librerias JS Personalizada -->
</body>

</html>