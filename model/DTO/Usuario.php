<?php
    class Usuario{
        private $id;
        private $nombre;
        private $apellido;
        private $ci;
        private $clave;
        private $rol;
        
        function getId() {
            return $this->id;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }
        function getCI() {
            return $this->ci;
        }

        function getClave() {
            return $this->clave;
        }

        function getRol() {
            return $this->rol;
        }
        function setId($id) {
            $this->id = $id;
        }
        function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        function setApellido($apellido) {
            $this->apellido = $apellido;
        }
        function setCI($ci) {
            $this->ci = $ci;
        }
        function setClave($clave) {
            $this->clave = $clave;
        }
        function setRol($rol) {
            $this->rol = $rol;
        }

    }
?>