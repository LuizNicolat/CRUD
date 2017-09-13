<?php
include('../../inc/functions.php');

$user = $_POST['user'];
$senha = $_POST['senha'];

$user = new Usuario();
echo $user->cadastraUsuario($user,$senha);
//echo $login;

?>