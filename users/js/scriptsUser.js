jQuery(document).ready(function(){
 	//capturando o clique no botao
	jQuery('button[name="deleta"]').click(function(){
		
       var checkstr =  confirm('Confirma a exclusão?');
    if(checkstr == true){
//      alert('Chupa!');
        
    function RefreshTable() {
       $("#tabela").load(location.href+" #tabela>*","");
   }
       
    }else{
    return false;
    }


	})//final do click do excluir 
    
    
})