<?php
    include 'sessao.php';
    include 'conexao.php'; // abrir a conexão com o BD.

    $nome = $_POST['nome']; // ler os dados do formulário.
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "insert into usuarios (nome, email, login, senha) values('$nome', '$email', '$login', '$senha')";
    $count = $con->exec($sql);
    echo "<p> $count regitros(s) incluído(s)</p>";
    echo "<a href='consulta.php'>Consultar dados</a>";
?>