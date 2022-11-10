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

        echo "Obrigado por comprar o assento " . $_SESSION['assento'] . "<br>";
        echo "Com origem em" . $_SESSION['origem'] . "<br>";

        if(!empty($_SESSION['conexoes'])){
            $n = sizeof($_SESSION['conexoes']);
            echo "E Conexão/Conexões em ";
            foreach($_SESSION['conexoes'] as $cone){
                echo $cone . ",";}
        }
        
        echo "<br> e destino em ". $_SESSION['destino'];
        ?>
        <br>
        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>
    </center>
</body>
</html>