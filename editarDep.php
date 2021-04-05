<?php
$v1=$_GET['id'];
require_once ('Dependencia.php');
require_once ('controlAdministrador.php');
$dependencia= new Dependencia();
$controlAdministrador= new controlAdministrador();
$dependencia=$controlAdministrador->traerDep($v1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <link rel="stylesheet" href="Recursos/estiloNav.css">
    </head>
    <body>
        <h1>Añadir Dependencia</h1>
<nav><ul>
        <li><a href="#">Becarios</a>
            <ul><li><a href="añadirBecario.php">Añadir Becario</a></li>
            <li><a href="editarBecario.php">Editar Becario</a></li>
            <li><a href="eliminarBecario.php">Eliminar Becario</a></li>
            <li><a href="mostrarUsuarios.php">Listar Becarios</a></li></ul>
            </li>
        <li><a href="#">Dependencias</a>
            <ul><li><a href="añadirDependencia.php">Añadir Dependencia</a></li>
            <li><a href="editarDependencia.php">Editar Dependencia</a></li>
            <li><a href="eliminarDependencia.php">Eliminar Dependencia</a></li>
            <li><a href="mostrarDependencia.php">Listar Dependencias</a></li></ul>
            </li>
        <li><a href="validarInformes.php">Validar Informes</a></li>
            <li><a href="index.php">Cerrar Sesion</a></li>
    </ul></nav>
        <nav>
            <form action='ingreso.php' method='post'>
	<table>
		<tr>
			<td>Id (No editar)</td>
                        <td><input type='text' name='id' value="<?php echo $dependencia->getId() ?>"  ></td>
		</tr>
		<tr>
			<td>Nombre Dependencia</td>
                        <td><input type='text' name='nombre_D' value="<?php echo $dependencia->getNombre_Dependencia() ?>"  ></td>
		</tr>
		<tr>
			<td>Nombre Encargado </td>
                        <td><input type='text' name='nombre_E' value="<?php echo $dependencia->getNombre_Encargado() ?>" ></td>
		</tr>
		<input type='hidden' name='editarDependencia' value='editarDependencia'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>            
        </nav>
        <?php
        // put your code here
        ?>
    </body>
</html>
