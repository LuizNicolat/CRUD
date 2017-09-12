<?php include('../config.php'); ?>
<?php include('../inc/functions.php'); ?>
<?php include('../inc/database.php'); ?>
<?php include('../inc/header.php'); ?>        


            <table id="tabelapadrao" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Usuário</th>
                <th>Senha (MD5)</th>
                <th>Opções</th>                
            </tr>
        </thead>
        <tbody>
            
                <?php
//                echo Usuario::listaUsuario();
                $listagem = Usuario::listaUsuario();
                if(mysqli_num_rows($listagem)>0){
                    while(  $res = mysqli_fetch_assoc($listagem)   ){ ?>
                        <div id="<?php echo $res['id']; ?>">
                            <tr codigo="<?php echo $res['login']; ?>">
                                <td><?php echo $res['id']; ?> </td>                    
                                <td><?php echo $res['login']; ?> </td> 
                                <td><?php echo $res['senha']; ?> </td>
                                <td>                                
                                    <button type="button" class="btn btn-default btn-lg btn-xs">
                                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-lg btn-xs" name="deleta">
                                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </div>
                    <?php }
                    } else {
                    echo 'Não existem usuários cadastrados...';
                } 
                ?>               
            
        </tbody>
    </table>    
                                                
               