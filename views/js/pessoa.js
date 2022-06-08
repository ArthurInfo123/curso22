$( document ).ready(function() {
      var baseUrl = "http://localhost/curso22/controlers/pessoacontroler.php"

    $(".btnEditar").on("click", function(){
           var idPessoa = $(this).val();
           baseUrl += "?id=" + idPessoa
           $.get(baseUrl).done(function (response)
           {
                  $('#nome').val(response[0].nome)
                  console.log(response)
                  $('.modal fade').modal('show')

                  console.log(JSON.stringify(response))
           })
       
           console.log('Sou o clicar do editar id' + idPessoa)

    });

    $(".btnExcluir").on("click", function(){
        console.log("Sou o clicar do excluir");


 });

});