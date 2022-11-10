<?php
session_start();
include 'conexao.php';
$conexao = new Conexao();
$bolConexao;
$cidades=$conexao->PegarCidades();
$_SESSION['Origem'] = $_POST['Origem'];
$_SESSION['Destino'] = $_POST['Destino'];

if($_POST['Origem'] == $_POST['Destino']){
    header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/voos.php");
}else{
    $localidade = $conexao->VerificaConexoes($_POST['Origem'],$_POST['Destino']);

    if($localidade[0] == "Nacional" && $localidade[1] == "Internacional" || $localidade[0] == "Internacional" && $localidade[1] == "Nacional"){
        $bolConexao = true;
    }elseif($localidade[0] == "Nacional" && $localidade[1] == "Nacional"){
        $bolConexao = false;
    }elseif($localidade[0] == "Internacional" && $localidade[2] == "Internacional"){
        $bolConexao = true;
    }
    $tipoVoo = new Conexao();
    $_SESSION['Conexoes'] = array();
    if($bolConexao == true){
        $tamanho_aviao = rand(1,3);
        switch ($tamanho_aviao) {

            case 1:
                $num_conexoes = rand(1,3);
                shuffle($cidades);
                for($i=0;$i<$num_conexoes;$i++){
                    $_SESSION['Conexoes'] = $cidades[$i];
                }
                $_SESSION['assentos']=$tipoVoo->VooPequeno();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            case 2:
                $num_conexoes = rand(1,3);
                shuffle($cidades);
                for($i=0;$i<$num_conexoes;$i++){
                    $_SESSION['Conexoes'] = $cidades[$i];
                }
                $_SESSION['assentos']=$tipoVoo->VooMedio();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            case 3:
                $num_conexoes = rand(1,3);
                shuffle($cidades);
                for($i=0;$i<$num_conexoes;$i++){
                    $_SESSION['Conexoes'] = $cidades[$i];
                }
                $_SESSION['assentos']=$tipoVoo->VooGrande();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            default:
                break;
        }
    }else{
        $tamanho_aviao = rand(1,3);
        switch ($tamanho_aviao) {
            case 1:
                $_SESSION['assentos']=$tipoVoo->VooPequeno();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            case 2:
                $_SESSION['assentos']=$tipoVoo->VooMedio();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            case 3:
                $_SESSION['assentos']=$tipoVoo->VooGrande();
                header("Location:http://localhost/Aulas/aula15/exercicio_aeroporto/escolha_assentos.php");
                break;
            default:
                break;
        }
    }
}
