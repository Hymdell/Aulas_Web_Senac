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

$id = $_POST['id'];

$result = $con->query("SELECT `usuario`,`email`,`senha`,`cargo` FROM usuarios WHERE idusuarios='$id'");
$aux_query = $result->fetch_assoc();
$con->close();

$usuario = $aux_query['usuario'];
$email = $aux_query['email'];
$senha = $aux_query['senha'];
$cargo = $aux_query['cargo'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <center>
        <form action="verifica_edicao.php" method="post">
            <label for="usuario">Usuário:</label><br>
            <?php echo '<input type="text" name="usuario" value="'.$usuario.'"><br>'?>
            <label for="email">Email:</label><br>
            <?php echo '<input type="email" name="email" value="'.$email.'"><br>'?>
            <label for="senha">Senha:</label><br>
            <?php echo '<input type="text" name="senha" value="'.$senha.'"><br>'?>
            <label for="cargo">Cargo:</label><br>
            <?php echo '<input type="text" name="cargo" value="'.$cargo.'"><br>'?>
            <?php echo '<input type="hidden" name="id" value="'.$id.'"><br>'?>
            <input type="submit" name="submit" value="Editar">
        </form>
    </center>
</body>
</html>