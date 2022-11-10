<?php
session_start();
include 'conexao.php';

$cidades = new Conexao();
$_SESSION['cidades'] = $cidades->PegarCidades();

header("Location: http://localhost/Aulas/aula15/exercicio_aeroporto/voos.php");