<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>

    <p>Hello World!
        <?php $name="Ines";?>
    </p>

    <p>Hello World again!
        <?php echo $name;?>
    </p>

    <p>
        <?php $sub_string = substr(1234,2,2);
        print ("sub_string é = $sub_string");
        ?>
    </p>

    <p>
        <?php
        $pri_doble = 15.789;
        $seg_doble = 0.456;
        $ter_doble = 5.0;
        $resultado = $ter_doble + 3;
        echo $resultado;
        ?>
    </p>

    <p>
        <?php
        $valor_1 = 2.88888;
        $valor_2 = 2.21112;
        $resultado = $valor_1 + $valor_2;
        print($valor_1 + $valor_2 = $resultado);
        ?>
    </p>

    <p>
        <?php
        $num = 0;
        if($num ==0){
            $num = 10;
        }else{
            $num = 20;
        }
        print("Numero = $num");
        ?>
    </p>

    <p>
        <?php
        $foo = "5bar" ;//String
        $bar = true; //booleano
        echo "| primeiro foo = $foo\n| ";
        echo "primeiro bar = $bar\n| ";
        settype($foo, "integer"); //$foo é agora 5 (integer)
        settype($bar, "string"); //$bar é agora "1" (string)
        echo "segundo foo = $foo\n| ";
        echo "segundo bar = $bar |";
        ?>
    </p>

    <p>
        <?php
        $count_dog = "101 dalmatas";
        settype($count_dog,"double");
        echo "| $count_dog | ";
        settype($count_dog,"string");
        echo "$count_dog | ";
        settype($count_dog,"int");
        echo "$count_dog | ";
        ?>
    </p>

    <p>
        <?php
        //Exercicio 1
        $valor_1 = 7;
        $valor_2 = 19;
        $resultado = $valor_1 + $valor_2;
        echo "Exercicio 1,Resultado = $resultado";
        ?>
    </p>

    <p>
        <?php
        //Exercicio 2
        $nota_1 = 5;
        $nota_2 = 3;
        $nota_3 = 4;
        $media = $nota_1+$nota_2+$nota_3/3;
        echo "Exercicio 2,Média = $media";
        ?>
    </p>
</body>
</html>