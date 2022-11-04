<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <style>
        .fundoCores{
            background: hsla(30, 92%, 54%, 1);
            background: linear-gradient(90deg, hsla(30, 92%, 54%, 1) 0%, hsla(29, 95%, 74%, 1) 50%, hsla(208, 100%, 28%, 1) 100%);
        }
    </style>
</head>
<body class='fundoCores'>
    <center>
        <form action="verifica_excluir.php" method="post">
            <label for="id">Informe o Número da conta: </label><br>
            <input type="text" name="id"><br>
            <label for="usuario">Informe o Nome de Usuário:</label><br>
            <input type="text" name="usuario"><br>
            <label for="senha">Confirme a senha da conta:</label><br>
            <input type="password" name="senha"><br>
            <input type="submit" value="Excluir Conta">
        </form>
    </center>
</body>
</html>