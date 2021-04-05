<?php
$v1=$_GET['id'];
require_once ('controlUsuario.php');
require_once ('Horario.php');
$controlUser=new controlUsuario();
$horario=new Horario();
$controlUser->inicio($v1);
$listar= $controlUser->traerHorario($v1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloBec.css">
        <title>Informacion</title>
        
    </head>
    <body>
        <h1>Horarios</h1>
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
                <td>Día de la Semana</td>
                <td>Horario</td>
            </head>
		<body>
                    <?php foreach ($listar as $horario) {?>
			<tr>
                            <td><?php echo $horario->getDia_Semana()?></td>
                            <td><?php echo $horario->getHora()?></td>
			</tr>
			<?php }?>                    
		</body>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
