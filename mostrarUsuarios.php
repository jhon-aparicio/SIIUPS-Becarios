<?php
require_once ('Becario.php');
require_once ('controlAdministrador.php');
$Becario= new Becario();
$controlAdministrador= new controlAdministrador();
$listar=$controlAdministrador->mostrarB();

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
                        <td>Horas Realizadas</td>
                        <td>Horas Totales</td>
			
		</head>
		<body>
                    <?php foreach ($listar as $Becario) {?>
			<tr>
                            <td><?php echo $Becario->getCodigo()?></td>
                            <td><?php echo $Becario->getUsuario()?></td>
                            <td><?php echo $Becario->getNombre()?></td>
                            <td><?php echo $Becario->getApellido()?></td> 
                            <td><?php echo $Becario->getHora_R()?></td>
                            <td><?php echo $Becario->getHoras_H()?></td>
			</tr>
			<?php }?>                    
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>

</html>
