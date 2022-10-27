<?php
$servername = "localhost";
$database = "exercicioa11";
$username = "root";
$password = "root";
$con = mysqli_connect($servername,$username,$password,$database);

if(empty($con)){
    die("Conexão falhou :( : " . mysqli_connect_error());
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$result = $con->query("SELECT `email`,`senha` FROM `usuarios` WHERE email='$email' AND senha='$senha'");
$aux_query = $result->fetch_assoc();

if($aux_query['email'] == $email && $aux_query['senha'] == $senha){
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/menu.php");
}else{
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/index.php");
}
?>
