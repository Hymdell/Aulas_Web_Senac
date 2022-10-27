<?php
$arquivo = fopen("saida.txt","w");
fputs($arquivo, "ae vei\r\n");
fputs($arquivo, "bla bla\r\n");
fclose($arquivo);
?>