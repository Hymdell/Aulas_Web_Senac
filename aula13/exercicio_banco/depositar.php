<?php
include 'conexao.php';
session_start();

if($_POST['depositar'] <= 0){
    header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
}else{
    $deposito= new Conexao();
    $deposito->depositar($_POST['id'],$_POST['depositar']);
    $_SESSION['saldo'] +=  $_SESSION['valor'];
    if($deposito === true){
        header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
    }else{
        header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
    }
}