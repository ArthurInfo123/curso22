<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/pessoa.js"></script>
    <title>Site Responsivo</title>
    <style>
        section{            
            max-width: 1500px;
        }

        img{
            width: 400px;
            height: 250px;
        }

        @media (max-width: 1500px)
        {
            section.img{
                
                
            }
        }

        @media (max-width: 900px)
        {
            section.img{
                max-width: 350px;
               
            }
        }

        @media (max-width: 750px)
        {
            section.img{
                max-width: 250px;
                
            }
        }

        @media (max-width: 550px)
        {
            section.img{
                max-width: 150px;
            }
        }

        @media (max-width: 350px)
        {
            section.img{
                max-width: 50px;
            }
        }

        body{
            background-color: green;
        }

        input
        {
                
        }
    </style>
    <!-- <script src="scripts.js"></script> -->

</head>
<body>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Cadastrar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cadastro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
            <p>Email <label><input type="email" id="email" name="email" required placeholder="E-mail"></label></p>
          <p>Nome <label><input type="text" id="nome" name="nome" required placeholder="Nome"></label>
          <p><label>Cep <input oninput='mask_cep(this)' type="text" id="cep" name="cep" required placeholder="Cep"></label></p>
          <p><label>Telefone <input onkeypress="mask_phone(this, mphone)"  type="tel" id="tel" name="tel" required placeholder="Telefone" ></p>
          <p>Cpf <label><input oninput="mask_cpf(this)" type="text" id="cpf" name="cpf" required placeholder="cpf"></label></p>
          <p>Rg <label><input type="number" id="rg" name="rg" required placeholder="Rg"></label></p>
         
            Escolaridade <select>
              <option>
                  <p> Ensino Medio Incompleto</p>
              </option>
              <option>
                  <p> Ensino Medio Completo </p>
              </option>
              <option>
                  <p> Ensino Superior Incompleto</p>
              </option>
              <option>
                  <p> Ensino Fundamental Completo</p>
              </option>
              <option>
                  <p> Ensino Fundamental Incompleto</p>
              </option>
          </select>
          <p>Profissao <label><input type="text" id="profissao" name="profissao" required placeholder="profissao"></label></p>
          <p>Cnpj <label><input type="text" id="cnpj" name="cnpj" required placeholder="Cnpj"></label></p>
          <p>Nome da Empresa <label><input type="text" id='Nempresa' name="Nempresa"></label></p>
       </section> 
       <div>
           <input type="submit">
       </div> 

            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
        </div>
    </div>
    </div>
    </div>
    </div>
                <table class="table table-dark table-striped">
                <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
            <th scope="row"></th>
            <td>
                <button class='btnEditar' value="1"> EDITAR</button>
                <button class='btnExcluir' value="1"> EXCLUIR </button></td>
            
        </tbody>
                        </table>
                </div>
            </div>
            </div>

        <form>

        <h1> Cadastros </h1>
       <section>
       <p>
           

        </p>
       </section>
      
    </form>
      
     


</body>
</html>