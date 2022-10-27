<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <form action="" method='post'>
        <label for="texto">Texto</label><br>
        <textarea name='texto' cols="30" rows="10"></textarea><br>
        <label for="procurar">Procurar</label><br>
        <input type="text" name='procurar'><br>
        <input type="submit" value="Pesquisar">
    </form>
    <?php
    $texto = $_POST['texto'];
    $palavra = $_POST['procurar'];
    $palavras_separadas = str_word_count($texto,1);
    $numero_palavras = str_word_count($texto,0);
    $x=0;
    for($i=0;$i<$numero_palavras;$i++){
        if($palavras_separadas[$i] == $palavra){
            echo " <b>$palavras_separadas[$i]</b> ";
            $x++;
        }else{
            echo " $palavras_separadas[$i] ";
        }
    }
    echo "<br>Foi encontrado no texto a palavra <b>$palavra</b> $x Veze(s)";
    ?>
</body>
</html>