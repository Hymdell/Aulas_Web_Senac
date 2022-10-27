<?php
$nome = "Nome: " . $_POST['nome'];
$idade = "Idade: " . $_POST['idade'];

$arquivo = fopen("escrevi.txt","w");
fputs($arquivo, "$nome\r\n");
fputs($arquivo, "$idade\r\n");
fclose($arquivo);

$arq = fopen("escrevi.txt", "r");

while(!feof($arq)){
    $str = fgets($arq);
    echo $str;
    echo "<br>";
}
fclose($arq);
?>