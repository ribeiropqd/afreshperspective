<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "A Fresh Perspective";?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/1ho.css">
</head>
<body style="background-image: url(imagens/fundopag1.jpg);">  <!-- Imagem de fundo da página -->
<nav class="navbar navbar-expand-lg bg-body-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="1home.php">AFS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active text-light" href="0login.php">
            <button class="btn btn-outline-light">LOGIN</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" aria-current="page" href="1home.php">
            <button class="btn btn-outline-light">HOME</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" href="2qs.php">
            <button class="btn btn-outline-light">QUEM SOMOS</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-light" href="3cad.php">
            <button class="btn btn-outline-light">CADASTRE-SE</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-light" href="4serv.php">
            <button class="btn btn-outline-light">SERVIÇOS</button></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-3" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<?php
session_start();
if (isset($_SESSION['nome'])) {
    echo "Bem-vindo, " . $_SESSION['nome'] . "!";
}
?>
<br><div class="header">
    <h1>A Fresh Perspective</h1>
    <p>O MUNDO VISTO POR OUTRO ÂNGULO</p>
</div>
<footer>
    &copy;todos os direitos reservados.
</footer>

<!--BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
