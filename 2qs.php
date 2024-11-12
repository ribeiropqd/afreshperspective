<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Quem Somos";?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/2qm.css">
</head>
<body style="background-image: url(imagens/fundoqm.jpg);"> <!-- Imagem de fundo da página -->
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
            <button class="btn btn-light">LOGIN</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" aria-current="page" href="1home.php">
            <button class="btn btn-light">HOME</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="2qs.php">
            <button class="btn btn-light">QUEM SOMOS</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="3cad.php">
            <button class="btn btn-light">CADASTRE-SE</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="4serv.php">
            <button class="btn btn-light">SERVIÇOS</button></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-3" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-light" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="header">
    <h1>Apresentação</h1>
</div>
<div class="container my-5">
  <div class="row justify-content-center"> <!-- Caixa de contéudo transparente -->
     <div class="col-lg-8">
      <div class="presentation-box p-4 rounded shadow">
         <h2 class="text-center">QUEM É VICTOR ?</h2><br> <!-- Título de quem sou eu -->
         <div class="row">
           <div class="col-md-6 text-white"> <!-- Texto ao lado da imagem -->
            <p class="text-content">Meu nome é Victor Ribeiro, sou estudante de Análise e Desenvolvimento de Sistemas, como projeto desse perído na disciplina de Desenvolvimento Web, estou criando esse site, inspirado em uma empresa de Fotografias/Vídeomaker, que aliás já foi uma ideia de profissão do passado. </p>
            <p class="text-content text-center">E aí, posso te ajudar?</p>
           </div>
           <div class="col-md-6 text-center">
            <img src="imagens/victor.jpg" alt="eu" class="img-fluid rounded shadow-lg">
           </div>
         </div>
      </div>
     </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>