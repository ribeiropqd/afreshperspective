<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'banco/sessao.php';
?>
    <h1>Cadastro de Veículos</h1>
    <form action="banco/insere.php" method="post">
        <fieldset><legend>Dados do veículo</legend>
            <label>Placa</label>
            <input type="text" id="txtPlaca" name="txtPlaca" required ="required" autofocus="autofocus"
            pattern="[A-Z]{3}[0-9]{1}[A-Z]{1}[0-9]{2}|[A-Z]{3}[0-9]{4}" /><br/><br/>
            <label>Fabricante</label>
            <input type="text" id="txtFabricante" name="txtFabricante" /><br /><br />
            <label>Marca</label><input type="text" id="txtMarca" name="txtMarca" /><br /><br />
            <label>Ano</label> <input type="number" id="txtAno" name="txtAno" value="2019"/><br /><br />
            <label>Cor</label><input type="text" id="txtCor" name="txtCor" /></fieldset><br />
            <fieldset><legend>Dados do Cliente</legend>
            <label>Nome</label><input type="text" id="txtNome" name="txtNome" /><br /><br />
            <label>Idade</label>
            <input type="number" id="txtIdade" name="txtIdade" /><br /><br /> 
            <label>Telefone</label>
            <input type="text" id="txtTelefone" name="txtTelefone" /></fieldset> <br />
            <input type="submit" value="Salvar">
            <input type="button" value="Listar" onclick="window.location.href ='banco/consulta.php';">
    </form>
</body>
</html>