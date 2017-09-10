<?php
include('functions.php');

$id = $_POST['id'];

user = new usersUsuario();
echo user->deletar($id);

?>