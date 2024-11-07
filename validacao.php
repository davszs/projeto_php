<?php 

session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];

if ($_SESSION['login'] == "admin" && $_SESSION['senha'] == "1234"){
	$_SESSION['nome'] == "administrador";
	header(")
	}

echo $_SESSION['login'];
 ?>
