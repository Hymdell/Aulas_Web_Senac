<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <?php
    if(str_contains($_POST['nome']," ")){
        echo "Nome: ".$_POST['nome']."<br>";
        echo "Cidade: ".$_POST['cidade']."<br>";
        echo "Estado: ".$_POST['estados']."<br>";
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>
</html>