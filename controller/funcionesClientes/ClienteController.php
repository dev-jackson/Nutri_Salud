<?php

require_once'config/config.php';
require_once 'model/DAO/PlanesDAO.php';

class ClienteController {

    private $verPlanes;

    public function __construct() {
        $this->verPlanes = new PlanesDAO();
    }
    public function verPlanes() {
        require_once HEADER ;
        //falta vista
        $resultado = $this->planes->getAllPlanes();
        require_once FOOTER;
    }

}
