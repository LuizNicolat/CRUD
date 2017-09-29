<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>

<?php include('../inc/header.php'); ?>
<div class="col-xs-12 divmsg">
    <input type="text" name="msg2" />
</div>
<div class="wrap" style="padding-top:20px" id="wrap">	  
      
    <form action="cad_cliente.php" method="get">        
		<div class="col-xs-12 col-sm-4 form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" />
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="radiofisico">Tipo</label>
            <div class="radio col-xs-12">
              <label><input checked type="radio" name="radiofisico">Físico</label>
            <label><input type="radio" name="radiojuridico">Juridico</label>
            </div>
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
                <input type="text" id="cep" class="form-control" name="cep" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button" name="buscacep"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                  </span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="logradouro">Logradouro</label>
            <input type="text" id="rua" name="logradouro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="localidade">Localidade</label>
            <input type="text" id="cidade" name="localidade" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="UF">UF</label>
            <input type="text" id="uf" name="UF" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="IBGE">IBGE</label>
            <input type="text" id="ibge" name="IBGE" class="form-control" />
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
    <script src="<?php echo BASEURL; ?>clientes/js/scriptsCliente.js"></script>

<!--    <script src="<?php echo BASEURL; ?>js/main.js"></script>-->
</body>
</html>