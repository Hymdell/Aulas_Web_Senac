<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <style>
        .fundoCores{
            background: hsla(30, 92%, 54%, 1);
            background: linear-gradient(90deg, hsla(30, 92%, 54%, 1) 0%, hsla(29, 95%, 74%, 1) 50%, hsla(208, 100%, 28%, 1) 100%);
        }
    </style>
</head>
<body class='fundoCores'>
    <center>
        <h1>Banco Senac</h1>
        <form action="login.php" method="post">
            <label for="usuario">Usuário</label><br>
            <input type="text" name="usuario" placeholder="Usuário"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" value="Logar">
        </form><br>
        <form action="cadastro.php">
            <label for="cadastro">Não possui uma conta? Cadastre-se</label><br>
            <input type="submit" name="cadastro"value="Cadastrar">
        </form><br>
        <form action="excluir.php">
            <label for="excluir">Possui uma conta e deseja excluir? Clique Aqui</label><br>
            <input type="submit" name="excluir"value="Excluir">
        </form>
    </center>
</body>
</html>