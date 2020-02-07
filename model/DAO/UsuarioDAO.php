<?php
    require_once 'model/Conexion.php';
    require_once 'model/DTO/Usuario.php';
   class UsuarioDAO{
       private $con;

       public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e->getMessage();
            }
       }
       public function validateUsuario($userName,$password){
            try{
                $stm =$this->con->prepare("SELECT u.nombre,u.clave FROM usuario u");
                $stm->execute();
                $stm->fetch(PDO::FETCH_ASSOC);

            }catch(Exception $e){
                echo $e->getMessage();
            }
       }
       public function insertUsuario(Usuario $u){
           try{
                $stm = $this->con->prepare("INSERT INTO usuario(nombre,apellido,ci,clave,roles) VALUES(?,?,?,?,?)");
                $stm->execute(array(
                    $u->getNombre(),
                    $u->getApellido(),
                    $u->getCI(),
                    $u->getClave(),
                    $u->getRol()
                ));
                //return $stm->fetch(PDO::FETCH_ASSOC);  
           }catch(Exception $e){
            echo $e->getMessage();
           }
       }
   } 
?>