function adicionarFilme(){
          if ($("#tituloFilme").val()==""|| $("#autorFilme").val()==""
             || $("#descricaoFilme").val()==""|| $("#anoLancamento").val()==""
              || $("#duracaoFilme").val()==""|| $("#produtorFilme").val()==""||
              $("#cartaz").val()==""
             ) {
            swal("Por favor, preencha todos campos","", "error");
          }else{
          $.ajax(
              {
          url:'controller/cFilme.php',
          type:'POST',
          data: {

               'titulo': $("#tituloFilme").val(),
               'autor': $("#autorFilme").val(),
               'descricao': $("#descricaoFilme").val(),
               'anoLancamento': $("#anoLancamento").val(),
               'duracao':  $("#duracaoFilme").val(),
               'produtor': $("#produtorFilme").val(),
               'cartaz': $("#cartaz").val(),

          },
            success: function( result) {
                   if(result ==1){
                 
                   swal("Filme adicionado com sucesso","", "success");     
                   }else if(result==100){
                    swal("O filme já existe na base de dados","", "error");
                   }else{
                    swal("Ocorreu um erro ao submeter os dados","", "error");           
                   }document.getElementById('adicionarFilme').reset();},
            error:function (){
 			       			alert("Erro ao submeter os dados"); 
 			       		}

          });
      }
    }

// Editar dados do filme
function editarFilme(id){

         $.ajax(
             {
         url:'controller/editarFilme.php',
         type:'POST',
         data: {

               'titulo': $("#tituloFilme").val(),
               'autor': $("#autorFilme").val(),
               'descricao': $("#descricaoFilme").val(),
               'anoLancamento': $("#anoLancamento").val(),
               'duracao':  $("#duracaoFilme").val(),
               'produtor': $("#produtorFilme").val(),
               'cartaz': $("#cartaz").val(),
               'id': id
         },
           success: function( result) {
                  if(result ==1){ 
                  swal("Dados atualizados com sucesso","", "success");  
                  atualizar();      
                  }else{
                
                    swal("Ocorreu um erro ao submeter os dados, porfavor tente novamente", "error"); 
                  }},
        error:function (){
                  alert("Erro ao submeter os dados");
                  // document.getElementById('results').innerHTML = result; 
                }

         });
      }
// Apagar filme
function apagarFilme(id){
  swal({   
      title: "Apagar",   
      text: "Tens certeza que pretendes apagar?",   
      type: "warning",   
      showCancelButton: true,   
      confirmButtonColor: "#BE1522",   
      confirmButtonText: "Confirmar!",   
      closeOnConfirm: false 
  }, function(){
         $.ajax(
             {
         url:'controller/apagar.php',
         type:'POST',
         data: {
                'id': id,
                'tabela': 'filme'
         },
           success: function( result) {
                  if(result ==1){ 
                    atualizar();
                    swal("Sucesso!", "Dados eliminados com sucesso.", "success");   
                  }else{ 
                    swal("Sucesso!", "Ocorreu um erro, porfavor tente novamente.", "error");   
        }},
        error:function (){
                  alert("Erro ao submeter os dados"); 
                }

         });
      });
    }

function atualizar() {
  $.get("controller/buscarFilme.php", function(resultado){
     document.getElementById("tbl_filme").innerHTML =resultado; 
   });
}
function resetar() {
  $('#adicionarFilme').each(function () {
    this.reset();
  });
}
function buscarFilme(id) {

  $.ajax({
    type: "POST",
    url: "controller/buscarDFilme.php",
    data: {
      'id': id
    },
    success: function(data) {
      document.getElementById('divEditar').innerHTML = data;

    }
  });
}