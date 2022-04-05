const usuarios = []
let totusuarios = 0 
function cadastrar()
      
{      
      let cpf = document.getElementById('CPF').value
      if(QuantNum(cpf) == true){
      
      let nome = document.getElementById('nome').value
      let Entrada = document.getElementById('Data de entrada').value      
      let telefone = document.getElementById('Telefone').value 
      
      let corpo = document.getElementById('corpo')     
           
      
      let u = {nomes:nome, entradas:Entrada, cpfs:cpf, telefones:telefone}
      usuarios[totusuarios] = u      
      //let td1 = document.createElement('td')
      //let td2 = document.createElement('td')
      //let td3 = document.createElement('td')
      //let td4 = document.createElement('td')
      //let br = document.createElement('br')
      //td1.textContent = nome     
      //td2.textContent = telefone 
      //td3.textContent = Entrada
     // td4.textContent = cpf
      //corpo.appendChild(td1)     
     // corpo.appendChild(td2)     
      //corpo.appendChild(td3)      
      //corpo.appendChild(td4)
      var agora = new Date()
      hora = agora.getHours() 
      var row = corpo.insertRow(-1) 
      var cel0 = row.insertCell(-1)     
      var cel1 = row.insertCell(-1)
      var cel2 = row.insertCell()
      var cel3 = row.insertCell()
      var cel4 = row.insertCell()
      var cel5 = row.insertCell()
      var cel6 = document.createElement('button')   
      cel0.innerHTML += totusuarios    
      cel1.innerHTML = nome
      cel2.innerHTML = telefone
      cel3.innerHTML = Entrada
      cel4.innerHTML = cpf
      cel5.innerHTML = hora   
           
      
      totusuarios ++
      }
      else{
            alert('Cadastro Invalido')
      }

}

function deletar()

{
      let seleciona = document.getElementById('del').value
      if (seleciona == ''){
            alert('Digite qual usuario excluir')
      }
      for(let c = seleciona; c < usuarios.length; c++)
      {
               usuarios.splice(c, 1)
               var agora = document.getElementById('corpo').deleteRow(c)
      }


}


function QuantNum(e)
{
      if(e.length == 11)
      {
            return true
      }
      else if(e.length < 11 || e.length > 12)
      {
            return false
      }

}