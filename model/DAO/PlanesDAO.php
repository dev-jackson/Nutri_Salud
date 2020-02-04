<?php
    include_once '../model/Conexion.php';
    class PlanesDAO{
        private $con;

        public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMassege();
            }
        }
        public function getPlanesAll(){
            try{
                $stm = $this->con->prepare("SELECT *FROM planes_nutri");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function getPlan($id){
            try{
                $stm = $this->con->prepare("SELECT *FROM planes_nutri WHERE id= ?");
                $stm->execute(arry(
                    $id
                ));
                return $stm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>