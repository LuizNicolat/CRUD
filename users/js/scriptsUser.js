    jQuery(document).ready(function(){       
        
        //capturando o clique no botao
        jQuery('button[name="deleta"]').click(function(){
            
            
            id = $(this).closest('tr').attr('codigo'); //recupera o dado da row clicada
            
           var checkstr =  confirm('Confirma a exclusão do '+id+' ?');
        if(checkstr == true){
//          alert(id);
            
            jQuery.ajax({
              type:'POST',
              url:'../users/inc/deletauser.php',
              data:"login="+id,
                cache:false,
                datatype:'text',
              success:function(data) {
                  
                if (data == 1) {
					jQuery('.divmsg').html('Tudo salvo corretamente.').addClass('alert alert-success').slideDown(350);
                    jQuery("#tabela").load('lista_user.php'); 
				} else 
				{ 
					jQuery('.divmsg').html('Ocorreu um erro' + data).addClass('alert alert-warning').slideDown(350);
                    
				}
                                       
                setTimeout(
						function(){
							jQuery('.divmsg').slideUp(350);
						},
						5000
					)
              }
            })
        }   
      

        else{
        return false;
        }


        })//final do click do excluir

        jQuery('input[name="submit"]').click(function(){
            
            
            usuario = jQuery('input[name="user"]').val();
			senha = jQuery('input[name="senha"]').val();            
            
//             jQuery('.divmsg').html(usuario +' / ' + senha).addClass('alert alert-success').slideDown(350);
            jQuery.ajax({
              type:'POST',
              url:'../users/inc/cadastrauser.php',
              data: 'user='+usuario+'&senha='+senha,
                cache:false,
                datatype:'text',
              success:function(data) {
                  
//                  jQuery('.divmsg').html(data.toString()).addClass('alert alert-success').slideDown(350);
                  
                  if(data == 0){
                    jQuery('.divmsg').html('Erro ao cadastrar!').addClass('alert alert-danger').slideDown(350);
                  }
                  
                  
                if (data == 1) {
					jQuery('.divmsg').html('Cadastrado com sucesso').addClass('alert alert-success').slideDown(350);
                    $('input[name="user"]').val('');
                    $('input[name="user"]').val('');
                    jQuery("#tabela").load('lista_user.php'); 
				} else
                    if(data == 2){
                        jQuery('.divmsg').html('Usuário já cadastrado!').addClass('alert alert-warning').slideDown(350);
                       }
                                       
                setTimeout(
						function(){
							jQuery('.divmsg').slideUp(350);                            
						},
						5000
					)
              }
            })
        }    
                )
        
        

})