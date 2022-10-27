<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="cidade">Cidade:</label><br>
        <input type="text" name="cidade"><br>
        <label for="estados">Estado:</label><br>
        <select name="estados">
            <?php
            $estados = array(
                array("AC"=>1,"Acre"),
                array("AL"=>2,"Alagoas"),
                array("AP"=>3,"Amapá"),
                array("AM"=>4,"Amazonas"),
                array("BA"=>5,"Bahia"),
                array("CE"=>6,"Ceara"),
                array("DF"=>7,"Distrito Federal"),
                array("ES"=>8,"Espírito Santo"),
                array("GO"=>9,"Goiás"),
                array("MA"=>10,"Maranhão"),
                array("MT"=>11,"Mato Grosso"),
                array("MS"=>12,"Mato Grosso do Sul"),
                array("MG"=>13,"Minas Gerais"),
                array("PA"=>14,"Pará"),
                array("PB"=>15,"Paraíba"),
                array("PR"=>16,"Paraná"),
                array("PE"=>17,"Pernambuco"),
                array("PI"=>18,"Piauí"),
                array("RJ"=>19,"Rio de Janeiro"),
                array("RN"=>20,"Rio Grande do Norte"),
                array("RS"=>21,"Rio Grande do Sul"),
                array("RO"=>22,"Rondônia"),
                array("RR"=>23,"Roraima"),
                array("SC"=>24,"Santa Catarina"),
                array("SP"=>25,"São Paulo"),
                array("SE"=>26,"Sergipe"),
                array("TO"=>27,"Tocatins"),
            );
            for($i=0;$i<26;$i++){
                echo '<option value="'.$estados[$i][0].'">'.$estados[$i][0].'</option>';
            }
            ?>
        </select>
        <br><br><input type="submit" value="Enviar">
    </form>
</body>
</html>