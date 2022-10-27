<?php
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['senha'] = $_POST['senha'];

if($_SESSION['usuario'] == "Admin" && $_SESSION['senha'] == "admin"){
    echo "Valor 1";
}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}