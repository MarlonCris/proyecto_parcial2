<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Documento.css">

</head>
<body class="body1">
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <button type="button" class="btn btn-warning"><h1>Registrar Usuario</h1><hr></button>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Nombre</span></h1>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Edad</span></h1>
                        <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>
     
                    <h1><span class="badge badge-secondary">Sexo</span></h1>
                    <div class="form-group">
                        <input type="radio" name="sexo" value="1"><span class="badge badge-secondary">masculino</span><br>
                        <input type="radio" name="sexo" value="0"><span class="badge badge-secondary">femenino</span>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Domicilio</span></h1>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                    <h1><span class="badge badge-secondary">Fecha de nacimineto</span></h1>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>

    <script src="js/jquery-3.6.1.js"></script>
     
    <script src="js/bootstrap.js"></script>
</body>
</html>
