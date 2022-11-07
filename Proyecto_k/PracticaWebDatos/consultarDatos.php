<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="Documento.css">
    <link rel="stylesheet" href="tablas.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="body1">

    <?php
      include 'conexion.php';
      $sql = "select * from alumno";
      $datos = $conexion->query($sql);
     

    ?>

    <?php include 'menu.php'; ?>
    <br>
    <center><a href="registrarDatos.php" class="btn btn-success">Agregar alumno</a></center><br>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Domicilio</th>
                            <th>Fecha de nacimiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 

                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["edad"]; ?></td>
                             
                            <?php if($row["sexo"] == 1) {?>
                                
                                <td><?php echo"masculino"?></td>
                        <?php } else{ ?>
                            
                            <td><?php echo"Femenino"?></td>
                       <?php } ?> 
                     
    
                            <td><?php echo $row["domicilio"]; ?></td>
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td>
                          
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>

<?php
    echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Consutario de alumnos',
  showConfirmButton: false,
  timer: 1500
})
</script>";
?>

</body>
</html>