<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <form>
        <h1> Cadastros </h1>
       <section>
       <p>
           

        </p>
       </section>
       <section class="img">           
          <p>Email <label><input type="email" id="email" name="email" required placeholder="E-mail"></label></p>
          <p>Nome <label><input type="text" id="nome" name="nome" required placeholder="Nome"></label>
          <p><label>Cep <input type="number" id="cep" name="cep" required placeholder="Cep"></label></p>
          <p><label>Telefone <input type="tel" id="tel" name="tel" required placeholder="Telefone"></p>
          <p>Cpf <label><input type="number" id="cpf" name="cpf" required placeholder="cpf"></label></p>
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
          <p>Cnpj <label><input type="number" id="cnpj" name="cnpj" required placeholder="Cnpj"></label></p>
          <p>Nome da Empresa <label><input type="text" id='Nempresa' name="Nempresa"></label></p>
       </section> 
       <div>
           <input type="submit">
       </div> 
    </form>
      



</body>
</html>