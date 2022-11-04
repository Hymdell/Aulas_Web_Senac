<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteira</title>
</head>
<body>
    <center>
        <h1><strong>Fruteira</strong></h1>
        <form action="acoes.php" method="post">
            <label for="fruta">Informe a fruta que quer comprar:</label><br>
            <input type="text" name="fruta" placeholder="Exemplo: Laranja"><br>
            <label for="quantidade">Quantidade que deseja comprar:</label><br>
            <input type="text" name="quantidade" placeholder="Exemplo: 10"><br>
            <input type="submit" value="Ir para o caixa">
        </form>
    </center>
</body>
</html>