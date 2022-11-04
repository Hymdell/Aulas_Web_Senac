<?php
include 'conexao.php';
session_start();

$excluir= new Conexao();
$verifica = $excluir->excluir($_POST['id'],$_POST['usuario'],$_POST['senha']);

if($verifica === true){
    header("Location:http://localhost/aulas/aula13/exercicio_banco/index.php");
}else{
    header("Location:http://localhost/aulas/aula13/exercicio_banco/index.php");
}