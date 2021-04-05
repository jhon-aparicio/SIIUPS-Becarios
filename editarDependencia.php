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
        <link rel="stylesheet" href="Recursos/estiloNav.css">
    
        <title>Lista Dependencias</title>
</head>
    <body>
        <h1>Lista Dependencias</h1>
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
	<table border=1>
		<head>
                        <td>Codigo</td>
			<td>Nombre</td>
			<td>Nombre Encargado</td>
                        <td>Modificar</td>
		</head>
		<body>
                    <?php
                    $tam= sizeof($listar);
                    for($i=0; $i<$tam;$i++){ ?>
                    <?php// foreach ($listar as $Becario) {?>
			<tr>
                            <td><?php echo $listar[$i]->getId()?></td>
                            <td><?php echo $listar[$i]->getNombre_Dependencia()?></td>
                            <td><?php echo $listar[$i]->getNombre_Encargado()?></td>
                            <td>
                                <a href="editarDep.php?id=<?php echo $listar[$i]->getId(); ?>">Editar</a>
                            </td>
			</tr>
			<?php }?>                   
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>

</html>