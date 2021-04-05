<?php
require_once ('Informe.php');
require_once ('controlAdministrador.php');
$informe = new Informe();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarI();
$listaN=$controlAdministrador->nombresI();
$listaNN=$controlAdministrador->traerNomDep();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloNav.css">
    
        <title>Lista Informes</title>
</head>
    <body>
        <h1>Lista Informes</h1>
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
                        <td>ID</td>
			<td>Fecha</td>
			<td>Detalle</td>
			<td>Horas Hechas</td>
                        <td>Becario</td>
                        <td>Dependencia</td>
                        <td>Modificar</td>
			
		</head>
                
		<body>
                    <?php 
                    $tam= sizeof($listar);
                    for($i=0; $i<$tam;$i++){ ?>
                    <?php// foreach ($listar as $Becario) {?>
			<tr>
                            <td><?php echo $listar[$i]->getId()?></td>
                            <td><?php echo $listar[$i]->getFecha()?></td>
                            <td><?php echo $listar[$i]->getDetalle()?></td>
                            <td><?php echo $listar[$i]->getHoras_H()?></td>
                            <td><?php echo $listaN[$i]?></td>
                            <td><?php echo $listaNN[$i]?></td>
                            <td>
                                <a href="validarDep.php?id=<?php echo $listar[$i]->getId(); ?>&user=<?php echo $listar[$i]->getId_B(); ?>">Validar</a>
                            </td>
			</tr>
			<?php }?>                    
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>

</html>
