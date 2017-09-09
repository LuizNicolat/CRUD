    jQuery(document).ready(function(){       
        
        //capturando o clique no botao
        jQuery('button[name="deleta"]').click(function(){
            
            
            id = $(this).closest('tr').attr('codigo'); //recupera o dado da row clicada

            
           var checkstr =  confirm('Confirma a exclusão do '+id+' ?');
        if(checkstr == true){
//          alert(id);



        function RefreshTable() {
           $("#tabela").load(location.href+" #tabela>*","");
       }

        }else{
        return false;
        }


        })//final do click do excluir

        jQuery('input[name="submit"]').click(function(){

           var checkstr =  confirm('Confirma a exclusão?');
        if(checkstr == true){
          alert('Chupa!');

    //    function RefreshTable() {
    //       $("#tabela").load(location.href+" #tabela>*","");
    //   }

        }else{
        return false;
        }



    })

})