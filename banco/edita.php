<?php
include 'sessao.php';
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "update usuarios set nome='$nome', email='$email where nome='$nome' ";
$count = $con->exec($sql);
echo "<html><body><h1>Alteração de dados</h1>";
echo "<h3>Usuário: $logado</h3>";
echo "<h3> $count registro(s) atualizado(s)</h3>";
echo "<h3><a href='consulta.php'>Consultar dados</a></h3>";
echo "</body></html>";
?>