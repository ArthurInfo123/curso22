<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/pessoa.js"></script>

    <title>Site Responsivo</title>

    <style>
       table tr, table th, table td
       {
         border: 1px solid black;
         background-color: blue;
         color: red;
       }
       
       @media(max-width: 3500px)
       {
        table tr, table th, table td
        {
            width: 1500px;
        }
       }
       @media(max-width: 1250px)
       {
        table tr, table th, table td
        {
            width: 1000px;
        }
       }
       @media(max-width: 800px)
       {
        table tr, table th, table td
        {
            width: 650px;
        }
       }
       @media(max-width: 500px)
       {
        table tr, table th, table td
        {
            width: 350px;
        }
       }
       @media(max-width: 250px)
       {
        table tr, table th, table td
        {
            width: 150px;
        }
       }

       


        body{
            background-color: green;
        }

        input
        {
                
        }
        table{
          border: 1px solid black;
        }
    </style>
  

</head>
<body>    
     

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          CADASTRAR

      </button>


      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <p>NOME <input type="text" id='nome'></p>
                 <p>TELEFONE <input type="text" id="tel"></p>                
                 <p>CEP <input type="text" id="cep"></p>
                 <p>EMAIL <input type="text" id="email"></p>
                 <p>Social Web <input type="text" id='social'></p>
                 <p>Sexo <input type="text" id="sexo"></p>
                 <p>Profissao <input type="text" id="profissao"></p>
                 <p>Cnpj <input type="text" id="cnpj"></p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btnExcluir" data-bs-dismiss="modal" id="excluir">Excluir</button>
              <button type="button" class="btnEditar" onclick="envia()" value=5>Salvar</button>
               
            </div>
          </div>
        </div>
      </div>
      <table class="table table-dark table-hover" id="tabela">
      <table class="table">
          <thead>
            <tr>              

            </tr>
          </thead>
          <tbody>
            <tr>
              
            </tr>
            <tr>
              
            </tr>
            <tr>
              
            </tr>
          </tbody>
        </table>
      </table>

<script>
        
    function envia()
        {
              var i = "Arthur"
              let nome = document.getElementById('nome').value
              let telefone = document.getElementById('tel').value
             let cep = document.getElementById('cep').value
              let email = document.getElementById('email').value
              let social = document.getElementById('social').value
             let sexo = document.getElementById('sexo').value
              let profissao = document.getElementById('profissao').value
            let cnpj = document.getElementById('cnpj').value
             var tabela = document.getElementById('tabela')              
              var row = tabela.insertRow(0)
              var cel1 = row.insertCell(-1)
              var cel2 = row.insertCell(-1)
              var cel3 = row.insertCell()
              var cel4 = row.insertCell()
              var cel5 = row.insertCell()
              var cel6 = row.insertCell()
              var cel7 = row.insertCell()
              var cel8 = row.insertCell()   
             var cel9 = row.insertCell()         
              cel1.innerHTML += nome 
              cel2.innerHTML += telefone
              cel3.innerHTML += cep
             cel4.innerHTML += email 
              cel5.innerHTML += social
              cel6.innerHTML += sexo
              cel7.innerHTML += profissao
              cel8.innerHTML += cnpj  
              cel9.innerHTML += "<button id='botao' class='btn btn-outline-success' value='2'> DELETAR  </button>"
              cel9.innerHTML += "<button id= botao2 class='btn btn-outline-warning'> EDITAR </button>" 
             var botao = document.getElementById('botao')
             var botao2 = document.getElementById('botao2')
              //botao.addEventListener('click', function(){
                     //document.getElementById('tabela').deleteRow(0)


              //})
              
              //botao2.addEventListener('click', function()
             //{
            //})
      }
          

        




</script>

</body>
</html>