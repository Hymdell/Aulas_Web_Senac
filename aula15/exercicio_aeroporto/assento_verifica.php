<?php
session_start();
include 'conexao.php';
$_SESSION['Assento'] = $_POST['assento'];
if(!empty($_SESSION['Conexoes'])){
    $conexoes = implode(",",$_SESSION['Conexoes']);
}
$conexao = new Conexao();
$conexao->RegistraVoo($_SESSION['Origem'],$_SESSION['Destino'],$conexoes);
header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/compra_finalizada.php");