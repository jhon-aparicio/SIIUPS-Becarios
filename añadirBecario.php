<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once ('Dependencia.php');
require_once ('controlAdministrador.php');
$Dependencia= new Dependencia();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarD();
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
    </div>

    <div class="container">
        <nav>
            <form action='ingreso.php' cmethod='post'>

	        <table class="table">
		        <tr>
			        <td>
                    <label for="codde" class="form-label"> Codigo </label></td>
			        <td><input type='text' class="form-control" name='codigo' ></td>
		        </tr>
		        <tr>
			        <td>
                    <label for="user" class="form-label">Usuario</label> </td>
			        <td><input type='text' class="form-control" name='usuario' ></td>
		        </tr>
		        <tr>
			        <td>
                    <label for="paswd" class="form-label">Contraseña </label></td>
			        <td><input type='text'class="form-control" name='contraseña' ></td>
		        </tr>
		        <tr>
			        <td>
                    <label for="name" class="form-label">Nombre</label> </td>
			        <td><input type='text'class="form-control" name='nombre' ></td>
		        </tr>
		        <tr>
			        <td>
                    <label for="fstnm" class="form-label">Apellido  </label></td>
			        <td><input type='text' class="form-control" name='apellido' ></td>
		        </tr>
                        <tr>
			        <td>
                    <label for="hour" class="form-label">Horas Totales </label> </td>
			        <td><input type='text' class="form-control" name='horas_T' ></td>
		        </tr>
                <tr>
                    <td>
                    <label for="dep" class="form-label"> Dependencia </label> </td>
                    <td>
                    <select class="form-select" id='id_Dependencia' name='id_Dependencia'>
                            <option value="0"> Elija una opcion</option>
                    <?php foreach ($listar as $Dependencia)  {?>
                            <option value="<?php echo $Dependencia->getId() ?>"><?php echo $Dependencia->getNombre_Dependencia() ?></option>
                    <?php } ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><h4>Digite Horario</h4>
                </tr>
                <tr>
                    <td>
                    <label for="d1" class="form-label">Dia Semana Dia 1</label></td>
                    <td><input type='text' name='dia1' class="form-control" ></td>
                </tr>
                <tr>
                    <td>
                    <label for="i1" class="form-label">Intervalo Dia 1</label></td>
                    <td><input type='text' name='intervalo1' class="form-control" ></td>
                </tr>
                <tr>
                    <td>
                    <label for="d2" class="form-label">Dia Semana Dia 2</label></td>
                    <td><input type='text' name='dia2'class="form-control" ></td>
                </tr>
                <tr>
                    <td>
                    <label for="i2" class="form-label"> Intervalo Dia 2</label></td>
                    <td><input type='text' name='intervalo2' class="form-control"></td>
                </tr>
                <tr>
                    <td>
                    <label for="d3" class="form-label">Dia Semana Dia 3</label></td>
                    <td><input type='text' name='dia3' class="form-control"></td>
                </tr>
                <tr>
                    <td>
                    <label for="i3" class="form-label">Intervalo Dia 3</label></td>
                    <td><input type='text' name='intervalo3' class="form-control"></td>
                </tr>
                <tr>
                    <td>
                    <label for="d4" class="form-label">Dia Semana Dia 4</label></td>
                    <td><input type='text' name='dia4' class="form-control"></td>
                </tr>
                <tr>
                    <td>
                    <label for="i4" class="form-label">Intervalo Dia 4</label></td>
                    <td><input type='text' name='intervalo4'class="form-control" ></td>
                </tr>
                <input type='hidden' name='insertarBecario' value='insertarBecario'>
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
