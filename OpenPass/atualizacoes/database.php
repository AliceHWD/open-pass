<?php
class Conexao
{
    static function Conectar()
    {
        global $pdo;
        $host = '127.0.0.1';
        $banco = 'openpass';
        $string_conn = "mysql:host=$host;dbname=$banco";
        $user = 'root';
        $password = '';
        $pdo = new PDO($string_conn, $user, $password);
    }

    static function listarDados($consulta)
    {
        self::Conectar();
        global $pdo;
        $stmt = $pdo->query($consulta);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    static function comandos($comando)
    {
        self::Conectar();
        global $pdo;
        return $pdo->prepare($comando);
        exit;
    }
}
