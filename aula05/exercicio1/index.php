<?php
$agora = date('d-m-y');
echo "Data de hoje: $agora.<br><br>";

$estoque = array (
    array(1,'Filme daora',2002,50),
    array(2,'Filme daora2',2012,25),
    array(3,'Filme daora3',2000,20),
    array(4,'Filme daora4',2022,15),
    array(5,'Lete','500ml',12,2022,10,false),
    array(6,'Letche','250ml',10,2022,12,false),
    array(7,'Leitin','300ml',7,2022,5,false),
    array(8,'Letin','500ml',2,2002,10,false),
    array(9,'Lete','500ml',7,2015,3,false),
    array(10,'Leite','500ml',11,2022,13,false),
);

for($i=4;$i<10;$i++){
    if($estoque[$i][3] < 10 && $estoque[$i][4] <= 2022){
            $estoque[$i][6] = true;
    }
}

echo "DVDS<br>";

for($i=0;$i<4;$i++){
    echo "Código do produto: " . $estoque[$i][0] . " | Nome do filme: " . $estoque[$i][1] . " | Ano de lançamento: " . $estoque[$i][2] . " | Valor : R\$" . $estoque[$i][3] . "<br>";
}

echo "<br>LEITES<br>";

for($i=4;$i<10;$i++){
    if($estoque[$i][6] == false){
        echo "Código do produto: " . $estoque[$i][0] . " | Marca do Leite: " . $estoque[$i][1] . " | Quantidade(ml): " . $estoque[$i][2] . " | Data de Validade : " . $estoque[$i][3] . "/". $estoque[$i][4] . " | Valor: R\$". $estoque[$i][5] . " | Está dentro da validade? Sim<br>";
    }else{
        echo "Código do produto: " . $estoque[$i][0] . " | Marca do Leite: " . $estoque[$i][1] . " | Quantidade(ml): " . $estoque[$i][2] . " | Data de Validade : " . $estoque[$i][3] . "/". $estoque[$i][4] . " | Valor: R\$". $estoque[$i][5] . " | Está dentro da validade? Não<br>";
    }
}

$valor_total_estoque = 0;
for($i=0;$i<10;$i++){
    if($i<4){
        $valor_total_estoque += $estoque[$i][3];
    }else{
        $valor_total_estoque += $estoque[$i][5];
    }
}   


echo "<br>Valor total dos produtos: R\$$valor_total_estoque";
