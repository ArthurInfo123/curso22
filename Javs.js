
function cadastrar() 

{
      const usuarios = []
      let totusuarios = 0      
      let nome = document.getElementById('nome').value
      let Entrada = document.getElementById('Data de entrada').value
      let cpf = document.getElementById('CPF').value
      let telefone = document.getElementById('Telefone').value  
      let res = document.getElementById('res')  
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
      var cel1 = row.insertCell(-1)
      var cel2 = row.insertCell()
      var cel3 = row.insertCell()
      var cel4 = row.insertCell()
      var cel5 = row.insertCell()
      cel1.innerHTML = nome
      cel2.innerHTML = telefone
      cel3.innerHTML = Entrada
      cel4.innerHTML = cpf
      cel5.innerHTML = hora

      
      totusuarios ++

}