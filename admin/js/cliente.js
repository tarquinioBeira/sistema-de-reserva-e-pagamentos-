function cadastrarVenda(){
          if ($("#nome").val()==""|| $("#apelido").val()==""
             || $("#numerocelular").val()==""|| $("#tipodocumento").val()==""
              || $("#numerodoc").val()==""|| $("#morada").val()==""||
              $("#genero").val()==""|| $("#sessao").val()==""||
              $("#data").val()==""
             ) {
            swal("Por favor, preencha todos campos","", "error");
          }else{

          $.ajax(
              {
          url:'controller/cCliente.php',
          type:'POST',
          data: {
               'nome': $("#nome").val(),
               'apelido': $("#ultimonome").val(),
               'morada': $("#morada").val(),
               'numerocelular': $("#numerocelular").val(),
               'tipodocumento': $("#tipodocumento").val(),
               'numerodoc':  $("#numerodoc").val(),
               'data': $("#data").val(),
               'genero': $("#genero").val(),
               'sessao': $("#sessao").val()

          },
            success: function( result) {
                   if(result ==1){ 
                   atualizar();
                   swal("Cadastrado com sucesso","", "success");      
                   }else if(result==100){
                   swal("já existe na base de dados","", "error");
                  }else{
                   swal("Ocorreu um erro ao submeter os dados, porfavor tente novamente","", "error");
       }},
         error:function (){
 			       			alert("Erro ao submeter os dados"); 
 			       		}

          });
      }
    }

// Editar dados da venda
function editarCliente(id){

         $.ajax(
             {
         url:'controller/editarCliente.php',
         type:'POST',
         data: {
                 'nome': $("#nome").val(),
                 'apelido': $("#ultimonome").val(),
                 'morada': $("#morada").val(),
                 'numerocelular': $("#numerocelular").val(),
                 'tipodocumento': $("#tipodocumento").val(),
                 'numerodoc':  $("#numerodoc").val(),
                 'data': $("#data").val(),
                 'genero': $("#genero").val(),
                 'sessao': $("#sessao").val(), 
                 'id': id

         },
           success: function( result) {
                  if(result ==1){ 
                  atualizar();
                  swal("Dados atualizados com sucesso","", "success"); 
                  document.getElementById('user-form').reset(); 
                  }else{
                   swal("Erro!","Ocorreu um erro, porfavor tente novamente", "error"); 
                 }
               },
        error:function (){
                  alert("Erro ao submeter os dados"); 
                }

         });
      }

// Apagar Usuario
function apagarCliente(id){
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
                'tabela': 'cliente'
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
  $.get("controller/buscarCliente.php", function(resultado){
     document.getElementById("tbl_cliente").innerHTML =resultado; 
   });
}
function buscarCliente(id) {
  $.ajax({
    type: "POST",
    url: "controller/buscarDCliente.php",
    data: {
      id: id
    },
    success: function(data) {
      document.getElementById('divEditar').innerHTML = data;

    }
  });
}
