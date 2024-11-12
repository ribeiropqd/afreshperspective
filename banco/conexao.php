<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $dbname = 'meu_site';

    try {
        $con = new PDO("mysql:host=localhost;dbname=meu_site", $usuario, $senha);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }
?>