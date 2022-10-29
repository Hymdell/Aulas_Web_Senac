<?php
session_start();

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
        <td><strong>Cargo</strong></td>
        <td><strong>Editar</strong></td>
        <td><strong>Excluir</strong></td>
    </tr>
    <?php
    $result = $con->query("SELECT `idusuarios`,`usuario`,`email`,`cargo` FROM `usuarios`");
    while($aux_query = $result->fetch_assoc()){
        echo "<tr>";
        echo " <td>" . $aux_query['idusuarios'] . "</td>";
        echo " <td>" . $aux_query['usuario'] . "</td>";
        echo " <td>" . $aux_query['email'] . "</td>";
        echo " <td>" . $aux_query['cargo'] . "</td>";
        echo '<td><form action="editar_usuario.php" method="post"><input type="submit" value="Editar"><input type="hidden" name="id" value="'.$aux_query['idusuarios'].'"></form></td>';
        echo '<td><form action="excluir_usuario.php" method="post"><input type="submit" value="Excluir"><input type="hidden" name="id" value="'.$aux_query['idusuarios'].'"></form></td>';
        echo "</tr>";
    }
    mysqli_close($con);
    ?>
</table><br>
<form action="cadastro_admin.php">
    <input type="submit" value="Cadastrar Usuário">
</form><br>
<form action="index.php">
    <input type="submit" value="Deslogar">
</form>
</body>
</html>