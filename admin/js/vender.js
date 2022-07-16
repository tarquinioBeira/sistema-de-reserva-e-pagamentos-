function cadastrarVenda(){
         if ($("#nome").val()=="" || $("#ultimonome").val()=="" || $("#numerocelular").val()=="" || $("#data").val()=="" || $("#numerodoc").val()=="" || $("#listaSessoes").val()=="" || $("#fpagamento").val()=="") {
            swal("Preencha todos campos obrigatórios (*)","", "error");}
          else{
          $.ajax(
              {
          url:'controller/cVender.php',
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
               'fpagamento': $("#fpagamento").val(),
               'listaSessoes': $("#listaSessoes").val()

          },
            success: function(result) {
                   if(result == 1){ 
                    window.location = "../dompdf/comprarBilhete.php";     
                    }
                   else if (result == 100){
                   swal("já existe na base de dados","", "error");
                    }
                   else{
                   swal("Ocorreu um erro ao submeter os dados, porfavor tente novamente","", "error");
                   // document.getElementById("tbl_bilhetev").innerHTML =result; 
                   // window.location = "dompdf/comprarBilhete.php";
       }},
             error:function (){
 			       			alert("Erro ao submeter os dados"); 
 			       		}

          });
    }
  }

// Editar dados da venda
function editarVenda(id){

         $.ajax(
             {
         url:'controller/editarVenda.php',
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
                 'fpagamento': $("#fpagamento").val(),
                 'id': id

         },
           success: function( result) {
                  if(result ==1){ 
                  atualizar();
                  swal("Dados atualizados com sucesso","", "success"); 
                  document.getElementById('user-form').reset(); 
                  }else{
                   // swal("Erro!","Ocorreu um erro, porfavor tente novamente", "error");
                   document.getElementById("tbl_bilhetev").innerHTML =result; 
                 }
               },
        error:function (){
                  alert("Erro ao submeter os dados"); 
                }

         });
      }

// // Apagar Usuario
// function apagarVenda(id){
//   swal({   
//       title: "Apagar",   
//       text: "Tens certeza que pretendes apagar?",   
//       type: "warning",   
//       showCancelButton: true,   
//       confirmButtonColor: "#BE1522",   
//       confirmButtonText: "Confirmar!",   
//       closeOnConfirm: false 
//   }, function(){

//          $.ajax(
//              {
//          url:'controller/apagar.php',
//          type:'POST',
//          data: {
//                 'id': id,
//                 'tabela': 'vender'
//          },
//            success: function( result) {
//                   if(result ==1){ 
//                     atualizar();
//                     swal("Sucesso!", "Dados eliminados com sucesso.", "success");   
//                   }else{ 
//                     swal("Sucesso!", "Ocorreu um erro, porfavor tente novamente.", "error");   
//         }},
//         error:function (){
//                   alert("Erro ao submeter os dados"); 
//                 }

//          });
//       });
//     }

function atualizar() {
  $.get("controller/buscarVenda.php", function(resultado){
     document.getElementById("tbl_bilhetev").innerHTML =resultado; 
   });
}
function buscarVenda(id) {
  $.ajax({
    type: "POST",
    url: "controller/buscarDVenda.php",
    data: {
      id: id
    },
    success: function(data) {
      document.getElementById('divEditar').innerHTML = data;

    }
  });
}
