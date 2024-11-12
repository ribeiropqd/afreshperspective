<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/3cd.css">
</head>
<body style="background-image: url(imagens/fundocad.jpg);">  <!-- Imagem de fundo da página -->
<nav class="navbar navbar-expand-lg bg-body-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="1home.php">AFS</a> <!-- logo -->
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
          <a class="nav-link active text-light" aria-current="page" aria-current="page" href="1home.php">
            <button class="btn btn-light">HOME</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" href="2qs.php">
            <button class="btn btn-light">QUEM SOMOS</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-light" href="3cad.php">
            <button class="btn btn-light">CADASTRE-SE</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-light" href="4serv.php">
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
    <!--ÁREA DO FORMULÁRIO-->
    <div class="header">
        <h1>CADASTRE-SE</h1>
    </div>
    <div class="container-form">
            <form action="banco/insere.php" method="post">
                <fieldset>
                <div class="formulario">    
                    <div class="mb-3 text-light">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome." required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="email" class="form-label">E-MAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="text" class="form-label">LOGIN</label> <!-- Campo que solicita um login ao usuário -->
                        <input type="text" class="form-control" id="login" name="login" required placeholder="Cadastre o seu login">
                    </div>
                    <div class="mb-3 text-light">
                        <label for="senha" class="form-label">SENHA</label> <!-- Pede a senha -->
                        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="passwordhelpBlock" required minlength="8" placeholder="Sua senha deverá ter de 8-20 caracteres, e possuir letras e números." required>
                    </div>
                    <div class="mb-3 text-light">
                        <label for="confirmarSenha" class="form-label">CONFIRME A SENHA</label> <!-- Verifica se as senhas são iguais -->
                        <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" aria-describedby="passwordhelpBlock" required minlength="8" placeholder="Digite a senha novamente, ela deverá ser idêntica a anterior." required>
                        </div> 
                        <button type="button" class="btn btn-outline-light" onclick="verificarSenhas()">Confirmar senha</button><button type="submit" class="btn btn-outline-light" onclick="window.location.href='banco/consulta.php'">Enviar</button>
                        <div id="mensagemn" style="color:red; margin-top: 10px;" aria-live="assertive">
                        </div>
                        <div id="mensagemp" style="color: lightgreen; margin-top: 10px;" aria-live="assertive">
                        </div>
                    </fieldset>
                </div>
            </form>
    </div>
    <footer> <!-- Rodapé da página -->
        &copy;todos os direitos reservados.
    </footer>

    <!--Área do js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/cadastro.js"></script>
</body>
</html>