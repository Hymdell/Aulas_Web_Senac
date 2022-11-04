<?php
session_start();
?>

<DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <center>
        <form action="verifica_cadastro.php" method="post">
            <label for="usuario">Informe um usuário:</label><br>
            <input type="text" name="usuario" placeholder="Usuário"><br>
            <label for="senha">Informe uma senha:</label><br>
            <input type="password" name="senha" placeholder="Senha"><br>
            <label for="saldo">Informe o saldo inicial da conta:</label><br>
            <input type="text" name="saldo" placeholder="200"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </center>
</body>
</html>