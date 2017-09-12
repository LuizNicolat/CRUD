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
    }

?>