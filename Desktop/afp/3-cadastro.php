<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/home.css">
    <link rel="stylesheet" href="stylecss/cadastro.css">
    <link rel="stylesheet" href="stylecss/listgroup.css">
</head>
<body style="background-image: url(imagens/fundopag.jpg);">
    <!--BARRA DE NAVEGAÇÃO DA PÁGINA-->
    <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#navbarAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-incon"></span>
            </button>
            <!--CONTEÚDO DO MENU-->
            <div class="collapse navbar-collapse" id="navabarNavAltMarkup">
                <form class="d-flex" role="search">
                    <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-light" id="buttonbar" type="submit">ENVIAR</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link acitve" aria-current="page" href="1-home.php"><button class="btn btn-outline-light">HOME</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="2-quemsomos.php"><button class="btn btn-outline-light">QUEM SOMOS</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="3-cadastro.php"><button class="btn btn-outline-light">CADASTRE-SE</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="4-servicos.php"><button class="btn btn-outline-light">SERVIÇOS</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    <!--ÁREA DO FORMULÁRIO-->
    <hr><fieldset>
        <legend>CADASTRE-SE</legend>
        <hr>
            <form action="#" method="post" oninput="selec.value=(salto.valueAsNumber)">
        <div class="formulario">    
            <div class="mb-3">
                <label for="nome" class="form-label">NOME</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome." required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-MAIL</label>
                <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">CONFIRME O E-MAIL</label>
                <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">DATA</label>
                <input type="date" class="form-control" id="data" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">LOGIN</label>
                <input type="text" class="form-control" id="login" required placeholder="Cadastre um login.">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">SENHA</label>
                <input type="password" class="form-control" id="senha" aria-describedby="passwordhelpBlock" required minlength="8" placeholder="Sua senha deverá ter de 8-20 caracteres, e possuir letras e números." required>
            </div>
            <div class="mb-3">
                <label for="confirmarSenha" class="form-label">CONFIRME A SENHA</label>
                <input type="password" class="form-control" id="confirmarSenha" aria-describedby="passwordhelpBlock" required minlength="8" placeholder="Digite novamente a senha, ela deverá ser igual a digitada anteriormente." required>
            </div>
            <button type="button" onclick="verificarSenhas()">Confirmar senha</button>
            <div id="mensagemn" style="color:red; margin-top: 10px;" aria-live="assertive">
            </div>
            <div id="mensagemp" style="color: green; margin-top: 10px;" aria-live="assertive">
            </div>
            <div class="mb-3">
                <label for="salto" class="form-label">ESCOLHA O SALTO DESEJADO</label>
                <select name="salto" id="salto" class="form-select" onchange="Valor()" required>
                    <option value="">-- Escolha a sua opção --</option>
                    <option value="500">Formaturas - R$ 500</option>
                    <option value="600">Casamento - R$ 600</option>
                    <option value="700">Tema Livre - R$ 700</option>
                    <option value="650">Ensaio Gravidez - R$ 650</option>
                    <option value="800">Paisagem - R$ 800</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
        </form>
        </fieldset>

    <div id="resultado" style="margin-top: 10px;"></div>

    <!--Área do js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/cadastro.js"></script>
</body>
</html>