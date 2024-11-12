<?php
session_start();
if (!isset($_SESSION['nome'])) {
    // Redireciona o usuário para a página de login se ele não estiver logado
    header('location:../0login.php'); // Alterne para o caminho da página de login
    exit();
}

// Se o usuário estiver logado, armazene o nome dele em uma variável
$nome_usuario = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Fresh Perspective</title>
</head>
<body>
    <!-- Exibe uma mensagem de boas-vindas com o nome do usuário -->
    <p>Bem-vindo, <?php echo $nome_usuario; ?>!</p>

    <!-- Restante do conteúdo da página -->
</body>
</html>
