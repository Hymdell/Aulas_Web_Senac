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
    $palavras_juntas = $_POST["texto"];
    $tamanho = strlen($palavras_juntas);
    for($i=0;$i<$tamanho;$i++){
        if($palavras_juntas[$i] == ","){
            echo "<br>";
        }else{
           echo $palavras_juntas[$i];
        }
    }
?>
</body>
</html>