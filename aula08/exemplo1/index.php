<?php
$value="Estudante";

setcookie("Ocupacao",$value);

setcookie("Ocupacao",$value,time()+3600);

if(isset($_COOKIE['Ocupacao']) && $_COOKIE['Ocupacao'] == "Estudante"){
    echo "Enviar Spam";
}else{
    echo "Efetuar Desconto";
}
?>