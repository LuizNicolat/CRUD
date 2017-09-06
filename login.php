<?php include('config.php'); ?>
<?php include('inc/functions.php'); ?>
<?php include('inc/database.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo TITULO_SITE?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #7ea5d6,#1127a3) fixed;
            height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
</head>
    <body>       
        <div class="container">           
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="jumbotron" style="margin-top:150px">
                <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuário" name="user">                    
                </div>  
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">                    
                </div>
                    
                <input type="submit" name="submit" value="Login" class="btn btn-success form-control">                  <?php
                        if (isset($_POST['submit'])) {

                            $login = new Usuario();
                            echo $login->Login($_POST);

                            }
                    ?>
                </form>                
                </div>            
            </div>  
            <div class="col-lg-4"></div>
        </div>    
    </body>
</html>