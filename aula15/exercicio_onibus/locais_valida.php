<?php
session_start();
include 'conexao.php';
$_SESSION['assento'] = $_POST['assento'];
$_SESSION['classe'] = $_POST['classe'];

if($_POST['disponivel'] == "Não"){
    header("Location: http://localhost/Aulas/aula15/exercicio_onibus/locais.php");
}else{
    $assento = new Conexao();
    $valida = $assento->escolha_assento($_POST['assento']);
    
    if($valida == true){
        header("Location: http://localhost/Aulas/aula15/exercicio_onibus/compra.php");
    }else{
        header("Location: http://localhost/Aulas/aula15/exercicio_onibus/locais.php");
    }
}
