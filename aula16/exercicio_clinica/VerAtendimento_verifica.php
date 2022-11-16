<?php
include 'conexao.php';
session_start();
$conexao = new Conexao();
$_SESSION['Consultas'] = $conexao->VerConsultas($_POST['crm']);
header("Location:http://localhost/Aulas/aula16/exercicio_clinica/VerAtendimento.php");