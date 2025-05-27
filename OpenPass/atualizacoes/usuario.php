<?php 
class Usuario
{
    private $Nome;
    private $Email;
    private $Senha;
    private $Cpf;
    private $Numero;

    public function __construct($nome, $email, $senha, $cpf, $numero)
    {
        $this->Nome = $nome;
        $this->Email = $email;
        $this->Senha = $senha;
        $this->Cpf = $cpf;
        $this->Numero = $numero;
    }

   /* 
    public function getUsuario($id) {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE id = 	?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }*/

 /*
	

    public function autenticar($email, $senha) {
        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return $usuario;
        }
        return false;
    }
*/

    function createUsuario()  
    {
        $comando = "INSERT INTO usuarios (nome, email, senha, cpf, numero) VALUES (?, ?, ?, ?, ?);";
        $stmt = Conexao::comandos($comando);
        $stmt->execute([
            $this->Nome,
            $this->Email,
            $this->Senha,
            $this->Cpf,
            $this->Numero
        ]);
    }
}
?>