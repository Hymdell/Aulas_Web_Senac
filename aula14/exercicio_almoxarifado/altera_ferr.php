<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera</title>
</head>
<body>
    <center>
        <form action="altera_valida.php" method="post">
            <label for="codigo">Insira o código da ferramenta que vai alterar:</label><br>
            <input type="text" name="codigo" placeholder="Ex: 1"><br>
            <label for="nome">Insira o novo nome da ferramenta:</label><br>
            <input type="text" name="nome" placeholder="Ex: Martelo"><br>
            <label for="marca">Insira a nova marca da ferramenta: </label><br>
            <input type="text" name="marca" placeholder="Ex: Tramontina"><br>
            <input type="submit" value="Alterar">
        </form>
    </center>
</body>
</html>