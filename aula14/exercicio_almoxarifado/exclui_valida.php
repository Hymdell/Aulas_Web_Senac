<?php
include 'conecta.php';
session_start();

$excluir = new Conecta();

$validar = $excluir->excluir($_POST['codigo'],$_POST['nome'],$_POST['marca']);

if($validar === true){
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/");
}else{
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/exclui_ferr.php");
}