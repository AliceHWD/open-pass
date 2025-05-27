<?php 
    require_once 'database.php'; 
    include_once 'usuario.php';

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['senha'])){
        $senha = $_POST['senha'];
    }
    if(isset($_POST['cpf'])){
        $cpf = $_POST['cpf'];
    }
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
    }

    $usuarios = new Usuario($nome, $email, $senha, $cpf, $numero);
    $usuarios = $usuarios->createUsuario();

    header("location: /open-pass/OpenPass/login/cadastro.php");
?>