<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>

<?php include('../inc/header.php'); ?>

<div class="wrap" style="padding-top:20px">
	<?php
    if($_POST){  
        echo Usuario::cadastraUsuario($_POST);
    } ?>    
  
    <form action="cad_user.php" method="post">
		<div class="input-group col-md-4">
		  <label for="usr">Usuário:</label>
		  <input type="text" class="form-control" id="user">			
		</div>
		<div class="input-group col-md-4">
		  <label for="senha">Senha:</label>
		  <input type="text" class="form-control" id="senha">			
		</div>
		<div class="input-group col-md-4" style="padding-top:5px">
		  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Cadastrar</button>
                                        
                                                        
                    
		</div>
	</form>
    
</div>
<?php include('../inc/footer.php'); ?>