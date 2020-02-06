<?php
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';

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
            $u=new Usario();
            $u->setNombre($nombre=$_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setCI($_POST['ci']);
            $u->setCalve($_POST['clave']);
            $u->setRol("");
            $resultado=$this->usuario->insertUsuario($u);
        }
    }
?>