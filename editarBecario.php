<?php
require_once ('Becario.php');
require_once ('controlAdministrador.php');
$Becario= new Becario();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarB();
$listarD=$controlAdministrador->traerDepeU();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloNav.css">
    
        <title>Lista Becarios</title>
</head>
    <body>
        <h1>Lista Becarios</h1>
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
            <li><a href="eliminarDependencia">Eliminar Dependencia</a></li>
            <li><a href="mostrarDependencia.php">Listar Dependencias</a></li></ul>
            </li>
        <li><a href="validarInformes.php">Validar Informes</a></li>
            <li><a href="index.php">Cerrar Sesion</a></li>
    </ul></nav>
	<table border=1>
		<head>
                        <td>Codigo</td>
			<td>Usuario</td>
			<td>Nombre</td>
			<td>Apellido</td>
                        <td>Dependencia</td>
                        <td>Modificar</td>
			
		</head>
                
		<body>
                    <?php
                    $tam= sizeof($listarD);
                    for($i=0; $i<$tam;$i++){ ?>
                    <?php// foreach ($listar as $Becario) {?>
			<tr>
                            <td><?php echo $listar[$i]->getCodigo()?></td>
                            <td><?php echo $listar[$i]->getUsuario()?></td>
                            <td><?php echo $listar[$i]->getNombre()?></td>
                            <td><?php echo $listar[$i]->getApellido()?></td> 
                            <td><?php echo $listarD[$i]?></td>
                            <td>
                            <a href="editarBec.php?id=<?php echo $listar[$i]->getCodigo(); ?>">Editar</a>
                            </td>
			</tr>
			<?php }?>                    
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>

</html>
