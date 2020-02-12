<?php
 class AdminDAO{
    private $con;
    public function __construct(){
        try{
            $this->con = Connection::getConnection();
        }catch(Exception $e){
            echo $e.getMessage();
        }
    }
    public function addPlanes(Planes $p){
        try{
            $stm =$this->con->prepare("INSERT INTO planes_nutri(nombre,descripcion) VALUES(?,?)");
            $stm->execute(array(
                $p->getNombre(),
                $p->getDescripcion()));
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function mostrarxId($id){
        $sql = "select * from planes_nutri where idplanes_nutri = ?";
        $sen = $this->con->prepare($sql);
        $par = array($id);
        $sen->execute($par);
        $res=$sen->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function updatePlanes(Planes $p){
        try{
            
            $sql = "UPDATE planes_nutri SET nombre= ?, descripcion= ? where idplanes_nutri=?";
            $sentencia = $this->con->prepare($sql);
            $par = array($p->getNombre(),
                    $p->getDescripcion(),
                    $p->getId());
            $sentencia->execute($par);
            $res = $sentencia->rowCount();
            return $res;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function delete($id){
        $sql = "delete from planes_nutri where idplanes_nutri = ?";
        $sent = $this->con->prepare($sql);
        $par = array($id);
        $sent->execute($par);
        $result = $sent->rowCount();
        return $result;
    }
 }
?>