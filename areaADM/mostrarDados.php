<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrarDados.css">
    <title>Lista de Clientes</title>
</head>
<body>
<header class="container">
			<details>
				<summary></summary>
				<nav class="menu">
				  <a href="../index.php">Home</a>
				  <a href="#sobre">Sobre</a>
				  <a href="../login.php">Login</a>
				  <a href="#link"> Carrinho</a>
				</nav>
			  </details>
  </header> 
    <section>
        <div class="container">
            <div class="container-listas">
                <p>Encontre um usuario ou altere algum dado</p> <!-- Listagem dos clientes cadastrados no banco de dados -->
            </div>
            <div class="form-pesquisa">
                <form action="pesquisarUsuario.php" method="post" class="procurar">
                    <fieldset>
                        <legend>Procure por um Usuário</legend>
                        <label for="email">Pesquise através do E-mail:</label>
                        <input type="text" name="email" id="email" placeholder="digite o email do usuario.">
                        <button type="submit"><i class="search">Buscar!</i></button>
                    </fieldset>
                </form>
            </div>

            <div class="form-alterar">
                <form action="verificarDados.php" method="post">
                    <fieldset>
                        <legend>Caso Necessario, você pode Alterar algum dado</legend>
                        <label for="cpf">Digite o CPF da pessoa que você deseja alterar os dados:</label>
                        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
                        <button type="submit">Alterar</button>
                    </fieldset>
                </form>
            </div>

            <div class="form-deletar">
                <form action="excluirDados.php" method="post">
                    <fieldset>
                        <legend>Caso Necessario, você pode Excluir algum usuario</legend>
                        <label for="cpf">Digite o CPF da pessoa que você deseja alterar os dados:</label>
                        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
                        <button type="submit">Excluir</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
         
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

</body>

</html>