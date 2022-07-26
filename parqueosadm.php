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



            

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</head>

</head>



    <title>Parqueos</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">

      <i class="bi bi-house" href="./panel.html"></i>
    </button>
    <a class="navbar-brand" href="./panel.html">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="./index1.html">
          <i class="fas fa-sign-out-alt"></i>


          Salir<span class="sr-only">(current) </span></a>

        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="#">
          <i class="fas fa-id-card"></i></a>

        </li>
      </ul>
    </div>
  </nav>

  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3> Administrador </h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="./panel.html"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <li>
          <a href="./Userpage.html"><i class="fas fa-clipboard"></i>Usuarios</a>
        </li>
        <li>
          <a href="./Parqueos.html"> <i class="fas fa-user-cog"> </i> Parqueos</a> 
        </li>
      
      </ul>
    </nav>

    <div id="content">

     <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">


                                                  <!-- Button trigger modal -->
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                Agregar Parqueos
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE PARQUEO</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <!---Formulario de Registro de usuario Nuevo--->

                                                                      <form class="needs-validation" novalidate>
                                                                      <div class="form-row">
                                                                        <div class="col-md-6 mb-3">
                                                                          <label for="validationTooltip01">Ubicacion de parqueo</label>
                                                                          <input type="text" class="form-control" id="validationTooltip01" value="" required>
                                                                          <div class="valid-tooltip">
                                                                            Looks good!
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-md-6 mb-3">
                                                                         
                                                                          <div class="valid-tooltip">
                                                                            Looks good!
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                      <div class="form-row">
                                                                        
                                                                        </div>
                                                                      
                                                                        
                                                                      </div>
                                                                    
                                                                    </form>



                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

         <DIV class="">
           
     <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Registros de parqueo</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscuar " aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

         </DIV>
       
       
  

    
  </div>
  </div>
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>