 // Função para buscar os estados do Brasil através da API do IBGE
    function carregarEstados() {
      fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados') // Fiz uma requisição para retornar a api do IBGE
        .then(response => response.json()) //Convertendo para JSON
        .then(data => { // Realizando o processamento
          const estadoSelect = document.getElementById('estado'); //Peguei id do select

          data.forEach(estado => { 
            const option = document.createElement('option'); //Integrei os estados da api ao um campo option
            option.value = estado.id; //ID do estados
            option.text = estado.nome; //Nome do estado
            estadoSelect.appendChild(option); //Apliquei com o appendChild
          });
        });
    }

    // Função para buscar as cidades de um estado específico através da API do IBGE fazendo o mesmo que a funão passada
    function carregarCidades() {
      const estadoSelect = document.getElementById('estado');
      const cidadeSelect = document.getElementById('cidade');
      const estadoId = estadoSelect.value;

      // Limpa as opções de cidades antes de buscar as novas opções
      cidadeSelect.innerHTML = '<option value="">Carregando...</option>'; //Opção de espera enquanto o usuario seleciona o estado

      if (estadoId) {
        fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoId}/municipios`) //Fiz uma solicitaçao passando por parametro o estadoId que recebeu o valor de estadosSelect, ou seja, passei o valor do Id Estado do select estados
          .then(response => response.json()) //Transformei em Json
          .then(data => {
            cidadeSelect.innerHTML = '<option value="">Selecione uma cidade</option>';

            data.forEach(cidade => { //Adicionei os dados da cidade sendo criado um option
              const option = document.createElement('option');
              option.value = cidade.id;
              option.text = cidade.nome;
              cidadeSelect.appendChild(option);
            });
          });
      } else {
        cidadeSelect.innerHTML = '<option value="">Selecione um estado primeiro</option>';
      }
    }

    // Carregar os estados assim que a página é carregada
    document.addEventListener('DOMContentLoaded', carregarEstados);

// const ulrUf = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'
// const uf= document.getElementById('estado')

// $.getJSON(ulrUf,function(data) {
//     console.log(data);
//     var options = "<option> Selecione uma UF </option>"
//     $.each( data, function( key, val ) {
//         options += "<option>"+val+"</option>";
//         });
//         $("#uf").append(options).show()
//         })

// const url = 'https://servicodados.ibge.gov.br/api/v1/localidades/municipios'

// $.getJSON(url, function(date){
//     var option = '<option value="">Selecione um estado</option>'
//     for (var i in date){
//         option += `<option value="${i}">${date[i].nome}</option>`
//     }
//     $('#cidade').html(option).show();
// })