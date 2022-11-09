<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <center>
        <?php echo "Obrigado por comprar o assento " . $_SESSION['assento'] . "<br>";?>
        <?php echo "Na classe " . $_SESSION['classe'] . "<br>";?>
        <form action="index.php">
                <input type="submit" value="Voltar">
            </form>
    </center>
</body>
</html>