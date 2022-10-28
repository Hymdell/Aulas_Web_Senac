<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <center>
        <form action="verificar_cadastro.php" method="post">
            <label for="usuario">Usuário:</label><br>
            <input type="text" name="usuario"><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha"><br><br>
            <input type="submit" name="submitc" value="Cadastrar">
        </form>
    </center>
</body>
</html>