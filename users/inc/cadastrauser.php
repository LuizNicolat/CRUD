<?php
//include('../inc/functions.php');

include('../../config.php');

$login = $_POST['user'];
$senha = $_POST['senha'];

//$user = new usersUsuario();
//echo $user->cadastrar($user,$senha);
//echo $login + $senha;

$senhacripto = md5($senha);//encripta com MD5
		//verificando se ja existe
        $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $queryexiste = "SELECT id FROM usuarios WHERE login = '".$login."'";
		$existe = mysqli_query($conexao, $queryexiste);            
            
		if(mysqli_num_rows($existe) > 0){ // retornou mais que 0 então existe
			echo 2;
		} else { //se não grava no banco
			//gravação no banco, $ok retorna TRUE ou FALSE
			$query = "INSERT INTO usuarios (login, senha) values (".$login.",".$senhacripto.")";            
			$ok = mysqli_query($conexao,$query);
            if($ok){
				echo 1;
			} else {
				echo 'Deu Merda Jão!';
			}
		}

?>