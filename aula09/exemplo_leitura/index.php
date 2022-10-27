<?php

$arq = fopen("teste.txt", "r");

while(!feof($arq)){
    $str = fgets($arq);
    echo $str;
    echo "<br>";
}
fclose($arq);
?>