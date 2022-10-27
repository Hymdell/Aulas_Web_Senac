<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <?php
    $func = 'foo';
    $func();

    $func = 'bar';
    $func('test');

    function foo(){
        echo "Chamou foo()<br>\n";
    }
    function bar($arg = ''){
        echo "Chamou bar(); com argumento '$arg'.<br/>\n";
    }
    ?>
    <?php
    include("util.php");
    $str = char2String('1');
    echo $str;
    ?>
    <br>
    <?php
    $senhaValida = 1234;
    if($senhaValida > 0){
        require("SenhaInvalida.html");
    }
    ?>
    <br>
    <?php
        echo "A $color $fruit<br>";
        include 'vars.php';
        echo "A $color $fruit<br>";
    ?>
    <?php
    $ipadress = $_SERVER['REMOTE_ADDR'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    echo $ipadress . '<br>';
    echo $useragent . '<br>';
    echo $lang . '<br>';
    ?>
</body>
</html>