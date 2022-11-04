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
</head>
<body>
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