<?php
session_start();
include 'conexao.php';

$voos = new Conexao();
$_SESSION['voos'] = $voos->ListaVoos();

header("Location: http://localhost/Aulas/aula15/exercicio_aeroporto/painel.php");