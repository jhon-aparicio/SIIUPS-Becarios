<?php
class Horario{
    private $Id;
    private $Dia_Semana;
    private $Hora;
    private $Id_Becario;
    function __construct() {}
function getId() {
    return $this->Id;
}

function getDia_Semana() {
    return $this->Dia_Semana;
}

function getHora() {
    return $this->Hora;
}

function getId_Becario() {
    return $this->Id_Becario;
}

function setId($Id): void {
    $this->Id = $Id;
}

function setDia_Semana($Dia_Semana): void {
    $this->Dia_Semana = $Dia_Semana;
}

function setHora($Hora): void {
    $this->Hora = $Hora;
}

function setId_Becario($Id_Becario): void {
    $this->Id_Becario = $Id_Becario;
}


}
?>

