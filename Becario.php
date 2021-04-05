<?php
    class Becario{
        private $codigo;
        private $usuario;
        private $pass;
        private $nombre;
        private $apellido;
        private $hora_R;
        private $horas_H;
        private $id_dependencia;
        function __construct(){}
        function getCodigo() {
            return $this->codigo;
        }

        function getUsuario() {
            return $this->usuario;
        }

        function getPass() {
            return $this->pass;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }

        function getHora_R() {
            return $this->hora_R;
        }

        function getHoras_H() {
            return $this->horas_H;
        }

        function getId_dependencia() {
            return $this->id_dependencia;
        }

        function setCodigo($codigo): void {
            $this->codigo = $codigo;
        }

        function setUsuario($usuario): void {
            $this->usuario = $usuario;
        }

        function setPass($pass): void {
            $this->pass = $pass;
        }

        function setNombre($nombre): void {
            $this->nombre = $nombre;
        }

        function setApellido($apellido): void {
            $this->apellido = $apellido;
        }

        function setHora_R($hora_R): void {
            $this->hora_R = $hora_R;
        }

        function setHoras_H($horas_H): void {
            $this->horas_H = $horas_H;
        }

        function setId_dependencia($id_dependencia): void {
            $this->id_dependencia = $id_dependencia;
        }
    }
?>

