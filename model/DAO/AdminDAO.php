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
    public function updatePlanes(){
        try{
            $stm = $this->can->prepare("UPDATE planes_nutri"
            . "SET nombre= ?, descripcion= ?");
            $stm->excute();
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