<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha</title>
</head>
<body>
    <center>
        <h1>Escolha aonde que viajar</h1>
        <form action="escolha_valida.php" method="post">
            <input type="hidden" name="classe" value="economica">
            <input type="submit" value="Classe Econômica">
        </form>
        <br>
        <form action="escolha_valida.php" method="post">
            <input type="hidden" name="classe" value="executiva">
            <input type="submit" value="Classe Executiva">
        </form>
    </center>
</body>
</html>