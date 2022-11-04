<?php
include 'conexao.php';
session_start();

$login = new Conexao();
$verifica = $login->login($_POST['usuario'],$_POST['senha']);

if($verifica === true){
    header("Location: http://localhost/aulas/aula13/exercicio_banco/menu.php");
}else{
    header("Location: http://localhost/aulas/aula13/exercicio_banco/index.php");
}