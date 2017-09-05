<?php

class Usuario{
	var $id		= "";
	var $usuario= "";
	var $senha	= "";

//	function primeiroNome($nome){
//		$nome_mostra = explode(" ",$nome);
//		return $nome_mostra[0]; //primeiro nome
//	}

	static function Login($dados){
		$usuario 	= $dados['user'];
		$senha	= $dados['senha'];//encripta com MD5
		//verificando se ja existe
        $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
		$existe = mysqli_query($conexao,$query);
		if(mysqli_num_rows($existe) == 1){ // retornou 1 então existe
			//capturando os dados da consulta
			$cliente = mysqli_fetch_object($existe);
			//setar sessions para controle
			$_SESSION['logado'] = 1;
			header('location:logado/'); //redireciona
			exit();//encerra a leitura do codigo
		} else {
            echo $query;
			echo 'A combinação de usuario e senha não existe';
		}
	}


	function cadastraUsuario($dados){
		$usuario 	= $dados['user'];
		$senha	= md5($dados['senha']);//encripta com MD5
		//verificando se ja existe
		$existe = mysqli_query("SELECT id FROM usuarios WHERE login = '$usuario'");

		if(mysqli_num_rows($existe) > 0){ // retornou mais que 0 então existe
			echo "Usuário já existe!";
		} else { //se não grava no banco
			//gravação no banco, $ok retorna TRUE ou FALSE
			$query = "INSERT INTO usuarios (login, senha) values ('$usuario','$senha')";
            $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$ok = mysqli_query($conexao,$query);
            if($ok){
				echo "Cadstrado com sucesso!";
			} else {
				echo "Erro ao Cadastrar!";
			}
		}
	}

	function consultaUsuario($id=""){
		//se veio ID, então consulta especifico:*= tudo
		//ou pede os campos que deseja: id, nome, email WHERE = aonde
		//igual: =, diferente: <>, <=, >=
		if($id != ""){
			$result = mysqli_query("SELECT * FROM usuarios WHERE id = '$id'");
		} else { //consulta geral 
			$result = mysqli_query("SELECT id,nome,email FROM usuarios ORDER BY nome ASC"); //ASC ou DESC
		}
		//saida nos dados para fora da function:
		return $result;
		//$listagem = Usuario::consultaUsuario($cod_usuario);
	}

	function deletaUsuario($id){
		$ok = mysqli_query("DELETE FROM usuarios WHERE id = '$id'"); //true ou false
		if($ok){
			return 1;
		} else {
			return 0;
		}
	}

} //final da classe

?>