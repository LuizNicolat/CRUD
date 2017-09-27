<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>

<?php include('../inc/header.php'); ?>
<div class="col-xs-12 divmsg">
    <input type="text" name="msg2" />
</div>
<div class="wrap" style="padding-top:20px" id="wrap">	  
      
    <form action="cad_cliente.php" method="post">        
		<div class="col-xs-12 col-sm-4 form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" />
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" />
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="rg">RG</label>
            <input type="text" name="rg" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="dtnasc">Data de Nascimento</label>
            <input type="text" name="dtnasc" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="cep">CEP</label>
            <div class="input-group">                
                <input type="text" class="form-control" name="cep" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                  </span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="localidade">Localidade</label>
            <input type="text" name="localidade" class="form-control" />
        </div>
	</form>
    
</div>

</main> <!-- /container -->

	<hr>
	<footer class="container">
		<p>&copy;2017 - CodeWorks</p>
	</footer>
<!--    <script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.2.min.js"><\/script>')</script>-->

    <script src="<?php echo BASEURL; ?>js/jquery-3.2.1.min.js"></script> 
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL; ?>users/js/scriptsUser.js"></script>

<!--    <script src="<?php echo BASEURL; ?>js/main.js"></script>-->
</body>
</html>