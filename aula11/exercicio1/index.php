<?php
session_start();
$_SESSION['logado'];
$_SESSION['aviso_login'];
$_SESSION['aviso_cadastro'];

if($_SESSION['aviso_login'] == true){
    echo '<script src=js/login_aviso.js></script>';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <form action="verificar_login.php" method="post">
            <label for="email">Email:</label><br>
            <input type="text" name="email" placeholder="email@gmail.com"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" name="submit" value="Logar">
        </form>
        <br>
        <form action="cadastro.php" method="post">
            <input type="submit" value="Cadastrar">
        </form>
    </center>
</body>
</html>