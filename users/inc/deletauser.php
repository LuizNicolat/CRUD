<?php
include('functions.php');

$login = isset($_POST['login']);

$user = new usersUsuario();
//echo $user->deletar($login);
echo $login;

?>