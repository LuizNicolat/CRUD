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
                    
		</div>
	</form>
    
</div>
<?php include('../inc/footer.php'); ?>