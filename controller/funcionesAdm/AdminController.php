<?php

require_once'config/config.php';
require_once 'model/DAO/PlanesDAO.php';
require_once 'model/DTO/Planes.php';
require_once 'model/DTO/PlanesDetallado.php';
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

    public function mostrarPlanesDetallados() {
        $tipoPlan = new PlanesDAO();
        $tipoP = $tipoPlan->getPlanesAll();
        require_once 'view/dinamicas/planDetalladoEdit.php';
    }

    public function mostrarid() {
        //$plan = new AdminDAO();
        $planedit = $this->admin->mostrarxId($_REQUEST['id']);
//       require_once HEADER;
        REQUIRE_ONCE 'view/dinamicas/planesViewEdit.php';
//        REQUIRE_ONCE FOOTER;
    }

    public function mostrarIdDetalle() {
        $tipoPlan = new PlanesDAO();
        $tipoP = $tipoPlan->getPlanesAll();
        $DetalleEdit = $this->admin->mostrarDetallexId($_REQUEST['id']);
        require_once 'view/dinamicas/planDetalladoEdit.php';
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

    public function eliminarPlanesDetallados() {
        if (!isset($_REQUEST['id'])) {
            header('Location:index.php?c=Admin&a=mostrarDetallePlan');
        }$res = $this->admin->deletePlanDetails($_REQUEST['id']);
        if ($res > 0) {
            $_SESSION['mensaje'] = "Se ha eliminado";
        } else {
            $_SESSION['mensaje'] = "No se ha eliminado";
        }
        header('Location:index.php?c=Admin&a=mostrarDetallePlan');
    }

    public function guardar() {
        echo('1');
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $_SESSION['mensaje'] = "Debe ingresar nombre";
            header('Location:index.php?c=Admin&a=mostrarPlanes');
            echo('1');
        }
        $plan = new Planes();
        $plan->setNombre($_POST['nombre']);
        $plan->setDescripcion($_POST['descripcion']);

        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
            $plan->setIdP($_REQUEST['id']);
            $respuesta = $this->admin->updatePlanes($plan);
        } else {
            echo('2');
            $respuesta = $this->admin->addPlanes($plan);
        }
        header('Location:index.php?c=Admin&a=mostrarPlanes');
    }

    public function guardarPlanDetallado() {
        $planDetalle = new PlanesDetallado();
        $planDetalle->setIdplanNutri($_REQUEST['idplanNutri']);
        $planDetalle->setPLan($_REQUEST['plan']);
        $planDetalle->setLunes($_REQUEST['lunes']);
        $planDetalle->setMartes($_REQUEST['martes']);
        $planDetalle->setMiercoles($_REQUEST['miercoles']);
        $planDetalle->setJueves($_REQUEST['jueves']);
        $planDetalle->setViernes($_REQUEST['viernes']);
        $planDetalle->setSabado($_REQUEST['sabado']);
        $planDetalle->setDomingo($_REQUEST['domingo']);

        if (isset($_REQUEST['idPlanDetallado']) && !empty($_REQUEST['idPlanDetallado'])) {
            $planDetalle->setIdPlanDetallado($_REQUEST['idPlanDetallado']);
            $respuesta = $this->admin->updatePplanesDetalles($planDetalle);
        } else {
            echo '1';
            $respuesta = $this->admin->addPlanesDetallados($planDetalle);
        }
        header('Location:index.php?c=Admin&a=mostrarDetallePlan');
    }

    public function mostrarDetallePlan() {
        require_once HEADER;
        $resultado = $this->planes->planesDetalles();
        require_once 'view/dinamicas/planDetallado.php';
        require_once FOOTER;
    }

}
