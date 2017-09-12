<?php
include('functions.php');

$login = $_POST['login'];

$user = new usersUsuario();
echo $user->deletar($login);
//echo $login;

?>