<?php

$servername = "localhost";
$database = "cliente";
$username = "root";
$password = "root";

$con = mysqli_connect($servername,$username,$password,$database);

if(empty($con)){
    die("Conexão falhou :( : " . mysqli_connect_error());
}

echo "Conexão bem sucedida :) <br><br>";

$nome="Cris";
$sobrenome="Machado";
$email="cris@gmail.com";

$sql="INSERT INTO pessoa (nome, sobrenome, email) VALUES ('$nome','$sobrenome','$email')";

if(mysqli_query($con,$sql)){
    echo "Novo dado salvo com sucesso";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>