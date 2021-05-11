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
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Lista Becarios</title>
</head>
    <body>
    <div class="nave">
    <h1>Lista Becarios</h1>
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
	<table class="table" border=1>
		<head>
            <th>Codigo</th>
			<th>Usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
            <th>Horas Realizadas</th>
            <th>Horas Totales</th>
			
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script  src="js/jquery.js"></script>
    <script  src="js/bootstrap.js"></script>

</body>

</html>
