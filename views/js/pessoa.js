$( document ).ready(function() {
      var baseUrl = "http://localhost/curso22/controlers/pessoacontroler.php"

    $(".btnSalvar").on("click", function(){
           var idPessoa = $(this).val();
           baseUrl += "?id=" + idPessoa
           $.get(baseUrl).done(function (response)
           {
                  //html --> back
                  $('#nome').val(response[0].nome)
                  $('#email').val(response[0].email)
                  $("#tel").val(response[0].phone)
                  $("#cep").val(response[0].cep)
                  $("#sexo").val(response[0].gender)
                  console.log(response)
                  $('.modal').modal('show')

                  console.log(JSON.stringify(response))
           })
       
           console.log('Sou o clicar do editar id' + idPessoa)

    });

    $("#btnExcluir").on("click", function(){
        console.log("Sou o clicar do excluir");

   
       

 });

    function montarCabecalho()
    {
           var html = (
                  `
                  <thead>
                  <tr> 
                      <th> Nome </th>
                      <th> Cep</th>
                      <th> TELEFONE</th>
                      <th> </th>
                      <th> </th>
                      <th> </th>               
                                  
                  </tr>
                  </thead>
                  `

           );
           return html;
    }
   
   
    function montarDados(pessoas)
    {
           var tbody = '<tbody>'
           var tr = ''
           $.each(pessoas,function(idx, pessoa)
           {
               tr += (
                     `
                     
                     <tr> 
                            <th scope=row>  ${pessoa.id}  </th>
                            <td>  ${pessoa.nome} </td>
                            <td>  ${pessoa.email}. </td>
                            <td>  ${pessoa.phone} </td>
                            <td>  ${pessoa.cep} </td>
                            <td> . ${pessoa.gender} </td>
                     <td>" . $pessoa["type"]. "</td>
                            <td> . $pessoa["satus"]. </td> 
                     </tr>
                     
                     `
   
              );
              return html    
           }
           )
            
          
    }
});