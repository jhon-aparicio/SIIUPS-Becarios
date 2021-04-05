<?php
include_once 'Conexion.php';
class controlUsuario {
    public $usuario;
    
    public function __construct() {
        
    }
    public function inicio($usuario){
        $this->usuario=$usuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }
    public function traerInfo($usuario){
        $db= Db::conectar();
        $becario=new Becario();
        $consulta="SELECT Codigo,Usuario, concat(Nombre,' ',Apellido) as Nombre,Horas_F,Horas_R from Becario where Usuario=$usuario;";
        $select= mysqli_query($db, $consulta);

        while($RQuery= mysqli_fetch_array($select)){
            $becario=new Becario();
            $becario->setCodigo($RQuery['Codigo']);
            $becario->setUsuario($RQuery['Usuario']);
            $becario->setNombre($RQuery['Nombre']);
            $becario->setHora_R($RQuery['Horas_R']);
            $becario->setHoras_H($RQuery['Horas_F']);            
        }
        return $becario;
    }
    public function traerDep($usuario){
        $dep;
        $db= Db::conectar();
        $select= mysqli_query($db, "Select d.Nombre_Dependencia as Nombre_D from Dependencia d WHERE d.Id=(SELECT b.id_dependencia from Becario b WHERE Usuario=$usuario);");
        while($RQuery= mysqli_fetch_array($select)){
            $dep=$RQuery['Nombre_D'];
        }        
        return $dep;
    }
    public function traerDependencia($usuario){
        $dependencia= new Dependencia();
        $db= Db::conectar();
        $consulta= "SELECT * from Dependencia d WHERE d.Id=(SELECT b.id_dependencia from Becario b WHERE Usuario=$usuario);";
        $select= mysqli_query($db, $consulta);
        while($RQuery= mysqli_fetch_array($select)){
            $dependencia->setId($RQuery['Id']);
            $dependencia->setNombre_Dependencia($RQuery['Nombre_Dependencia']);
            $dependencia->setNombre_Encargado($RQuery['Nombre_Encargado']);
        }
        return $dependencia;
    }
    public function traerHorario($usuario){
        $db= Db::conectar();
        $horarios=[];
        $consulta="Select * from Horario h WHERE h.Id_Becario=(SELECT b.Codigo from Becario b WHERE Usuario=$usuario);";
        $select= mysqli_query($db, $consulta);
        while($RQuery= mysqli_fetch_array($select)){
            $horario= new Horario();
            $horario->setDia_Semana($RQuery['Dia_Semana']);
            $horario->setHora($RQuery['Hora']);
            $horarios[]=$horario;
        }
        return $horarios;
    }
    public function traerInformes($usuario){
        $db= Db::conectar();
        $informes=[];
        $consulta="select * from Informe i where i.id_B=(select b.Codigo from Becario b where Usuario=$usuario);";
        $select= mysqli_query($db, $consulta);
        while($RQuery= mysqli_fetch_array($select)){
            $informe= new Informe();
            $informe->setId($RQuery['Id']);
            $informe->setFecha($RQuery['Fecha']);
            $informe->setDetalle($RQuery['Detalle']);
            $informe->setHoras_H($RQuery['Horas_H']);
            $informe->setEstado($RQuery['Estado']);
            $informes[]=$informe;
        }
        return $informes;
    }
}
?>

