<?php
$v1=$_GET['id'];
$v2=$_GET['user'];
include ('conexion.php');
$db=Db::conectar();
$consulta3="UPDATE `Informe` SET `Estado` = 'Validada' WHERE Id=$v1 and id_B=$v2";
mysqli_query($db, $consulta3);
$consulta2="select sum(Horas_H) as Horas from Informe WHERE Estado='Validada' and id_B=$v2";
$resultado2= mysqli_query($db, $consulta2);
$cuantasVan;
while ($RQuery= mysqli_fetch_array($resultado2)){
    $cuantasVan=$RQuery['Horas'];
}
$consulta4="UPDATE `Becario` SET `Horas_R` = $cuantasVan WHERE `Becario`.`Codigo` = $v2";
mysqli_query($db, $consulta4);
header('Location: validarInformes.php');

