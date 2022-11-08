<?php
if(!$_SESSION['usuario']) {
	session_destroy();
	header('Location: index.php');
	exit();
}