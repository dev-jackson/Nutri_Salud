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

    public function mostrar() {
        require_once 'view/dinamicas/planesViewEdit.php';
}

    public function mostrarid(){
        $plan = new AdminDAO();
        $planedit = $this->admin->mostrarxId($_REQUEST['id']);
//       require_once HEADER;
        REQUIRE_ONCE 'view/dinamicas/planesViewEdit.php';
        REQUIRE_ONCE FOOTER;
    }

    public function eliminar() {
        if (!isset($_REQUEST['id'])) {
            header('Location:index.php?c=Admin&a=mostrarPlanes');
        }
        $res = $this->admin->delete($_REQUEST['id']);
        if ($res > 0) {
            $_SESSION['mensaje'] = "Se ha eliminado";
        } else {
            $_SESSION['mensaje'] = "No se ha eliminado";
        }
        header('Location:index.php?c=Admin&a=mostrarPlanes');
    }

    public function guardar() {
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $_SESSION['mensaje'] = "Debe ingresar nombre";
            header('Location:index.php?c=Admin&a=mostrarPlanes');
        }
        $plan = new Planes();
        $plan->setNombre($_POST['nombre']);
        $plan->setDescripcion($_POST['descripcion']);
        
        if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
            $plan->setId($_REQUEST['id']);
            $res = $this->admin->updatePlanes($plan);
        }else{
            $respuesta = $this->admin->addPlanes($plan);
        }
        header('Location:index.php?c=Admin&a=mostrarPlanes');
    }
    
    public function mostrarDetallePlan(){
        require_once HEADER;
        $resultado = $this->planes->planesDetalles();
        require_once 'view/dinamicas/planDetallado.php';
        require_once FOOTER;
    }

}
