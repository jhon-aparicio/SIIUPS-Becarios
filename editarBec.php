

<?php
$v1=$_GET['id'];
require_once ('Dependencia.php');
require_once ('Becario.php');
require_once ('controlAdministrador.php');
$Dependencia= new Dependencia();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarD();
$Becario = new Becario();
$Becario=$controlAdministrador->traerBec($v1);
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
        <h1>Añadir Becarios</h1>
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
    
    <div class="container">
        <nav>
            <form action='ingreso.php' method='post'>
	<table class="table">
         <tr>
			<td>
            <label for="codde" class="form-label">Codigo Viejo </label></td>
            <td><input type='text' name='codigoViejo'class="form-control" value="<?php echo $Becario->getCodigo() ?>"></td>
		</tr>
		<tr>
			<td>
            <label for="coden" class="form-label">Codigo Nuevo</label></td>
             <td><input type='text' name='codigoNuevo' class="form-control" value="<?php echo $Becario->getCodigo() ?>"></td>
		</tr>
		<tr>
			<td>
            <label for="user" class="form-label">Usuario </label></td>
            <td><input type='text' name='usuario' class="form-control" value="<?php echo $Becario->getUsuario() ?>"  ></td>
		</tr>
		<tr>
			<td>
            <label for="name" class="form-label">Nombre </label> </td>
            <td><input type='text' name='nombre' class="form-control" value="<?php echo $Becario->getNombre() ?>" ></td>
		</tr>
		<tr>
			<td>
            <label for="fname" class="form-label">Apellido </label> </td>
             <td><input type='text' name='apellido' class="form-control" value="<?php echo $Becario->getApellido() ?>"  ></td>
		</tr>
        <tr>
			<td>
            <label for="horas" class="form-label">Horas Totales </label> </td>
            <td><input type='text' name='horas_T' class="form-control" value="<?php echo $Becario->getHoras_H() ?>"  ></td>
		</tr>
                <tr>
                    <td>
                    <label for="dep" class="form-label">Dependencia </label></td>
                    <td>
                    <select class="form-select" id='id_Dependencia' name='id_Dependencia'>
                         <option value="0"> Elija una opcion</option>
                    <?php foreach ($listar as $Dependencia)  {?>
                         <option value="<?php echo $Dependencia->getId() ?>"><?php echo $Dependencia->getNombre_Dependencia() ?></option>
                    <?php } ?>
                    </select>
                    </td>
                </tr>
                <input type='hidden' name='editarBecario' value='editarBecario'>
	</table>
	<input type='submit' class="btn btn-warning" value='Guardar'>
	<a href="index.php">Volver</a>
</form>            
        </nav> 
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script  src="js/jquery.js"></script>
        <script  src="js/bootstrap.js"></script>

    </body>
</html>