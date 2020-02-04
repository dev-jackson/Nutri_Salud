<?php

require_once'config/config.php';
require_once 'model/DAO/PlanesDAO.php';
require_once 'model/DAO/Planes';

class AdminController {

    private $planes;

    public function __construct() {
        $this->planes = new PlanesDAO();
    }

    public function mostrarPlanes() {
        require_once HEADER;
        //falta vista
        $resultado = $this->planes->getAllPlanes();
        require_once FOOTER;
    }

    public function Guardar() {
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $_SESSION['mensaje'] = "Debe ingresar nombre";
            header('Localtion:index.php?c=Admin&a=mostrarPlanes');
        }
        $plan = new Planes();
        $plan->setNombre($_POST['nombre']);
        $plan->setDescripcion($_POST['descripcion']);
        $plan->setPrecio($_POST['precio']);
    }

}
