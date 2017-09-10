    jQuery(document).ready(function(){       
        
        //capturando o clique no botao
        jQuery('button[name="deleta"]').click(function(){
            
            
            id = $(this).closest('tr').attr('codigo'); //recupera o dado da row clicada

            
           var checkstr =  confirm('Confirma a exclusão do '+id+' ?');
        if(checkstr == true){
//          alert(id);
            
            $.ajax({
              type:'POST',
              url:'../users/inc/deletauser.php',
              data:'codigo='+id,
              success:function(data) {
                if(data) { 
                    alert("DEU!");// DO SOMETHING
                } else { // DO SOMETHING }
                    alert("NUM DEU!");
              }
              }
            })
        }   
//        function RefreshTable() {
//           $("#tabela").load(location.href+" #tabela>*","");
//       }

        else{
        return false;
        }


        })//final do click do excluir

//        jQuery('input[name="submit"]').click(function(){
//
//        
//
//        }else{
//        return false;
//        }
//
//
//
//    )

})