<?php
require_once 'App/Model/Usuario.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    public function mostrarUsuario($id) {
        $usuario = $this->usuarioModel->getUsuario($id);
        require 'App/View/perfil.php'; 
    }

    public function login($email, $senha) {
        $usuario = $this->usuarioModel->autenticar($email, $senha);
        if ($usuario) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: /Inicio/index.php");
        } else {
            echo "Login falhou!";
        }
    }
}
?>