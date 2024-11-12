<?php
session_start() ; //iniciar a sessão
include 'conexao.php';
$login = $_POST['login'];
$senha = $_POST['senha'];
echo "<html><body><h1>SEJA BEM VINDO!</h1>";
echo "<h3><a href='../1home.php'>página inicial</a></h3>";
    if (isset($_POST['btnAcessar'])) { //se o botão Acessar foi clicado
    $sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
    if ($con->query($sql)->rowCount() == 0) { //se foram zero registros retornados
    echo "<h3>Login e/ou senha inválidos !!!</h3>";
    echo "<h3><a href='../index.php'>Retornar</a></h3>";
    unset ($_SESSION['login']); //desativa o login da sessão
    header("Refresh: 5;url=../index.php"); //redireciona após 5 segundos
        } else { //validado o login
        $_SESSION['login'] = $login; //armazena na sessão
        header("location:consulta.php"); //redireciona automaticamente
        }
    } 
?>
