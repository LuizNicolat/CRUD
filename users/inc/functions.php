<?php
    class usersUsuario {

        function deletar($id){
            
            $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $queryexiste = "delete FROM usuarios WHERE login = '$id'";
            
            $ok = mysqli_query($conexao, $queryexiste); //true ou false
            if($ok){
                return 1;
            } else {
                return 0;
            }
        }
    }

?>