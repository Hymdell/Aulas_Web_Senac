<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <?php
        $num = -12;
        $valor = "Igual a Zero";
        if($num === 0){
            $valor = "Igual a Zero";
            echo $valor;
        }else if($num >= 1){
            $valor = "Valor Positivo";
            echo $valor;
        }else if($num < 0){
            $valor = "Valor Negativo";
            echo $valor;
        }
    ?>
    <br>

    <h1>Exercicio 2</h1>
    <?php
    $num = 7;
    for($i = 0;$i<=10;$i++){
        $resultado = $num * $i;
        echo "$num X $i é: $resultado <br>";
    }
    ?>
    <br>

    <h1>Exercicio 3</h1>
    <?php
    $num = 5;
    $resultado = $num;
    for($i=$num-1;$i>=1;$i--){
        $resultado *= $i;
    }
    echo "Cálculo Fatorial de $num é: $resultado";
    ?>
    <br>

    <h1>Exercicio 4</h1>
    <?php
    $num = 0;
    if($num > 12 || $num < 1){
        echo "Não existe mês com esse número";
    }else if($num == 1){
        echo "Janeiro";
    }
    else if($num == 2){
        echo "Fevereiro";
    }
    else if($num == 3){
        echo "Março";
    }
    else if($num == 4){
        echo "Abril";
    }
    else if($num == 5){
        echo "Maio";
    }
    else if($num == 6){
        echo "Junnho";
    }
    else if($num == 7){
        echo "Julho";
    }
    else if($num == 8){
        echo "Agosto";
    }
    else if($num == 9){
        echo "Setembro";
    }
    else if($num == 10){
        echo "Outubro";
    }
    else if($num == 11){
        echo "Novembro";
    }
    else if($num == 12){
        echo "Dezembro";
    }
    ?>
    <br>
    
    <h1>Exercicio 5</h1>
    <?php
    $ganho_por_hora = 25;
    $horas_trabalhadas_mes = 220;
    $salario_bruto = $ganho_por_hora * $horas_trabalhadas_mes;
    $imposto_renda = $salario_bruto * 11 / 100;
    $inss = $salario_bruto  * 8 / 100;
    $sindicato = $salario_bruto * 5 / 100;
    $salario_liquido = $salario_bruto - ($imposto_renda + $inss + $sindicato);

    echo "Salário bruto = R\$$salario_bruto <br>";
    echo "Valor pago ao Imposto de Renda = R\$$imposto_renda <br>";
    echo "Valor pago ao INSS = R\$$inss <br>";
    echo "Valor pago ao Sindicato = R\$$sindicato <br>";
    echo "Salário Líquido = R\$$salario_liquido";
    ?>
</body>
</html>