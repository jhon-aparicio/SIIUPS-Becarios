<?php
$v1=$_GET['id'];
require_once ('controlUsuario.php');
require_once ('Dependencia.php');
$controlUser=new controlUsuario();
$controlUser->inicio($v1);
$dependencia= new Dependencia();
$dependencia= $controlUser->traerDependencia($v1);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloBec.css">
        <title>Informacion</title>
        
    </head>
    <body>
        <h1>Información Dependencia</h1>
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
                <td>Codigo</td>
                <td>Nombre Dependencia</td>
                <td>Nombre Encargado</td>
            </head>
            <body>
                <tr>
                    <td><?php echo $dependencia->getId() ?></td>
                    <td><?php echo $dependencia->getNombre_Dependencia() ?></td> 
                    <td><?php echo $dependencia->getNombre_Encargado() ?></td>
                </tr>
            </body>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
