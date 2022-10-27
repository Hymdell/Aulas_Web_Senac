<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <p>
        <?php
        $teste = "Teste";
        $produtos[0] = "Pneu";
        $produtos[1] = "Oleo";
        $produtos[2] = "Luva";
        echo $teste ."<br>". $produtos[0] .  " " . $produtos[1] .  " " . $produtos[2];
        ?>
    </p>

    <p>
        <?php
        $produtos = array("Pneu","Oleo","Luvas");
        echo $produtos[1];
        ?>
    </p>

    <p>
        <?php
        $produtos[] = "Pneu";
        $produtos[1] = "Oleo";
        $produtos[] = "Luvas";
        echo $produtos[0] . " " . $produtos[1] . " " . $produtos[2];
        ?>
    </p>

    <p>
        <?php
        $precos = array("Pneu"=>100,"Oleo"=>10,"Luvas"=>4);
        $precos["Capo"] = 300;
        echo $precos["Oleo"] . " " . $precos["Capo"];
        ?>
    </p>

    <p>
        <?php
        $produtos = array("Pneu","Oleo","Luvas");
        $precos = array ("Pneu"=>100,"Oleo"=>10,"Luva"=>41);
        sort($produtos);
        asort($precos);
        ksort($precos);
        ?>
    </p>

    <p>
        <?php
        $a = "Gambiarra";
        $$a = "isso é seboso";
        $$$a = "Deu ruim";
        $$$$a = "Não pode ser";
        echo $$$$a;
        ?>
    </p>

    <p>
        <?php
        $foo = "123"; //$foo é uma string
        $bar = (int) $foo; //$bar é um inteiro
        ?>
    </p>

    <p>
        <?php
        $dez = 10;
        $str_dez = "10";
        $dez_e_meio = 10.5;
        $dez_e_meio_conv = (int) $dez_e_meio;
        if($dez_e_meio_conv === $dez){
            echo('$dez_e_meio_conv e $dez são idênticos.<br>');
        }
        $str1 = "$dez";
        $str2 = (string) $dez;
        if($str1 === $str2){
            echo('$str1 e $str2 são idênticos,<br>');
        }
        if($dez == $str1){
            echo('$str1 e $dez são equivalentes.<br>');
        }
        ?>
    </p>
</body>
</html>