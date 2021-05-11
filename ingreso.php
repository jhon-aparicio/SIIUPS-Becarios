<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
        <title>Plataforma SIIUPS</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    </head>
    <body>
<?php
require_once ('controlUsuario.php');
require_once ('Conexion.php');

if(isset($_POST['insertar'])){
    
    $usuario=$_POST['Usuario'];
    $contraseña=$_POST['Contraseña'];
    $db= Db::conectar();
    $consulta1= "SELECT * FROM Becario WHERE Usuario ='$usuario' and Pass='$contraseña';";
    $consulta2= "SELECT * FROM Administrador WHERE Usuario ='$usuario' and Pass='$contraseña';";
    $resultado1= mysqli_query($db, $consulta1);
    $resultado2=mysqli_query($db, $consulta2);
    $admi= mysqli_num_rows($resultado2);
    $user=mysqli_num_rows($resultado1);
    if($admi==1){
        header('Location: indexAdmi.php');
    }else if($user==1){
        header("Location: indexUser.php?id='$usuario'");
    }
}
if(isset($_POST['insertarDependencia'])){
    //Traemos el nombre que queremos darle a nuestra dependencia
    $nombre_D=$_POST['nombre_D'];
    //Traemos el nombre del encargado para nuestra dependencia
    $nombre_E=$_POST['nombre_E'];
    //Realizamos la conexion
    $db= Db::conectar();
    //Creamos un contador equivalente a 1
    $contador=1;
    //Realizamos una consulta que nos traiga todas las dependencias
    $select=mysqli_query($db,'SELECT * FROM Dependencia');
    //Hacemos un while que nos permite saber cuantas dependencias hay para que asi se asigne un 
    //id consecutivo a nuestra dependencia
    while($RQuery= mysqli_fetch_array($select)){$contador=$contador+1;}
    //Creamos la consulta con los datos que haran parte de la misma
    $addDep="INSERT INTO `Dependencia` (`Id`, `Nombre_Dependencia`, `Nombre_Encargado`) VALUES ('$contador'
    , '$nombre_D', '$nombre_E');";
    //Realizamos la consulta dentro de la base de datos
    mysqli_query($db,$addDep);
    //Se nos envia a otra clase, mostrar dependencia la cual nos dejara ver como ya nuestra dependencia
    //esta dentro de la base de datos 
    header('Location: mostrarDependencia.php');
    
}
if(isset($_POST['eliminarDependencia'])){
    $db= Db::conectar();
    $codigo=$_POST['codigo'];
    $consulta="DELETE FROM Dependencia where Id='$codigo';";
    mysqli_query($db, $consulta); 
    header('Location: eliminarDependencia.php');
}
if(isset($_POST['editarDependencia'])){
    $db=Db::conectar();
    $codigo=$_POST['id'];
    $nombre_D=$_POST['nombre_D'];
    $nombre_E=$_POST['nombre_E'];
    $consulta="UPDATE `Dependencia` SET `Nombre_Dependencia` = '$nombre_D', `Nombre_Encargado` = '$nombre_E' WHERE `Dependencia`.`Id` = '$codigo';";
    mysqli_query($db, $consulta);
    header('Location: mostrarDependencia.php');
}
if(isset($_POST['insertarBecario'])){
    $db= Db::conectar();
    $contador=0;
    $select=mysqli_query($db,'SELECT * FROM Horario;');
    while($RQuery= mysqli_fetch_array($select)){$contador=$contador+1;}
    $codigo=$_POST['codigo'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $horas_T=$_POST['horas_T'];
    $id_Dependencia=$_POST['id_Dependencia'];
    $dia1=$_POST['dia1'];
    $intervalo1=$_POST['intervalo1'];
    $dia2=$_POST['dia2'];
    $intervalo2=$_POST['intervalo2'];
    $dia3=$_POST['dia3'];
    $intervalo3=$_POST['intervalo3'];
    $dia4=$_POST['dia4'];
    $intervalo4=$_POST['intervalo4'];
    $insersion="INSERT INTO `Becario` (`Codigo`, `Usuario`, `Pass`, `Nombre`, `Apellido`, `Horas_R`, `Horas_F`, `id_dependencia`) VALUES ('$codigo', '$usuario', '$contraseña', '$nombre', '$apellido', 0, '$horas_T', $id_Dependencia);";
    mysqli_query($db, $insersion);
    $contador=$contador+1;
    $inDia1="INSERT INTO `Horario` (`Id`, `Dia_Semana`, `Hora`, `Id_Becario`) VALUES ('$contador', '$dia1', '$intervalo1', $codigo);";
    $contador=$contador+1;
    $inDia2="INSERT INTO `Horario` (`Id`, `Dia_Semana`, `Hora`, `Id_Becario`) VALUES ('$contador', '$dia2', '$intervalo2', $codigo);";
    $contador=$contador+1;
    $inDia3="INSERT INTO `Horario` (`Id`, `Dia_Semana`, `Hora`, `Id_Becario`) VALUES ('$contador', '$dia3', '$intervalo3', $codigo);";
    $contador=$contador+1;
    $inDia4="INSERT INTO `Horario` (`Id`, `Dia_Semana`, `Hora`, `Id_Becario`) VALUES ('$contador', '$dia4', '$intervalo4', $codigo);";
    mysqli_query($db, $inDia1);
    mysqli_query($db, $inDia2);
    mysqli_query($db, $inDia3);
    mysqli_query($db, $inDia4);
    header('Location: mostrarUsuarios.php');
}
if(isset($_POST['eliminarBecario'])){
    $db= Db::conectar();
    $codigo=$_POST['codigo'];
    $consulta="DELETE FROM Becario where Codigo='$codigo';";
    mysqli_query($db, $consulta); 
    header('Location: eliminarBecario.php');
}
if(isset($_POST['editarBecario'])){
    $db=Db::conectar();
    $codigoV=$_POST['codigoViejo'];
    $codigoN=$_POST['codigoNuevo'];
    $usuario=$_POST['usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $horas_T=$_POST['horas_T'];
    $id_Dependencia=$_POST['id_Dependencia'];
    
    $consulta="UPDATE `Becario` SET `Codigo` = '$codigoN', `Usuario` = '$usuario', `Nombre` = '$nombre', `Apellido` = '$apellido', `Horas_F` = '$horas_T', `id_dependencia` = '$id_Dependencia' WHERE `Becario`.`Codigo` = '$codigoV';";
    header('Location: mostrarUsuarios.php');
}
if(isset($_POST['realizarInforme'])){
    $db=Db::conectar();
    $usuario=$_POST['usuario'];
    $consulta="SELECT COUNT(*) as Total FROM Informe i where i.id_B=(SELECT b.Codigo from Becario b WHERE Usuario=$usuario);";
    $respuesta= mysqli_query($db, $consulta);
    $ids;
    while($RQuery= mysqli_fetch_array($respuesta)){
        $ids=$RQuery['Total'];
    }
    
    $ids=$ids+1;
    $codigo;
    $consulta2="Select Codigo from Becario where Usuario=$usuario;";
    $respuesta2= mysqli_query($db, $consulta2);
    while($RQuery= mysqli_fetch_array($respuesta2)){
        $codigo=$RQuery['Codigo'];
    }   
    $fecha=$_POST['fecha'];
    $detalle=$_POST['detalle'];
    $horas=$_POST['horas_H'];
    $i=1;
    $con="INSERT INTO `Informe` (`Id`, `Fecha`, `Detalle`, `Horas_H`, `Estado`, `id_B`) VALUES ($ids, '$fecha', '$detalle', $horas, 'Pendiente', $codigo);";
    ?><h1> Hola<?php echo $con?></h1> <?php
    $insersion= mysqli_query($db, $con);
    header("Location: verInformes.php?id=$usuario");
    
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script  src="js/jquery.js"></script>
    <script  src="js/bootstrap.js"></script>
    </body>
</html>   

    

                

