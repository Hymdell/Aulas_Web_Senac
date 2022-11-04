<?php
include 'conexao.php';
session_start();

$cadastro = new Conexao();

$validar = $cadastro->cadastro($_POST['usuario'],$_POST['senha'],$_POST['saldo']);

if($validar === true){
    header("Location: http://localhost/aulas/aula13/exercicio_banco/menu.php");
}else{
    header("Location: http://localhost/aulas/aula13/exercicio_banco/cadastro.php");
}