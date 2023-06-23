<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/alterarDados.css">
</head>
<body>
  <header class="container">
			<details>
				<summary></summary>
				<nav class="menu">
				  <a href="index.php">Home</a>
				  <a href="#sobre">Sobre</a>
				  <a href="login.php">Login</a>
				  <a href="#link"> Carrinho</a>
				</nav>
			  </details>
  </header> 
  <div class="container2" id="container2">
	<div class="form-container sign-up-container">
		<form action="updateDados.php" method="POST">
			<h1>Altere Seus dados</h1>
			<span></span>
			<input type="hidden" name="acao" value="cadastrar">
		    <input type="text" placeholder="Digite seu nome" required id="nome" name="nome">
			<input type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ id="cpf" placeholder="Digite seu cpf" maxlength="14">
			<input type="email" placeholder="Digite seu e-mail" required id="e-mail" name="email">
			<input type="text" name="telefone" id="telefone" required placeholder="Digite seu telefone" minlength="14" maxlength="14" \ pattern="(\d{2}\)\d{5}\-\d{4}" \>
			<label for="estado">Estado:</label>
  			<select name="estado" id="estado" onchange="carregarCidades()">
  			  <option value="">Selecione um estado</option>
  			</select>
  			<label for="cidade">Cidade:</label>
  			<select id="cidade" name="cidade">
  				<option value="">Selecione um estado primeiro</option>
  			</select>
			 <input type="text" placeholder="Digite seu Bairro" required id="bairro" name="bairro">
			 <input type="text" placeholder="Digite seu CEP" required id="cep" name="cep" \ pattern="\d{6}\-\d{3}" \ maxlength="11">
			 <input type="number" placeholder="Digite o Número da sua casa" required id="numero_cs" name="numero" >
			 <input type="text" placeholder="Digite um Complemento" required id="complemento" name="complemento">
			
			<input type="password" placeholder="Crie uma senha" name="senha"maxlength="20" minlength="8">
			<button type="submit" name="cadUsuario">Alterar</button>
		</form>
	</div>

      
<footer>
	<div class="container-footer">
		<div class="container-contato">
			<h2>Contatos</h2>
			<div class="">
				<div class="whatsapp">
					<img src="../img/logo-whatsApp.png" alt="">
					<a href="https://wa.me/+5585984024263" target="_blank" rel="noopener noreferrer">WhatsApp</a>
				</div>
				<div class="telefone">
					<img src="../img/logo-telefone.png" alt="" class="imagens-contato">
					<a href="#" target="_blank" rel="noopener noreferrer">85984024263</a>
				</div>
				<div class="email">
					<img src="../img/logo-email.png" alt="" class="imagens-contato">
					<a href="#" target="_blank" rel="noopener noreferrer">contato@burguerRush.com.br</a>
				</div>
			</div>
			<div class="container-sociais">
				<div>
					<h2>Redes Sociais</h2>
					<div class="redes-sociais">
						<a href="#" target="_blank" rel="noopener noreferrer"><img src="../img/logo-instagram.png" alt="instagram"></a>
						<a href="#" target="_blank"><img src="../img/logo-tiktok.png" alt="tiktok" ></a>
						<a href="#" target="_blank" rel="noopener noreferrer"><img src="../img/logo-facebook.png" alt="facebook"></a>
					</div>
				</div>
			</div>
	</div>
    </footer>

    <script>
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

    </script>
</body>
</html>