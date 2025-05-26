<?php
require_once 'Core/Config.php';

class Usuario {
    private $db;

    public function __construct() {
        $this->db = Config::getConnection();
    }

    public function getUsuario($id) {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function autenticar($email, $senha) {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return $usuario;
        }
        return false;
    }

    public function criarUsuario($nomeCompleto, $email, $tel, $cpf, $senha) {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO usuario (nomeCompleto, email, tel, cpf, senha, ingressoComprado, ingressoVendido) VALUES (?, ?, ?, ?, ?, 0, 0)");
        return $stmt->execute([$nomeCompleto, $email, $tel, $cpf, $hash]);
    }

    public function atualizarUsuario($id, $nomeCompleto, $tel) {
        $stmt = $this->db->prepare("UPDATE usuario SET nomeCompleto = ?, tel = ? WHERE id = ?");
        return $stmt->execute([$nomeCompleto, $tel, $id]);
    }
}
?>