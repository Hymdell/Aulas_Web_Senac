<?php
session_start();
$conexao = new Conexao();
if($_POST['Origem'] == $_POST['Destino']){
    header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/voos.php");
}else{
    $verifica = $conexao->
}
