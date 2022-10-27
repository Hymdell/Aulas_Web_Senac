<?php

$servername = "localhost";
$database = "exercicioa11";
$username = "root";
$password = "root";

$con = mysqli_connect($servername,$username,$password,$database);

if(empty($con)){
    die("Conexão falhou :( : " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<table width="400px" border=1 cellspacing="0">
    <tr>
        <td><strong>idUsuario</strong></td>
        <td><strong>Usuario</strong></td>
        <td><strong>Email</strong></td>
    </tr>
    <?php
    $result = $con->query("SELECT `idusuarios`,`usuario`,`email` FROM `usuarios`");
    while($aux_query = $result->fetch_assoc()){
        echo "<tr>";
        echo " <td>" . $aux_query['idusuarios'] . "</td>";
        echo " <td>" . $aux_query['usuario'] . "</td>";
        echo " <td>" . $aux_query['email'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($con);
    ?>
</table>
</body>
</html>