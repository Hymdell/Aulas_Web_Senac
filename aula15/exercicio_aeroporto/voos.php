<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voos</title>
</head>
<body>
    <center>
        <form action="compra_verifica.php" method="post">
            <label for="Origem">Escolha a cidade de origem:</label><br>
            <select name="Origem">
                <?php 
                session_start();
                foreach($_SESSION['cidades'] as $cidade){
                    echo '<option value="'.$cidade.'">'.$cidade.'</option>';
                }
                ?>
            </select>
            <br>
            <label for="Destino">Escolha a cidade de destino:</label><br>
            <select name="Destino">
                <?php
                foreach($_SESSION['cidades'] as $cidade){
                    echo '<option value="'.$cidade.'">'.$cidade.'</option>';
                }
                ?>
            </select>
            <br>
            <input type="submit" value="Comprar">
        </form>
    </center>
</body>
</html>