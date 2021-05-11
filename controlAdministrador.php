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
        //Conexion base de Datos
        $db= Db::conectar();
        //Arreglo donde se guardaran nuestras dependencias
        $listarDependencia=[];
        //Se realiza la consulta
        $select= mysqli_query($db,'SELECT * FROM Dependencia');
        //Hacemos un while donde transformemos el resultado de la consulta en un objeto de tipo Dependenica
        while ($RQuery= mysqli_fetch_array($select)){
            //Creamos el objeto Dpendenica
            $dependencia=new Dependencia();
            //Hacemos un set donde le asiganmos los valores que estan dentro de nuestra base de datos
            //Y hacen parte de nuestro objeto
            $dependencia->setId($RQuery['Id']);
            $dependencia->setNombre_Dependencia($RQuery['Nombre_Dependencia']);
            $dependencia->setNombre_Encargado($RQuery['Nombre_Encargado']);
            //Añadimos nuestro objeto y lo agregamos a nuestro arreglo
            $listarDependencia[]=$dependencia;
        }
        //Finalmente retornamos nuestro arreglo para que pueda ser usado y poder mostrar nuestras depnedencias
        return $listarDependencia;
    }
    public function numHorarios() {
        $db= Db::conectar();
        $contador=0;
        $select=mysqli_query($db,'SELECT * FROM Horario;');
        while($RQuery= mysqli_fetch_array($select)){$contador=$contador+1;}
        return $contador;
    }
    //Este metodo no sirve para traer las dependencias de cada becario para complementar nuestra tabla becarios
    public function traerDepeU(){
        //Establecemos conexión con la base de datos
        $db= Db::conectar();
        //Creamos un arreglo 
        $dependencias=[];
        //Creamos la consulta
        $consulta="SELECT D.Nombre_Dependencia as Nombre from Dependencia D INNER JOIN Becario B ON B.id_dependencia=D.Id;";
        //Realizmaos la consulta
        $respuesta= mysqli_query($db, $consulta);
        //Recorremos la consulta 
        while($RQuery= mysqli_fetch_array($respuesta)){
            //Traemos el nombre de la dependencia y lo agregamos en nuestra variable
            $Nombre=$RQuery['Nombre'];
            //Añadimos el nombre a nuestra arreglo
            $dependencias[]=$Nombre;
        }
        //Finalmente retornamos el arreglo 
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
        $consulta="select * from Informe where Estado='Pendiente' order by id_B;";
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
        $consulta="SELECT B.Usuario as Usuario from Becario B INNER JOIN Informe I ON B.Codigo=I.id_B where I.Estado='Pendiente' order by B.Codigo;";
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
        $consulta="SELECT Codigo from Becario B INNER JOIN Informe I ON B.Codigo=I.id_B where I.Estado='Pendiente' order by B.Codigo;";
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
            $consulta="SELECT id_dependencia as Nombre from Becario b where b.Codigo=$lista[$i] order by b.Codigo;";
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

