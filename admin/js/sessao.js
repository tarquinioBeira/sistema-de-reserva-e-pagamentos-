function adicionarSessao(){
	       if ($("#filme").val()=="" || $("#data").val()=="" || $("#horainicio").val()==""
         || $("#horatermino").val()=="" || $("#sala").val()==""|| $("#preco").val()=="")
          {
            swal("Por favor, preencha todos campos","", "error");
          }else{
          $.ajax(
              {
          url:'controller/cSessao.php',
          type:'POST',
          data: {
               'filme': $("#filme").val(),
               'data': $("#data").val(),
               'horainicio': $("#horainicio").val(),
               'horaFim': $("#horatermino").val(),
               'sala':  $("#sala").val(),
               'preco': $("#preco").val(),

          },
            success: function( result) {
                   if(result ==1){ 
                   atualizar();
                   swal("Uma sessão adicionada","", "success");      
                   }else if(result==100){
                       swal("A sessão já existe na base de dados","", "error");
                  }else{
                  swal("Ocorreu um erro ao submeter os dados, porfavor tente novamente","", "error");

       }},
         error:function (){
 			       			alert("Erro ao submeter os dados"); 
 			       		}

          });
      }
    }

// Editar dados da Sessao
function editarSessao(id){

         $.ajax(
             {
         url:'controller/editarSessao.php',
         type:'POST',
         data: {
                'data': $("#data").val(),
                'horaInicio': $("#horainicio").val(),
                'horaFim': $("#horatermino").val(),
                'sala': $("#sala").val(),
                'preco': $("#preco").val(),
                'id': id
         },
           success: function( result) {
                  if(result ==1){ 
                  swal("Dados actualizados com sucesso","", "success");  
                  atualizar(); 
                  $('#frmEditar')[0].reset();    
                  }else{
                    swal("Erro!","Ocorreu um erro, porfavor tente novamente", "error"); 
                    // document.getElementById("results").innerHTML =result;
        }},
        error:function (){
                  alert("Erro ao submeter os dados"); 
                }

         });
      };

// Apagar sala
function apagarSessao(id){
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
                'tabela': 'sessao'
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
  $.get("controller/buscarSessao.php", function(resultado){
     document.getElementById("tbl_sessao").innerHTML =resultado; 
   });
}
function buscarSessao(id) {
  $.ajax({
    type: "POST",
    url: "controller/buscarDSessao.php",
    data: {
      id: id
    },
    success: function(data) {
      //document.getElementById('tabelaUsuario').innerHTML=" ";
      document.getElementById('divEditar').innerHTML = data;

    }
  });
}