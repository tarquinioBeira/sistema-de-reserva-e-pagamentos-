function adicionarSala(){

          if ($("#nome").val()=="" || $("#capacidade").val()=="") {
            swal("Por favor, preencha todos campos","", "error");
          }else{

          $.ajax(
              {
          url:'controller/cSala.php',
          type:'POST',
          data: {
               'nomeSala': $("#nome").val(),
               'capacidade': $("#capacidade").val(),

          },
            success: function(result) {
                   if(result ==1){  
                     atualizar(); 
                     swal("Sala adicionada com sucesso","", "success");
                   }else if(result==100){
                     swal("A sala já existe na base de dados","", "error");
                   }else{
                    swal("Ocorreu um erro ao submeter os dados, porfavor tente novamente","", "error");

       }},
         error:function (){
 			       			alert("Erro ao submeter os dados"); 
 			       		}

          });
      }
}
// Editar dados do sala
function editarSala(id){

         $.ajax(
             {
         url:'controller/editarSala.php',
         type:'POST',
         data: {
                'nome': $("#nome").val(),
                'capacidade': $("#capacidade").val(),
                'id': id
         },
           success: function( result) {
                  if(result ==1){
                  atualizar();
                  swal("Dados actualizados com sucesso","", "success"); 
                  
                  }else{
                   wal("Ocorreu um erro ao submeter os dados, porfavor tente novamente","", "error"); 
        }},
        error:function (){
                  alert("Erro ao submeter os dados"); 
                }

         });
      }
// Apagar sala
function apagarSala(id){
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
                'tabela': 'sala'
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
  $.get("controller/buscarSala.php", function(resultado){
     document.getElementById("tbl_sala").innerHTML =resultado; 
   });
}
function buscarSala(id) {
  $.ajax({
    type: "POST",
    url: "controller/buscarDados.php",
    data: {
      id: id
    },
    success: function(data) {
      document.getElementById('divEditar').innerHTML = data;

    }
  });
}