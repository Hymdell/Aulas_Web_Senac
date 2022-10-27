<?php
//Exercicio 1
$metros_quadrados = 100;
$litros = $metros_quadrados/6;
$latas = $litros/18;
$preco_lata = 80;

echo "Para pintar uma área de $metros_quadrados m²<br>";
$quantidade_latas = ceil($litros / 18);
$custo_latas = $quantidade_latas * $preco_lata;
echo "Com somente latas de 18L será necessário comprar $quantidade_latas Latas que irão custar R\$$custo_latas<br><br>";
?>

<?php
//Exercicio 2
$metros_quadrados = 200;
$litros = $metros_quadrados/6;
$latas = $litros/18;
$galoes = $litros/3.6;
$preco_lata = 80;
$preco_galao = 25;

echo "Para pintar uma área de $metros_quadrados m²<br>";
$quantidade_latas = ceil($litros / 18);
$custo_latas = $quantidade_latas * $preco_lata;
echo "Com somente latas de 18L será necessário comprar $quantidade_latas Latas que irão custar R\$$custo_latas<br>";

$quantidade_galoes = ceil($litros/3.6);
$custo_galoes = $quantidade_galoes * $preco_galao;
echo "Com somente Galões de 3.6L será necessário comprar $quantidade_galoes Galões que irão custar R\$$custo_galoes<br>";

$litros_folga = $litros * 1.1;
$quantidade_latas_c = $litros_folga;

$litros_folga_faltando = $litros_folga - ($quantidade_latas * 18);
$quantidade_galoes_c = ceil($litros_folga_faltando/3.6);

$custo_misturado = ($quantidade_latas_c * $preco_lata) + ($quantidade_galoes_c * $preco_galao);
echo "Cliente precisa comprar $quantidade_latas_c Latas e $quantidade_galoes_c Galões que irão custar R\$$custo_misturado";
?>