<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>

   <style>

   </style>
</head>
<body  background="imagenes/fond.jpg">
    <?php include 'menu.php'; ?>
    <br>
 
      <center>
      <img src="imagenes/a1.png" title="sep" width="800px" height="150px">
 
      </center>
      <center>
      <img src="imagenes/panel.png" title="sep" width="1110px" height="70px">
       </center>
    
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                  <h1 style="color: #FF5733;">Menu principal</h1>
                    <h1 class="display-4">Cetis 107</h1>
                    <p class="lead">
                        
                     

                         <ul>
                            <li>Registrar</li>
                            <li>Consultar</li>
                            <li>Editar</li>
                            <li>Eliminar</li>
                            <h2>Modulos</h2>
                            <a class="dropdown-item" href="index.php">Inicio</a>
      
                            <a class="dropdown-item" href="consultarDatos.php">Consultar alumnos</a>
                         </ul>


                         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/banco.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/cafeteria.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/cancha.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/computo.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    </p>
                    <hr class="my-4">
                    <p>Pagina oficial CETIS107</p>
                  </div>
            </div>
        </div>
    </div>
    
 

    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>