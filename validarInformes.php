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
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    
        <title>Lista Informes</title>
    </head>
    <body>
        <div class="nave">
        <h1>Lista Informes</h1>
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
	<table border=1 class="table">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <script  src="js/jquery.js"></script>
     <script  src="js/bootstrap.js"></script>

</body>

</html>
