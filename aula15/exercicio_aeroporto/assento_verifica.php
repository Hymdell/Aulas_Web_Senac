<?php
session_start();
$conexao = new Conexao();
$conexao->RegistraVoo($_SESSION['Origem'],$_SESSION['Destino'],$_SESSION['Conexoes']);
header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/compra_finalizada.php");