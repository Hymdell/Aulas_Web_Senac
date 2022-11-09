<?php
include 'conexao.php';

$reseta = new Conexao();
$reseta->resetar();

header("Location: http://localhost/Aulas/aula15/exercicio_onibus/");