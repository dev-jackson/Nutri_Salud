<?php
   class UsuarioDAO{
       private $con;

       public function __construct(){
            try{
                $this->con = Connection::getConnection();
            }catch(Exception $e){
                echo $e.getMessage();
            }
       }
       public function getUsuario($id){
            try{
                $stm =$this->con->prepare("SELECT * FROM usuario WHERE idcliente= ? ");
                $stm->excute(array($id));
                return $stm->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                echo $e->getMessage();
            }
       }
       public function insertUsuario(Usuario $u){
           try{
                $stm = $this->con->prepare("INSERT INTO usuario(nombre,apellido,ci,clave,rol) VALUES(?,?,?,?,?)");
                $stm->execute(arrya(
                    $u->getNombre(),
                    $u->getApellido(),
                    $u->getCI(),
                    $u->getRol()
                ));
           }catch(Exception $e){
            echo $e->getMessage();
           }
       }
   } 
?>