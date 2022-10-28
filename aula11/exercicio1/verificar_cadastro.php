<?php
session_start();

$servername = "localhost";
$database = "exercicioa11";
$username = "root";
$password = "root";
$con = mysqli_connect($servername,$username,$password,$database);

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = "Usuário";

$sql = "INSERT INTO usuarios (usuario, email, senha, cargo) VALUES ('$usuario', '$email', '$senha','$cargo')";

if($con->query($sql) == TRUE && $usuario != null && $email != null && $senha != null){
    $_SESSION['logado'] = true;
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/menu_usuario.php");
}else{
    $_SESSION['aviso_cadastro'] = true;
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/cadastro.php");
} 

?>