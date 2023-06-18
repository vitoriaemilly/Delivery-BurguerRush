
// const estado = document.getElementById('estado')
// const cidade = document.getElementById('cidade')

// estado.addEventListener('change', async function(){
//     const urlcidades = "https://servicodados.ibge.gov.br/api/v1/localidades/"+estado.value+"/municipios"
//     const request = await fetch(urlcidades)
//     const response = await request.json()
//     let options =''
//     response.forEach(function(cidades){
//         // options += '<option>'+cidades.nome+'</option>'
//         options += `<option value="${cidades.id}">${cidades.nome}</option>`
//     })

//     cidade.innerHTML = options
// })


// window.addEventListener('load', async () => {
//     const request = await fetch(async_estados)
//     const response = await request.json() //Converti a promisse em Json

//     const options = document.createElement("optgroup")
//     options.setAttribute('label','estado')
//     response.forEach (function(uf){
//         options.innerHTML += '<option>'+uf.sigla+'</option>' 
//     })

//     estado.append(options)
// })

// $.getJSON(json_cidades, function(data){
//     let conteudo = '<optiongroup>'
//     $.each(data, function(a, valor){
//         conteudo += '<option>' +valor.nome+'</option>'
//     })
//     conteudo += '</optiongroup>'

//     $('#cidade').html(conteudo);
// })


