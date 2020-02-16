<?php

class AdminDAO {

    private $con;

    public function __construct() {
        try {
            $this->con = Connection::getConnection();
        } catch (Exception $e) {
            echo $e . getMessage();
        }
    }

    public function addPlanes(Planes $p) {
        try {
            $stm = $this->con->prepare("INSERT INTO planes_nutri(nombre,descripcion) VALUES(?,?)");
            $stm->execute(array(
                $p->getNombre(),
                $p->getDescripcion()));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addPlanesDetallados(PlanesDetallado $planD) {
        try {
            $sql = $this->con->prepare("INSERT INTO detalle_plan(planes_nutri_idplanes_nutri,plan,lunes,martes,miercoles,jueves,viernes,sabado,domingo)"
                    . "VALUES (?,?,?,?,?,?,?,?,?)");
            $sql->execute(array(
                $planD->getIdplanNutri(),
                $planD->getPLan(),
                $planD->getLunes(),
                $planD->getMartes(),
                $planD->getMiercoles(),
                $planD->getJueves(),
                $planD->getViernes(),
                $planD->getSabado(),
                $planD->getDomingo(),
            ));
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function mostrarxId($id) {
        $sql = "select * from planes_nutri where idplanes_nutri = ?";
        $sen = $this->con->prepare($sql);
        
        $par = array($id);
        $sen->execute($par);
        $res = $sen->fetch(PDO::FETCH_OBJ);
        echo (json_encode($res));
        return $res;
    }
    
    public function mostrarDetallexId($id){
        $sql=" select * from detalle_plan where iddetalle_plan = ?";
        $sen = $this->con->prepare($sql);
        $parametros = array($id);
        $sen->execute($parametros);
        $res = $sen->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function updatePlanes(Planes $p) {
        try {

            $sql = "UPDATE planes_nutri SET nombre= ?, descripcion= ? where idplanes_nutri= ? ";
            $sentencia = $this->con->prepare($sql);
            $par = array($p->getNombre(),
                $p->getDescripcion(),
                $p->getIdP());
            $sentencia->execute($par);
            $res = $sentencia->rowCount();
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function updatePplanesDetalles(PlanesDetallado $det){
         try {

            $sql = "UPDATE detalle_plan SET planes_nutri_idplanes_nutri= ?, plan= ?,lunes=?,martes=?,miercoles=?,jueves=?,viernes=?,sabado=?,domingo=? where iddetalle_plan= ? ";
            $sentencia = $this->con->prepare($sql);
            $par = array($det->getIdplanNutri(),
                $det->getPLan(),
                $det->getLunes(),
                $det->getMartes(),
                $det->getMiercoles(),
                $det->getJueves(),
                $det->getViernes(),
                $det->getSabado(),
                $det->getDomingo(),
                $det->getIdPlanDetallado());
            $sentencia->execute($par);
            $res = $sentencia->rowCount();
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        $sql = "delete from planes_nutri where idplanes_nutri = ?";
        $sent = $this->con->prepare($sql);
        $par = array($id);
        $sent->execute($par);
        $result = $sent->rowCount();
        return $result;
    }

    public function deletePlanDetails($id) {
        $sql = $this->con->prepare("delete from detalle_plan where iddetalle_plan = ?");
        $sql->execute(array($id));
        $result = $sql->rowCount();
        return $result;
    }

}

?>