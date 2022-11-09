<?php
session_start();
include 'conexao.php';

$classe = new Conexao();

    if($_POST['classe'] == "economica"){
        $_SESSION['classe'] = 1;
        $_SESSION['assentos'] = $classe->assentos($_SESSION['classe']);
        header("Location: http://localhost/Aulas/aula15/exercicio_onibus/locais.php");
    }else if($_POST['classe'] == "executiva"){
        $_SESSION['classe'] = 2;
        $_SESSION['assentos'] = $classe->assentos($_SESSION['classe']);
        header("Location: http://localhost/Aulas/aula15/exercicio_onibus/locais.php");
    }