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
            $usuario=$_POST['usuario'];
            $claves=$_POST['clave'];
        }
        public function RegiterUsuario(){
            $u=new Usuario();
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setCI($_POST['CI']);
            $u->setClave($_POST['clave']);
            $u->setRol('C');
            $this->usuario->insertUsuario($u);
            $result=$this->usuario->getUsuario($u->getNombre());
            require_once HEADER;
            require_once 'index.php';
            require_once FOOTER;
        }
    }
?>