<?php
include ('Conexion.php');
class controlAdministrador {

    function __construct() {
        
    }
    public function inicio(){
        
    }
    public function mostrarB(){
        $db= Db::conectar();
        $listarUsuarios=[];
        $select= mysqli_query($db,'SELECT * FROM Becario');
        while ($RQuery= mysqli_fetch_array($select)){
            $becaario=new Becario();
            $becaario->setCodigo($RQuery['Codigo']);
            $becaario->setUsuario($RQuery['Usuario']);
            $becaario->setNombre($RQuery['Nombre']);
            $becaario->setApellido($RQuery['Apellido']);
            $becaario->setHora_R($RQuery['Horas_R']);
            $becaario->setHoras_H($RQuery['Horas_F']);
            $listarUsuarios[]=$becaario;
        }
        return $listarUsuarios;
    }
    public function mostrarD(){
        $db= Db::conectar();
        $listarDependencia=[];
        $select= mysqli_query($db,'SELECT * FROM Dependencia');
        while ($RQuery= mysqli_fetch_array($select)){
            $dependencia=new Dependencia();
            $dependencia->setId($RQuery['Id']);
            $dependencia->setNombre_Dependencia($RQuery['Nombre_Dependencia']);
            $dependencia->setNombre_Encargado($RQuery['Nombre_Encargado']);
            $listarDependencia[]=$dependencia;
        }
        return $listarDependencia;
    }
    public function numHorarios() {
        $db= Db::conectar();
        $contador=0;
        $select=mysqli_query($db,'SELECT * FROM Horario;');
        while($RQuery= mysqli_fetch_array($select)){$contador=$contador+1;}
        return $contador;
    }
    public function traerDepeU(){
        $db= Db::conectar();
        $dependencias=[];
        $consulta="SELECT D.Nombre_Dependencia as Nombre from Dependencia D INNER JOIN Becario B ON B.id_dependencia=D.Id;";
        $respuesta= mysqli_query($db, $consulta);
        while($RQuery= mysqli_fetch_array($respuesta)){
            $Nombre=$RQuery['Nombre'];
            $dependencias[]=$Nombre;
        }
        return $dependencias;
    }
    public function traerBec($id) {
        $db= Db::conectar();
        $consulta="select * from Becario where Codigo='$id';";
        $respuesta= mysqli_query($db, $consulta);
        
            $becaario=new Becario();
        while($RQuery= mysqli_fetch_array($respuesta)){
            $becaario->setCodigo($RQuery['Codigo']);
            $becaario->setUsuario($RQuery['Usuario']);
            $becaario->setNombre($RQuery['Nombre']);
            $becaario->setApellido($RQuery['Apellido']);
            $becaario->setHora_R($RQuery['Horas_R']);
            $becaario->setHoras_H($RQuery['Horas_F']);
        }
        return $becaario;
    }
    public function traerDep($id){
        $db= Db::conectar();
        $consulta="select * from Dependencia where Id='$id';";
        $respuesta= mysqli_query($db, $consulta);
        $dependencia=new Dependencia();
        while($RQuery= mysqli_fetch_array($respuesta)){
            $dependencia->setId($RQuery['Id']);
            $dependencia->setNombre_Dependencia($RQuery['Nombre_Dependencia']);
            $dependencia->setNombre_Encargado($RQuery['Nombre_Encargado']);
        }
        return $dependencia;
    }
    public function mostrarI(){
        $db= Db::conectar();
        $consulta="select * from Informe where Estado='Pendiente';";
        $respuesta= mysqli_query($db, $consulta);
        $informes=[];      
        while ($RQuery= mysqli_fetch_array($respuesta)){
            $informe=new Informe();
            $informe->setId($RQuery['Id']);
            $informe->setFecha($RQuery['Fecha']);
            $informe->setDetalle($RQuery['Detalle']);
            $informe->setHoras_H($RQuery['Horas_H']);
            $informe->setEstado($RQuery['Estado']);
            $informe->setId_B($RQuery['id_B']);
            $informes[]=$informe;
        }
        return $informes;
    }
    public function nombresI(){
        $db= Db::conectar();
        $consulta="SELECT B.Usuario as Usuario from Becario B INNER JOIN Informe I ON B.Codigo=I.id_B where I.Estado='Pendiente';";
        $respuesta= mysqli_query($db, $consulta);
        $nombres=[];
        while($RQuery= mysqli_fetch_array($respuesta)){
            $nombre=$RQuery['Usuario'];
            $nombres[]=$nombre;
        }
        return $nombres;
    }
    public function traerCodigos(){
        $db= Db::conectar();
        $consulta="SELECT Codigo from Becario B INNER JOIN Informe I ON B.Codigo=I.id_B where I.Estado='Pendiente';";
        $respuesta= mysqli_query($db, $consulta);
        $nombres=[];
        while($RQuery= mysqli_fetch_array($respuesta)){
            $nombres[]=$RQuery['Codigo'];
        }
        return $nombres;
    }

    public function traerDepe(){
        $lista= $this->traerCodigos();
        $db= Db::conectar();
        $nomDep=[];
        $tam= sizeof($lista);
        for($i=0; $i<$tam;$i++){
            $consulta="SELECT id_dependencia as Nombre from Becario b where b.Codigo=$lista[$i];";
            $respuesta= mysqli_query($db, $consulta);
            while($RQuery= mysqli_fetch_array($respuesta)){
              $nomDep[]=$RQuery['Nombre'];
            }
        }
        return $nomDep;
    }
    public function traerNomDep(){
        $listafinal= $this->traerDepe();
        $db= Db::conectar();
        $nomDep=[];
        $tam= sizeof($listafinal);
        for($i=0; $i<$tam;$i++){
            $consulta="SELECT nombre_Dependencia from Dependencia where Id=$listafinal[$i];";
            $respuesta= mysqli_query($db, $consulta);
            while($RQuery= mysqli_fetch_array($respuesta)){
              $nomDep[]=$RQuery['nombre_Dependencia'];
            }
        }
        return $nomDep;        
    }
}
?>

