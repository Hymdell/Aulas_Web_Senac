<?php
include 'conexao.php';
session_start();

if($_POST['sacar'] <0 || ($_SESSION['saldo'] - $_POST['sacar']) <0){
    header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
}else{
    $sacar= new Conexao();
    $sacar->sacar($_POST['id'],$_POST['sacar']);
    $_SESSION['saldo'] -=  $_SESSION['valor'];
    if($sacar === true){
        header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
    }else{
        header("Location:http://localhost/aulas/aula13/exercicio_banco/menu.php");
    }
}