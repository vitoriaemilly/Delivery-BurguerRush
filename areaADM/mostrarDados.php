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
				  <a href="index.php">Home</a>
				  <a href="sobre">Sobre</a>
				  <a href="login.php">Login</a>
				  <a href="#link"> Carrinho</a>
				</nav>
			  </details>
	</header>
    
    <section>
        <div class="container">
            <div class="Container-listas">
                <p>Econtre um usuario ou altere algum dado</p> <!-- Listagem dos clientes cadastrados no banco de dados -->
            </div>
            <div class="form-pesquisa">
                <form action="pesquisarUsuario.php" method="post">
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
    
</body>

</html>