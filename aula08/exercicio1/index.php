<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <form action="verificar.php" method="post">
        <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>