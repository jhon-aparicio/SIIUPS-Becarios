<?php
    class Administrador{
        private $Codigo;
        private $Usuario;
        private $Pass;
        private $Primer_Nombre;
        private $Apellido;
        private $Tipo;
        function __construct(){}
        function getCodigo() {
            return $this->Codigo;
        }

        function getUsuario() {
            return $this->Usuario;
        }

        function getPass() {
            return $this->Pass;
        }

        function getPrimer_Nombre() {
            return $this->Primer_Nombre;
        }

        function getApellido() {
            return $this->Apellido;
        }

        function getTipo() {
            return $this->Tipo;
        }

        function setCodigo($Codigo): void {
            $this->Codigo = $Codigo;
        }

        function setUsuario($Usuario): void {
            $this->Usuario = $Usuario;
        }

        function setPass($Pass): void {
            $this->Pass = $Pass;
        }

        function setPrimer_Nombre($Primer_Nombre): void {
            $this->Primer_Nombre = $Primer_Nombre;
        }

        function setApellido($Apellido): void {
            $this->Apellido = $Apellido;
        }

        function setTipo($Tipo): void {
            $this->Tipo = $Tipo;
        }


    }
?>

