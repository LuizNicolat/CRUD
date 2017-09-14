<?php
include('../inc/functions.php');

$login = $_POST['user'];
$senha = $_POST['senha'];

$user = new usersUsuario();
echo $user->cadastrar($user,$senha);
//echo $login + $senha;

?>