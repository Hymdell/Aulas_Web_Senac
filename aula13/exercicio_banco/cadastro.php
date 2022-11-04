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
    <style>
        .fundoCores{
            background: hsla(30, 92%, 54%, 1);
            background: linear-gradient(90deg, hsla(30, 92%, 54%, 1) 0%, hsla(29, 95%, 74%, 1) 50%, hsla(208, 100%, 28%, 1) 100%);
        }
    </style>
</head>
<body class='fundoCores'>
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