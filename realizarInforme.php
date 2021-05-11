<?php
$v1=$_GET['id'];
require_once ('Becario.php');
require_once ('controlUsuario.php');
require_once ('Dependencia.php');
$controlUser=new controlUsuario();
$controlUser->inicio($v1);

?>
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Recursos/estiloBec.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Informe</title>

         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
            $( function() {
              $( "#campofecha" ).datepicker({
                dateFormat: 'yy-mm-dd',
                numberOfMonths: 1,
                showButtonPanel: true
              });
            } );
            </script>
        
    </head>
    <body>

        
        

        <div class="container">
        <h1>Realizar Informe</h1>
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
         <nav>
             
    <form action='ingreso.php?id=<?php echo $v1 ?>' method='post'>
	<table class="table">
            <tr>
                <td>
                <label for="name" class="form-label">Usuario </label> </td>
                <td><input type="text" name="usuario" class="form-control" value="<?php echo $v1 ?>"></td>
            </tr>
                <tr>
                    <td>
                    <label for="name" class="form-label">Fecha</label></td>
                    <td><input autocomplete="off"class="form-control" type="text" name="fecha" id="campofecha"></td>
                </tr>
		<tr>
			<td>
            <label for="name" class="form-label">Detalle</label></td>
            <td><input autocomplete="off" class="form-control" type='text' name='detalle' ></td>
		</tr>
		<tr>
			<td>
            <label for="name" class="form-label">Horas Realizadas </label> </td>
            <td><input type='text' class="form-control" name='horas_H' ></td>
		</tr>

		<input type='hidden' name='realizarInforme' value='realizarInforme'>
	</table>
	<input type='submit' class="btn btn-warning" value='Guardar'>
        <a href="indexUser.php">Volver</a>
    </form>            
        </nav>  
        </div>

        <script  src="js/bootstrap.js"></script>
    </body>
</html>
