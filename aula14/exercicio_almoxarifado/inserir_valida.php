<?php
include 'conecta.php';
session_start();

$inserir = new Conecta();

$validar = $inserir->inserir($_POST['nome'],$_POST['marca']);

if($validar === true){
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/");
}else{
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/inserir_ferr.php");
}