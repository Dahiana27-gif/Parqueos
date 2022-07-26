<?php 	include './logica/conexion.php'; 
session_start();
	$nombre =  ucfirst($_SESSION['nombre']);
	$tipo = $_SESSION['tipo'];
	$usuario=  $_SESSION['id'];
  if (!isset( $_SESSION['id'] ) ) {
    header("location: login.phpp");
  } ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="js/icons.js"></script>


    			<!----ChatBot--->
            <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/2463149331204998b13994df0925cb7f11cbdb845ab84df09c7d65508971da2d.js"></script>




 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</head>

</head>



    <title>Panel User</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">
  <i class="bi bi-house"></i>
    </button>
    <a class="navbar-brand" href="./paneluser.php">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="./logout.php">
          <i class="fas fa-sign-out-alt"></i>

    		Salir<span class="sr-only">(current) </span></a>

        </li>
      <li class="nav-item">
          <a class="nav-link" id="link" href="#">
          <i class="bi bi-cart-check-fill"> <?php echo $nombre ?></i></a>

        </li>
        
      </ul>
    </div>
  </nav>
<!------Manu lateral-----> 
  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3> Usuario </h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="./principaluser.php"><i class="fas fa-home"></i>Inicio</a>
        </li>

           <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-pencil-square"></i>Configuracion</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="./perfiluser.php">Perfil</a>
      <a class="dropdown-item" href="./pagos.php">Pagos</a>  
    </div>
        <li>
          <a href=""> <i class="fas fa-user-cog"> </i> Soporte Tecnico</a> 
        </li>
      
      </ul>
    </nav>
   