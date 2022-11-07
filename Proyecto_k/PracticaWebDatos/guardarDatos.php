<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
 </head>
 
 <body class="body4">


 <?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$domicilio = $_POST["domicilio"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "INSERT INTO alumno (nombre, edad, sexo, domicilio, fecha_nacimiento)". 
"VALUES ('".$nombre."', ".$edad.", ".$sexo.", '".$domicilio."', '".$fecha_nacimiento."')";

?>
 
<?php
if($conexion->query($sql) === TRUE){
    echo""?>  
 
    <br><br>
    <div class="container">
      <div class="row">
            <div class="col-12">
              <div class="jumbotron">
                <h1>Registro agregado con exito</h1>               
                 <h2>A donde quieres ir:</h2><br><br>                
                        <a class="btn btn-primary" href="index.php">Inicio</a> 
                        <a class="btn btn-primary" href="registrarDatos.php">Agregar nuevo alumno</a>
                        <a class="btn btn-primary" href="consultarDatos.php">Consultar alumnos</a>
                        <a class="btn btn-primary" href="Alumnos.php">Alumnos destacados</a><br><br>
                        <img class="d-block w-1" src="imagenes/pal.gif" alt="First slide"> 
                        <hr class="my-4">
                
              </div>
        </div>
    </div>
</div>
  
     <?php
} else { 
 
 
echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
}
 
 
$conexion->close();

 
echo "<script>

Swal.fire({
  title: '🥳Registro agragado exitosamente🥳',
  width: 600,
  padding: '3em',
  color: '#716add',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url('imagenes/gato.webp')
    left top
    no-repeat
  `
})

</script>";
?>
 </body>
 </html>

 