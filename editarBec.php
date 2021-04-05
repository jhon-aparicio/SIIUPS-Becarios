

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
    </head>
    <body>
        <h1>Añadir Becarios</h1>
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
			<td>Codigo Viejo</td>
                        
                        <td><input type='text' name='codigoViejo' value="<?php echo $Becario->getCodigo() ?>"></td>
		</tr>
		<tr>
			<td>Codigo Nuevo</td>
                        
                        <td><input type='text' name='codigoNuevo' value="<?php echo $Becario->getCodigo() ?>"></td>
		</tr>
		<tr>
			<td>Usuario </td>
                        <td><input type='text' name='usuario' value="<?php echo $Becario->getUsuario() ?>"  ></td>
		</tr>
		<tr>
			<td>Nombre </td>
                        <td><input type='text' name='nombre' value="<?php echo $Becario->getNombre() ?>" ></td>
		</tr>
		<tr>
			<td>Apellido </td>
                        <td><input type='text' name='apellido' value="<?php echo $Becario->getApellido() ?>"  ></td>
		</tr>
                <tr>
			<td>Horas Totales </td>
                        <td><input type='text' name='horas_T'value="<?php echo $Becario->getHoras_H() ?>"  ></td>
		</tr>
                <tr>
                    <td>Dependencia</td>
                    <td>
                    <select id='id_Dependencia' name='id_Dependencia'>
                         <option value="0"> Elija una opcion</option>
                    <?php foreach ($listar as $Dependencia)  {?>
                         <option value="<?php echo $Dependencia->getId() ?>"><?php echo $Dependencia->getNombre_Dependencia() ?></option>
                    <?php } ?>
                    </select>
                    </td>
                </tr>
                <input type='hidden' name='editarBecario' value='editarBecario'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>            
        </nav>        
    </body>
</html>