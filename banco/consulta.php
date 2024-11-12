<?php
    include 'sessao.php';
    include 'conexao.php';
    $sql = 'SELECT * FROM usuario WHERE nome=nome ORDER BY nome';
    echo "<h1>Consulta aos dados</h1><table border='1'>";
    echo "<thead><tr><th>Nome</th><th>Email</th><th>Senha</th>";
    foreach ($con->query($sql) as $row) {
        echo "<tr><td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['login'] . "</td> <td>" . $row['login'] . "</td>";
        echo "<td><a href=editar.php?login=" . $row['login'] . ">Editar</a></td>";
        echo "<td><a href=excluir.php?login=" . $row['login'] . ">Excluir</a></td></tr>";
    }
    echo "<tr><td colspan='9' align=center><a href='../index.php'>Inserir</a></td>";
    echo "</tbody></table>" ; 
?>