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
                  alert(data.toString());
                  
//                if (data == 1) {
//					jQuery('.divmsg').html('Tudo salvo corretamente.').addClass('alert alert-success').slideDown(350);
//                    jQuery("#tabela").load('lista_user.php'); 
//				} else 
//				{ 
//					jQuery('.divmsg').html('Ocorreu um erro' + data).addClass('alert alert-warning').slideDown(350);
//                    
//				}
//                                       
//                setTimeout(
//						function(){
//							jQuery('.divmsg').slideUp(350);
//						},
//						5000
//					)
              }
            })
        }   
      

        else{
        return false;
        }


        })//final do click do excluir

//        jQuery('input[name="submit"]').click(function(){
//
//        
//
//        else{
//        return false;
//        })
            

})