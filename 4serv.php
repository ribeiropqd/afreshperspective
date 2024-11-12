<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "A Fresh Perspective";?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/4ser.css">
</head>
<body style="background-image: url(imagens/fundoserv.jpg);">  <!-- Imagem de fundo da página -->
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

<br><div class="header">
    <h1>Nossos Serviços</h1>
</div>

<?php // Abaixo as opções de serviço que com imagens e os links que direcionam para sua própria página, onde específica o serviço ao cliente.
$galleryItems = [
    ["img" => "imagens/15anos.jpg", "alt" => "15anos", "caption" => "15 ANOS", "link" => "15anos.php"],
    ["img" => "imagens/casamento.jpg", "alt" => "casamento", "caption" => "CASAMENTOS", "link" => "5casamento.php"],
    ["img" => "imagens/nenem.jpg", "alt" => "nenem", "caption" => "ENSAIOS CRIANÇAS", "link" => "nenem.php"],
    ["img" => "imagens/formatura.jpg", "alt" => "formatura",  "caption" => "FORMATURAS", "link" => "formatura.php"],
];
?>

<div class="gallery-container">
    <?php
    $allItems = array_merge($galleryItems); // Junta as duas galerias em uma só
    $count = 0; // Contador para controlar o número de imagens por linha

    foreach ($allItems as $item): 
        if ($count % 4 == 0): // Inicia uma nova linha a cada 4 imagens
    ?>
            <ul class="list-group list-group-horizontal">
        <?php endif; ?>
                <li class="list-group-item no-background">
                    <a class="nav-link active" href="<?= $item['link']; ?>">
                        <figure>
                            <img src="<?= $item['img']; ?>" alt="<?= $item['alt']; ?>" class="gallery-image">
                            <figcaption><?= $item['caption']; ?></figcaption>
                        </figure>
                    </a>
                </li>
        <?php 
        $count++;
        if ($count % 4 == 0): // Fecha a linha após 4 itens
        ?>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if ($count % 4 != 0): // Fecha a linha aberta se não tiver 4 imagens ?>
        </ul>
    <?php endif; ?>
</div>

<footer> <!-- Rodapé da página -->
    &copy;todos os direitos reservados.
</footer>

<!--BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>