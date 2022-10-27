<?php
session_start();

echo "Esta é a página 01, onde a sessão será criada";

$_SESSION['aula'] = 'PHP';
$_SESSION['hora'] = time();

echo '<br/><a href="pagina2.php">Clique para ir à página 02</a>';
?>