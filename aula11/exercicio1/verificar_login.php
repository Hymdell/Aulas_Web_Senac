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

$email = $_POST['email'];
$senha = $_POST['senha'];

$result = $con->query("SELECT `email`,`senha`,`cargo` FROM `usuarios` WHERE email='$email' AND senha='$senha'");
$aux_query = $result->fetch_assoc();

if($email == null OR $senha == null){
    header("Location: http://localhost/aulas/aula11/exercicio1/index.php");
}

if($aux_query['email'] == $email && $aux_query['senha'] == $senha && $aux_query['cargo'] == 'Admin' && $_SESSION['logado'] == false){
    $_SESSION['logado'] = true;
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/menu_admin.php");
}else if($aux_query['email'] == $email && $aux_query['senha'] == $senha && $aux_query['cargo'] == 'Usuário' && $_SESSION['logado'] == false){
    $_SESSION['logado'] = true;
    $con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/menu_usuario.php");
}else{
    con->close();
    header("Location: http://localhost/aulas/aula11/exercicio1/index.php");
}
?>
