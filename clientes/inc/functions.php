<?php include('../../config.php'); ?>

<?php
    class cliente {

        function deletar($id){
            
            $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $querydeleta = "delete FROM clientes WHERE id = '$id'";
            
            $ok = mysqli_query($conexao, $querydeleta); //true ou false
            if($ok){
                return 1;
            } else {
                return 0;
            }            
            
        }
        
        function cadastrar(
            $nome, 
            $sobrenome, 
            $FJ, 
            $CGCCNPJ, 
            $RGIE, 
            $DTNASC, 
            $CEP, 
            $Rua,
            $bairro,
            $Localidade,
            $UF,
            $numero,
            $fone1,
            $fone2
        ){        
        
		$usuario 	= $user;
		$senhacripto= md5($senha);//encripta com MD5
		//verificando se ja existe
        $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $queryexiste = "SELECT CPF_CGC FROM clientes WHERE login = '".$CGCCNPJ."'";
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