<?php

class Planes {

    private $idplanes_nutri;
    private $nombre;
    private $descripcion;
    

    function getIdP() {
        return $this->idplanes_nutri;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdP($idP) {
        $this->idplanes_nutri = $idP;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
   }

?>
