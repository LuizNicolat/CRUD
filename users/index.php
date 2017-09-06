<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-lg-12">
			<h2>Usuários</h2>
		</div>
    </div>
    <div class="row">
		<div class="col-lg-6">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Cliente</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php include(FOOTER_TEMPLATE); ?>