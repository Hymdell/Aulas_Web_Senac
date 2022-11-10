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

        echo "Obrigado por comprar o assento " . $_SESSION['Assento'] . "<br>";
        echo "Com origem em" . $_SESSION['Origem'] . "<br>";

        if(!empty($_SESSION['Conexoes'])){
            $n = sizeof($_SESSION['Conexoes']);
            echo "E Conexão/Conexões em ";
            foreach($_SESSION['Conexoes'] as $cone){
                echo $cone . ",";}
        }
        
        echo "<br> e destino em ". $_SESSION['Destino'];
        ?>
        <br>
        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>
    </center>
</body>
</html>