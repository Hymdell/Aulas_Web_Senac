<?php
$nomes = array("1"=>"Carlos","2"=>"João","3"=>"Sergio","4"=>"Plinio","5"=>"Pablo");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name='check[]' value="Carlos"><?php echo $nomes[1];?><br>
        <input type="checkbox" name='check[]' value="João"><?php echo $nomes[2];?><br>
        <input type="checkbox" name='check[]' value="Sergio"><?php echo $nomes[3];?><br>
        <input type="checkbox" name='check[]' value="Plinio"><?php echo $nomes[4];?><br>
        <input type="checkbox" name='check[]' value="Pablo"><?php echo $nomes[5];?><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['check'])) {
                foreach($_POST['check'] as $nome){
                    echo "<br> Nome: : ".$nome.'<br/>';
                }
            }else{
                echo "<br>Nenhum nome selecionado";
            }
        }
    ?>
</body>
</html>