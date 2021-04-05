<?php
    class Informe{
        private $Id;
        private $Fecha;
        private $Detalle;
        private $Horas_H;
        private $Estado;
        private $id_B;
        function __construct(){}
function getId() {
    return $this->Id;
}

function getFecha() {
    return $this->Fecha;
}

function getDetalle() {
    return $this->Detalle;
}

function getHoras_H() {
    return $this->Horas_H;
}

function getEstado() {
    return $this->Estado;
}

function getId_B() {
    return $this->id_B;
}

function setId($Id): void {
    $this->Id = $Id;
}

function setFecha($Fecha): void {
    $this->Fecha = $Fecha;
}

function setDetalle($Detalle): void {
    $this->Detalle = $Detalle;
}

function setHoras_H($Horas_H): void {
    $this->Horas_H = $Horas_H;
}

function setEstado($Estado): void {
    $this->Estado = $Estado;
}

function setId_B($id_B): void {
    $this->id_B = $id_B;
}


    }
    
    
?>
