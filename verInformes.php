<?php
$v1=$_GET['id'];
require_once ('controlUsuario.php');
require_once ('Informe.php');
$controlUser=new controlUsuario();
$informe=new Informe();
$controlUser->inicio($v1);
$listar= $controlUser->traerInformes($v1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloBec.css">
        <title>Informacion</title>
        
    </head>
    <body>
        <h1>Informes</h1>
        <input type="checkbox" class="menu" id="menu">
        <label class="menus" for="menu">|||</label>
        <div class="Opciones">
            <ul>
                <a href="verInformacion.php?id=<?php echo $v1 ?>"><li>Información estudiante</li></a>
                <a href="realizarInforme.php?id=<?php echo $v1 ?>"><li>Realizar informe</li></a>
                <a href="verDependencia.php?id=<?php echo $v1 ?>"><li>Información Dependencia</li></a>
                <a href="verHorario.php?id=<?php echo $v1 ?>"><li>Horario</li></a>
                <a href="verInformes.php?id=<?php echo $v1 ?>"><li>Informes realizados</li></a>
                <a href="index.php"><li>Cerrar Sesión</li></a>
            </ul>
        </div>
        <table border="1">
            <head> 
                <td>Id</td>
                <td>Fecha</td>
                <td>Detalle</td>
                <td>Horas Realizadas</td><!--  -->
                <td>Estado</td>
            </head>
		<body>
                    <?php foreach ($listar as $informe) {?>
			<tr>
                            <td><?php echo $informe->getId()?></td>
                            <td><?php echo $informe->getFecha()?></td>
                            <td><?php echo $informe->getDetalle()?></td>
                            <td><?php echo $informe->getHoras_H()?></td>
                            <td><?php echo $informe->getEstado()?></td>
			</tr>
			<?php }?>                    
		</body>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
