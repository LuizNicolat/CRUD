<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>

<?php include('../inc/header.php'); ?>

<div class="wrap" style="padding-top:20px">	  
    <?php
            if (isset($_POST['submit'])) {

                $user   = $_POST['user'];
                $senha  = $_POST['senha'];

                $cadastra = new Usuario();
                echo $cadastra->cadastraUsuario($user,$senha);
                
                close_database();
                open_database();
                
                }
             ?>
  
    <form action="cad_user.php" method="post">
		<div class="input-group col-md-4">
		  <label for="usr">Usuário:</label>
		  <input type="text" class="form-control" id="user" name="user" required>			
		</div>
		<div class="input-group col-md-4">
		  <label for="senha">Senha:</label>
		  <input type="text" class="form-control" id="senha" name="senha" required>			
		</div>
		<div class="input-group col-md-4" style="padding-top:5px">
        <input type="submit" name="submit" value="Cadastrar" class="btn btn-success">
        <div class="row container" style="padding-top:20px">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Opções</th>                
            </tr>
        </thead>
        <tbody>
            
                <?php
//                echo Usuario::listaUsuario();
                $listagem = Usuario::listaUsuario();
                if(mysqli_num_rows($listagem)>0){
                    while(  $res = mysqli_fetch_assoc($listagem)   ){ ?>
                        <tr>
                            <td><?php echo $res['id']; ?> </td>                            
                            <td><?php echo $res['login']; ?> </td> 
                            <td><?php echo $res['senha']; ?> </td>
                            <td>as</td>
                        </tr>
                    <?php }
                    } else {
                    echo 'Não existem usuários cadastrados...';
                } 
                ?>               
            
        </tbody>
    </table>    
        </div>                                                
                    
		</div>
	</form>
    
</div>
<?php include('../inc/footer.php'); ?>