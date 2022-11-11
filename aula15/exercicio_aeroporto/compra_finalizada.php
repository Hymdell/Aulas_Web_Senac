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
        <?php 
        session_start();

        echo "Obrigado por comprar o assento <strong>" . $_SESSION['Assento'] . "</strong><br>";
        echo "Com origem em <strong>" . $_SESSION['Origem'] . "</strong><br>";

        if(!empty($_SESSION['Conexoes'])){
            $n = sizeof($_SESSION['Conexoes']);
            echo "E Conexão/Conexões em ";
            foreach($_SESSION['Conexoes'] as $cone){
                echo "<strong>" . $cone . "</strong>,";}
        }
        
        echo "<br> e destino em <strong>". $_SESSION['Destino'] . "</strong>";
        ?>
        <br>
        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>
    </center>
</body>
</html>