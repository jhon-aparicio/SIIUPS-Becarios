<?php
require_once ('Becario.php');
require_once ('controlAdministrador.php');
$Becario = new Becario();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarB();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <link rel="stylesheet" href="Recursos/estiloNav.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>
    <div class="nave">
    <h1>Eliminar Becarios</h1>

    <nav class="navbar justify-content-center"><ul>
        <li class="nav-item dropdown"><a href="#" class="navbar-brand">Becarios</a>

            <ul class="dropdown-menu"><li><a href="añadirBecario.php">Añadir Becario</a></li>
            <li><a href="editarBecario.php" class="dropdown-item">Editar Becario</a></li>
            <li><a href="eliminarBecario.php" class="dropdown-item">Eliminar Becario</a></li>
            <li><a href="mostrarUsuarios.php"class="dropdown-item">Listar Becarios</a></li></ul>
            </li>
        <li class="nav-item dropdown"><a href="#" class="navbar-brand">Dependencias</a>
            <ul class="dropdown-menu"><li><a href="añadirDependencia.php">Añadir Dependencia</a></li>
            <li><a href="editarDependencia.php" class="dropdown-item">Editar Dependencia</a></li>
            <li><a href="eliminarDependencia.php" class="dropdown-item">Eliminar Dependencia</a></li>
            <li><a href="mostrarDependencia.php" class="dropdown-item">Listar Dependencias</a></li></ul>
            </li>
        <li><a href="validarInformes.php" class="navbar-brand">Validar Informes</a></li>
            <li><a href="index.php" class="navbar-brand">Cerrar Sesion</a></li>
    </ul></nav>
    </div>
    <div class="container">
        <nav>
        <form action='ingreso.php' method='post'>
	    <table class="table">
            <tr>
                <td>
                <label for="fstnm" class="form-label">Becario</label></td>
                <td>
                <select class="form-select" id='codigo' name='codigo'>
                        <option value="0"> Elija una opcion</option>
                <?php foreach ($listar as $Becario)  {?>
                        <option value="<?php echo $Becario->getCodigo();?>"><?php  echo "{$Becario->getCodigo()} - {$Becario->getNombre()} {$Becario->getApellido()}"; ?></option>
                <?php } ?>
                </select>
                </td>
            </tr>
            <input type='hidden' name='eliminarBecario' value='eliminarBecario'>
	    </table>
	    <input type='submit' class="btn btn-warning"  value='Guardar'>
	    <a href="index.php">Volver</a>
        </form>            
        </nav>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <script  src="js/jquery.js"></script>
     <script  src="js/bootstrap.js"></script>

    </body>
</html>
