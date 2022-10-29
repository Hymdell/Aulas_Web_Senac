<?php
$servername = "localhost";
$database = "exercicioa11";
$username = "root";
$password = "root";
$con = mysqli_connect($servername,$username,$password,$database);

$id = $_POST['id'];

if(empty($con)){
    die("Conexão falhou :( : " . mysqli_connect_error());
}

$sql = "DELETE FROM `usuarios` WHERE `idusuarios`='$id'";

if ($con->query($sql) === TRUE) {
    $con->close();
  header("Location:http://localhost/aulas/aula11/exercicio1/menu_admin.php");
} else {
    $con->close();
  header("Location:http://localhost/aulas/aula11/exercicio1/menu_admin.php");
}
?>