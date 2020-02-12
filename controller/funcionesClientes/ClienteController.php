<?php

require_once 'config/config.php';
require_once 'model/DAO/PlanesDAO.php';

class ClienteController {

    private $verPlanes;

    public function __construct() {
        $this->verPlanes = new PlanesDAO();
    }
    public function verPlanes() {
        require_once HEADER;
        $resultado = $this->verPlanes->getPlanesAll();
        require_once 'view/dinamicas/planes.php';
        require_once FOOTER;
    }
    public function informacion(){
        require_once HEADER;
        $resultado = $this->verPlanes->getPlanesAll();
        require_once 'view/dinamicas/informacion.php';
        require_once FOOTER;
    }
}
