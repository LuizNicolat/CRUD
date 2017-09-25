<?php include('../../config.php'); ?>

<?php
    class usersUsuario {

        function deletar($login){
            
            $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $querydeleta = "delete FROM usuarios WHERE login = '$login'";
            
            $ok = mysqli_query($conexao, $querydeleta); //true ou false
            if($ok){
                return 1;
            } else {
                return 0;
            }            
            
        }
        
        function cadastrar($user, $senha){        
        
		$usuario 	= $user;
		$senhacripto= md5($senha);//encripta com MD5
		//verificando se ja existe
        $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $queryexiste = "SELECT id FROM usuarios WHERE login = '".$usuario."'";
		$existe = mysqli_query($conexao, $queryexiste);

		if(mysqli_num_rows($existe) > 0){ // retornou mais que 0 então existe
			return 2;
		} else { //se não grava no banco
			//gravação no banco, $ok retorna TRUE ou FALSE
			$query = "INSERT INTO usuarios (login, senha) values ('$usuario','$senhacripto')";            
			$ok = mysqli_query($conexao,$query);
            if($ok){
				return 1;
			} else {
				return 0;
			}
		}
	}
    }

?>