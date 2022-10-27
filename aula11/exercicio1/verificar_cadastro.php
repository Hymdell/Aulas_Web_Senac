<?php
$servername = "localhost";
$database = "exercicioa11";
$username = "root";
$password = "root";
$con = mysqli_connect($servername,$username,$password,$database);

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

if($con->query($sql) === TRUE){
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/index.php");
}else{
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/cadastro.php");
}

?>