$( document ).ready(function() {
      var url = "http://localhost/curso22/controlers/pessoacontroler.php" 
      var urlListarTodas = url + "?rota=ListarTodasPessoas"           
      $.get(urlListarTodas).done(function(response) {     
       montarTabela(response);
       
   }).fail(function(error) {
       console.log("Deu erro: " + JSON.stringify(error));
   });

   $("#tabelaPessoas").on("click", ".btnEditar", function() {
       var id = $(this).val();
       var urlComId = url + "?id=" + id + "&rota=editarUsuario";
      
       $.get(urlComId).done(function(response) {
           // console.log("sou o response: " + JSON.stringify(response));

           $("#idPessoa").val(response[0].id);
           $("#nomePessoa").val(response[1].nome);
           $("#email").val(response[1].email)
           $("#phone").val(response[1].phone)
           $("#cep").val(response[1].cep)
           $("#staticBackdropLabel").html("Editar");
           $("#staticBackdrop").modal("show");           
           // $("#staticBackdrop").modal("hide"); // fechar o modal
           $("#staticBackdropLabel").html("Cadastrar");
       });
       
   });

   $("#tabelaPessoas .btnExcluir").on("click", function() {
       $("#staticBackdropLabel").html("Cadastro");
       console.log("sou o clicar do excluir");
   });

   function montarTabela (dados) {
       var cabecalho = montarCabecalho();
       var dados = montarDados(dados);
       var htmlTabela = (cabecalho + dados);
       $("#tabelaPessoas").html(htmlTabela);
   }

   function montarCabecalho () {
       var cabecalho = (
           `<thead>
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">Nome</th>
                   <th scope="col">E-mail</th>
                   <th scope="col">Phone</th>
                   <th scope="col">Cep</th>
                   <th scope="col">Ações</th>
               </tr>
           </thead>`
       );

       return cabecalho;
   }
   
   function montarDados (dados) {
       var tbody = `<tbody>`;

       $.each(dados, function(idx, pessoa) {
           tbody += (
               `<tr>
                   <td>${pessoa.id}</td>
                   <td>${pessoa.nome}</td>
                   <td>${pessoa.email}</td>
                   <td>${pessoa.phone}</td>
                   <td>${pessoa.cep}</td>
                   <td>
                       <button class="btnEditar" value="${pessoa.id}">Editar</button>
                       <button class="btnExcluir" value="${pessoa.id}">Excluir</button>
                       
                   </td>
               </tr>`
               
           );
       });

       tbody += "</tbody>";       
       return tbody;
   }
   
});