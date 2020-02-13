<?php


class PlanesDetallado {
    private $idPlanDetallado;
    private $idplanNutri;
    private $plan;
    private $lunes;
    private $martes;
    private $miercoles;
    private $jueves;
    private $viernes;
    private $sabado;
    private $domingo;
    function getIdPlanDetallado() {
        return $this->idPlanDetallado;
    }

    function getPLan() {
        return $this->plan;
    }

    function getLunes() {
        return $this->lunes;
    }

    function getMartes() {
        return $this->martes;
    }

    function getMiercoles() {
        return $this->miercoles;
    }

    function getJueves() {
        return $this->jueves;
    }

    function getViernes() {
        return $this->viernes;
    }

    function getSabado() {
        return $this->sabado;
    }

    function getDomingo() {
        return $this->domingo;
    }

    function setIdPlanDetallado($idPlanDetallado) {
        $this->idPlanDetallado = $idPlanDetallado;
    }

    function setPLan($plan) {
        $this->plan = $plan;
    }

    function setLunes($lunes) {
        $this->lunes = $lunes;
    }

    function setMartes($martes) {
        $this->martes = $martes;
    }

    function setMiercoles($miercoles) {
        $this->miercoles = $miercoles;
    }

    function setJueves($jueves) {
        $this->jueves = $jueves;
    }

    function setViernes($viernes) {
        $this->viernes = $viernes;
    }

    function setSabado($sabado) {
        $this->sabado = $sabado;
    }

    function setDomingo($domingo) {
        $this->domingo = $domingo;
    }
    function getIdplanNutri() {
        return $this->idplanNutri;
    }

    function setIdplanNutri($idplanNutri) {
        $this->idplanNutri = $idplanNutri;
    }



    
}
