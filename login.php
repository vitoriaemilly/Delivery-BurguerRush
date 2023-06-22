<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burguer Rush</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="../js/municipios.js"></script> -->
	<script src="js/cidadesPorEstado.js"></script>

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

<div class="container2" id="container2">
	<div class="form-container sign-up-container">
		<form action="receberDados.php" method="POST">
			<h1>Crie sua conta</h1>
			<span></span>
			<input type="hidden" name="acao" value="cadastrar">
		    <input type="text" placeholder="Digite seu nome" required id="nome" name="nome">
			<input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf" maxlength="11" oninput="mascaraCPF(this.value)">
			<input type ="email" placeholder="Digite seu e-mail" required id="e-mail" name="email">
			<input type="text" name="telefone" id="telefone" required placeholder="Digite seu telefone" minlength="11" maxlength="11" oninput="mascaraTelefone(this.value)">
			<label for="estado">Estado:</label>
  			<select name="estado" id="estado" onchange="carregarCidades()">
  			  <option value="">Selecione um estado</option>
  			</select>
  			<label for="cidade">Cidade:</label>
  			<select id="cidade" name="cidade">
  				<option value="">Selecione um estado primeiro</option>
  			</select>
			 <input type="text" placeholder="Digite seu Bairro" required id="bairro" name="bairro">
			 <input type="text" placeholder="Digite seu CEP" required id="cep" name="cep" maxlength="8"  oninput="mascaraCEP(this.value)">
			 <input type="number" placeholder="Digite o Número da sua casa" required id="numero_cs" name="numero" >
			 <input type="text" placeholder="Digite um Complemento" required id="complemento" name="complemento">
			
			<input type="password" placeholder="Crie uma senha" name="senha"maxlength="20" minlength="8">
			<button type="submit" name="cadUsuario">Cadastrar</button>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form action="fazerLogin.php" method="POST">
			<h1>Entrar </h1>
			<span>Use sua conta</span>
			<input type="email" placeholder="Insira seu e-mail"  name="email"/>
			<input type="password" placeholder="Digite sua senha" name="password"/>
			<a href="#">Esqueceu a senha?</a>
			<button type="submit">Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlayform">
			<div class="overlay-panel overlay-left">
				<h1>Já tem uma conta?</h1>
				<p> Entre com seu e-mail e senha</p>
				<button class="ghost" id="signIn">Entrar</button>
			</div>

			<div class="overlay-panel overlay-right">
				<h1>Olá, ainda não tem uma conta?</h1>
				<p>Para uma melhor experiência, se cadastre</p>
				<button class="ghost" id="signUp">Se cadastre</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="container-footer">
		<div class="container-contato">
			<h2>Contatoss</h2>
		</div>
	</div>

</footer>
<script>
    const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container2');
	
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});

	//Mascarar CPF
	function mascaraCPF(cpf) {
            // Remove qualquer caractere que não seja um dígito
            cpf = cpf.replace(/\D/g, '');

            // Aplica a máscara
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");

            // Atualiza o valor do campo
            document.getElementById('cpf').value = cpf;
    }

	function mascaraTelefone(telefone) {
		telefone = String(telefone).replace(/\D/g,'')
		if (telefone.length === 11){
			telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
		}	
		// Atualiza o valor do campo
		document.getElementById('telefone').value = telefone;
	}

	function mascaraCEP(cep){
		cep = cep.replace(/\D/g, '');
		
		if (cep.length === 8) {
                cep = cep.replace(/(\d{5})(\d{3})/, "$1-$2");
            }

        document.getElementById('cep').value = cep;
	}

</script>
</body>
</html>