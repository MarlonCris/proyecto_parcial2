 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body background= #33A5FF;>


 <?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$domicilio = $_POST["domicilio"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "INSERT INTO alumno (nombre, edad, sexo, domicilio, fecha_nacimiento)". 
"VALUES ('".$nombre."', ".$edad.", ".$sexo.", '".$domicilio."', '".$fecha_nacimiento."')";

if($conexion->query($sql) === TRUE){
    echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
} else {
    echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
}

$conexion->close();

?>

 
    
 </body>
 </html>