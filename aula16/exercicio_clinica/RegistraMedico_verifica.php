<?php
include 'conexao.php';
$conexao = new Conexao();
$verifica = $conexao->RegistraMedico($_POST['crm'],$_POST['nome']);
if($verifica == true){
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/");
}else{
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/RegistraMedico");
}