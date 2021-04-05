<?php
$v1=$_GET['id'];
require_once ('Becario.php');
require_once ('controlUsuario.php');
require_once ('Dependencia.php');
$controlUser=new controlUsuario();
$controlUser->inicio($v1);
$Becario= new Becario();
$Becario= $controlUser->traerInfo($v1);
$nomDep= $controlUser->traerDep($v1);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloBec.css">
        <title>Informacion</title>
        
    </head>
    <body>
        <h1>Información Becario</h1>
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
                <td>Usuario</td>
                <td>Nombre</td>
                <td>Horas Totales</td>
                <td>Horas Realizadas</td>
                <td>Dependencia Asignada</td>
            </head>
            <body>
                <tr>
                    <td><?php echo $Becario->getCodigo() ?></td>
                    <td><?php echo $Becario->getUsuario() ?></td> 
                    <td><?php echo $Becario->getNombre() ?></td> 
                    <td><?php echo $Becario->getHoras_H() ?></td> 
                    <td><?php echo $Becario->getHora_R() ?></td> 
                    <td><?php echo $nomDep ?></td> 
                </tr>
            </body>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
