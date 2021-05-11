<!DOCTYPE html>

<html class="h-100">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title> Inicio Sesion SIIUPS Becarios</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">

</head>
<body class="h-100">

    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action='ingreso.php' method='post'>
                    <div class="form-group text-center">
                        <img src="Recursos/bienestar.png" width="400" height="140" />
                        <br />
                        <br />
                        <h3>Gestion de Becarios UPTC Sogamoso</h3>
                        <div class="form-group mx-sm-5">
                            <input type='text' class="form-control" name='Usuario' placeholder="Ingrese su Usuario">
                        </div>
                        <div class="form-group mx-sm-5">
                            <input type='password' class="form-control" name='Contraseña' placeholder="Contraseña" />
                            <input type='hidden' name='insertar' value='insertar'>
                        </div>
                        <div class="form-group mx-sm-4">
                            <input type='submit' class="btn btn-warning ingresa" value='Ingresar'>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>