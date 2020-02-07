<?php
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';

    class UsuarioController{
        private $usuario;
        public function __construct(){
            $this->usuario = new UsuarioDAO();
        }
        public function Login(){

            if(isset($_POST['usuario'])){
                $usuario=$_POST['usuario'];
                $claves=$_POST['clave'];  
                //$this->usuario->  
            }
        }
        public function RegiterUsuario(){
            $u=new Usuario();
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setCI($_POST['CI']);
            $u->setClave($_POST['clave']);
            $u->setRol('C');
            $newClave=$u->cryptPassword();
            $u->setClave($newClave);
            $this->usuario->insertUsuario($u);
            $result=$this->usuario->validateUsuario($u->getNombre(),$u->getClave());
            require_once HEADER;
            header('Location:index.php?');
            require_once FOOTER;
        }
    }
?>