<?php
session_start();
if ((isset($_SESSION['login']) == false)) {
    unset($_SESSION['login']);
    header('location:../1home.php');
}

$logado = $_SESSION['login'];