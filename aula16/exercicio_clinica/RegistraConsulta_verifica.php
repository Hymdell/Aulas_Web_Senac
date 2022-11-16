<?php
include 'conexao.php';
$conexao = new Conexao();
$verifica = $conexao->RegistraConsulta($_POST['idPaciente'],$_POST['crm'],$_POST['nomePaciente'],$_POST['nomeMedico'],$_POST['motivo'],$_POST['data']);
if($verifica == true){
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/");
}else{
    header("Location:http://localhost/Aulas/aula16/exercicio_clinica/RegistraConsulta");
}