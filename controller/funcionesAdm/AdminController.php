<?php

require_once'config/config.php';
require_once 'model/DAO/PlanesDAO.php';
require_once 'model/DTO/Planes.php';
require_once 'model/DAO/AdminDAO.php';

class AdminController {

    private $planes;
    private $admin;

    public function __construct() {
        $this->planes = new PlanesDAO();
        $this->admin = new AdminDAO();
    }

    public function mostrarPlanes() {
        require_once HEADER;
        $resultado = $this->planes->getPlanesAll();
        require_once 'view/dinamicas/planes.php';
        require_once FOOTER;
    }
    public function mostrar(){
        require_once 'view/dinamicas/planesViewEdit.php';
    }
    public function eliminar(){
        
    }

    public function guardar() {
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $_SESSION['mensaje'] = "Debe ingresar nombre";
            header('Location:index.php?c=Admin&a=mostrarPlanes');
        }
        $plan = new Planes();
        $plan->setNombre($_POST['nombre']);
        $plan->setDescripcion($_POST['descripcion']);
//        $plan->setPrecio($_POST['precio']);
        $respuesta = $this->admin->addPlanes($plan);
        header('Location:index.php?c=Admin&a=mostrarPlanes');
    }

}
