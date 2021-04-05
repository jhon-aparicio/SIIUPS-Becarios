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
    </head>
    <body>
        <h1>Eliminar Becarios</h1>
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
                <td>Becario</td>
                <td>
                <select id='codigo' name='codigo'>
                     <option value="0"> Elija una opcion</option>
                <?php foreach ($listar as $Becario)  {?>
                     <option value="<?php echo $Becario->getCodigo();?>"><?php  echo "{$Becario->getCodigo()} - {$Becario->getNombre()} {$Becario->getApellido()}"; ?></option>
                <?php } ?>
                </select>
                </td>
            </tr>
            <input type='hidden' name='eliminarBecario' value='eliminarBecario'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>            
        </nav>        
    </body>
</html>
