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
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];

$sql = "UPDATE `usuarios` SET `usuario`='$usuario',`email`='$email',`senha`='$senha',`cargo`='$cargo' WHERE `idusuarios`='$id'";

if($con->query($sql) == TRUE){
    $con->close();
    header("Location:http://localhost/aulas/aula11/exercicio1/menu_admin.php");
}else{
    $con->close();
    header("Location:http://localhost/aulas/aula11/exercicio1/menu_admin.php");
}