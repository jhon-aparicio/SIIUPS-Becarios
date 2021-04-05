<?php
class Dependencia{
    private $Id;
    private $Nombre_Dependencia;
    private $Nombre_Encargado;
    
    function __construct(){}
    
    function getId() {
        return $this->Id;
    }

    function getNombre_Dependencia() {
        return $this->Nombre_Dependencia;
    }

    function getNombre_Encargado() {
        return $this->Nombre_Encargado;
    }

    function setId($Id): void {
        $this->Id = $Id;
    }

    function setNombre_Dependencia($Nombre_Dependencia): void {
        $this->Nombre_Dependencia = $Nombre_Dependencia;
    }

    function setNombre_Encargado($Nombre_Encargado): void {
        $this->Nombre_Encargado = $Nombre_Encargado;
    }
    
}

?>


