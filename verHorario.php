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
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Informacion Horario</title>
        
    </head>
    <body>
    <div class="nave">
        <h1>Horarios</h1>
        </div>
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

        <div class="container">
        <table border="1"  class="table">
            <head> 
                <th>Día de la Semana</th>
                <th>Horario</th>
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script  src="js/jquery.js"></script>
        <script  src="js/bootstrap.js"></script>

    </body>
</html>
