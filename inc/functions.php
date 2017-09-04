<?php

class Usuario{
	var $id		= "";
	var $usuario= "";
	var $senha	= "";

//	function primeiroNome($nome){
//		$nome_mostra = explode(" ",$nome);
//		return $nome_mostra[0]; //primeiro nome
//	}

	function Login($dados){
		$usuario 	= $dados['user'];
		$senha	= md5($dados['senha']);//encripta com MD5
		//verificando se ja existe
		$existe = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'");
		if(mysqli_num_rows($existe) == 1){ // retornou 1 então existe
			//capturando os dados da consulta
			$cliente = mysqli_fetch_object($existe);
			//setar sessions para controle
			$_SESSION['logado'] = 1;
			header('location:logado/'); //redireciona
			exit();//encerra a leitura do codigo
		} else {
            echo mysqli_query("SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'");
			echo 'A combinação de usuario e senha não existe';
		}
	}


	function cadastraUsuario($dados){
		$nome 	= $dados['nome']; //$_POST['nome']
		$email 	= $dados['email'];
		$senha	= md5($dados['senha']);//encripta com MD5
		//verificando se ja existe
		$existe = mysqli_query("SELECT id FROM usuarios WHERE email = '$email'");

		if(mysqli_num_rows($existe) > 0){ // retornou mais que 0 então existe
			return 2;
		} else { //se não grava no banco
			//gravação no banco, $ok retorna TRUE ou FALSE
			$ok = mysqli_query("INSERT INTO usuarios (nome, email, senha) values ('$nome','$email','$senha')");
			if($ok){
				return 1;
			} else {
				return 0;
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