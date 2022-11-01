<?php
include 'usuarioSessao.php';
$us = new UsuarioSessao();
$us->construtor("hymdell","cris");
echo $us->get_nome();
?>