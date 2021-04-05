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
			<td>Codigo</td>
			<td><input type='text' name='codigo' ></td>
		</tr>
		<tr>
			<td>Usuario </td>
			<td><input type='text' name='usuario' ></td>
		</tr>
		<tr>
			<td>Contraseña </td>
			<td><input type='text' name='contraseña' ></td>
		</tr>
		<tr>
			<td>Nombre </td>
			<td><input type='text' name='nombre' ></td>
		</tr>
		<tr>
			<td>Apellido </td>
			<td><input type='text' name='apellido' ></td>
		</tr>
                <tr>
			<td>Horas Totales </td>
			<td><input type='text' name='horas_T' ></td>
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
                <tr>
                    <td>Digite Horario</td>
                </tr>
                <tr>
                    <td>Dia Semana Dia 1</td>
                    <td><input type='text' name='dia1' ></td>
                </tr>
                <tr>
                    <td>Intervalo Dia 1</td>
                    <td><input type='text' name='intervalo1' ></td>
                </tr>
                <tr>
                    <td>Dia Semana Dia 2</td>
                    <td><input type='text' name='dia2' ></td>
                </tr>
                <tr>
                    <td>Intervalo Dia 2</td>
                    <td><input type='text' name='intervalo2' ></td>
                </tr>
                <tr>
                    <td>Dia Semana Dia 3</td>
                    <td><input type='text' name='dia3' ></td>
                </tr>
                <tr>
                    <td>Intervalo Dia 3</td>
                    <td><input type='text' name='intervalo3' ></td>
                </tr>
                <tr>
                    <td>Dia Semana Dia 4</td>
                    <td><input type='text' name='dia4' ></td>
                </tr>
                <tr>
                    <td>Intervalo Dia 4</td>
                    <td><input type='text' name='intervalo4' ></td>
                </tr>
                <input type='hidden' name='insertarBecario' value='insertarBecario'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>            
        </nav>        
    </body>
</html>
