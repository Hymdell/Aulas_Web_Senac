<?php
include 'conecta.php';
session_start();

$alterar = new Conecta();

$validar = $alterar->alterar($_POST['codigo'],$_POST['nome'],$_POST['marca']);

if($validar === true){
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/");
}else{
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/altera_ferr.php");
}