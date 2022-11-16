<?php
include 'conexao.php';
$conexao = new Conexao();
$verifica = $conexao->RegistraPaciente($_POST['nome']);
if($verifica == true){
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/");
}else{
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/RegistraPaciente");
}