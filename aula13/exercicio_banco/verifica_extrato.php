<?php
include 'conexao.php';
session_start();

$extrato = new Conexao();
$acoes = $extrato->extrato($_POST['id']);
$_SESSION['extrato'] = $acoes;

header("Location:http://localhost/aulas/aula13/exercicio_banco/extrato.php");