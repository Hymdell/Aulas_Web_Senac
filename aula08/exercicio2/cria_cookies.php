<?php
session_start();

$_SESSION['nome'] = $_GET['nome'];
$_SESSION['cidade'] = $_GET['cidade'];

header("Location: http://localhost/aulas/aula08/exercicio2/mensagem.php");
?>