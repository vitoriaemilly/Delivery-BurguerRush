window.addEventListener('load', carrega)



var json_estados = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'
var json_cidades = "https://servicodados.ibge.gov.br/api/v1/localidades/distritos"


$.getJSON(json_cidades, function(data){
    let conteudo = '<optiongroup>'
    $.each(data, function(a, valor){
        conteudo += '<option>' +valor.nome+'</option>'
    })
    conteudo += '</optiongroup>'

    $('#cidade').html(conteudo);
})


