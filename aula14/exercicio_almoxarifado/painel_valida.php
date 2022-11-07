<?php
include 'conecta.php';
session_start();

$painel = new Conecta();

$_SESSION['ferramentas'] = $painel->painel();

if(!empty($_SESSION['ferramentas'])){
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/painel.php");
}else{
    header("Location: http://localhost/aulas/aula14/exercicio_almoxarifado/");
}