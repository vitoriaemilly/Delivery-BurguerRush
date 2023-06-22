

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burguer Rush</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cardapio.css">
	<script src="js/index.js"></script>
	<script src="js/cardapio.js"></script>
</head>
<body>
		<header class="container">
			<details>
				<!-- <label>User</label> -->
				<summary></summary>
				<nav class="menu">
				  <a href="index.php">Home</a>
				  <a href="sobre">Sobre</a>
				  <a href="login.php">Login</a>
				  <a href="#link"> Carrinho</a>
				</nav>
			  </details>
				<!-- <<div class="logo">
					 <img src="../acess/" alt="Logo burguer rush">
				</div>>-->
			
			<!-- <aside>
				<div class="menu-toogle">
					<img src="../acess/menu-hamburguer.png" alt="menu-hamburguer">
				</div>
			</aside> -->

			<!-- Criação de uma div video para fundo em loop da pagina inicial-->
			</div>
				<video class="video" autoplay loop>
					<source src="video/MM002735____BBQ_164____1080p____A054_C119_0327DJ_001.mp4">
				</video>
			</div>
			
	</header>
		<!-- Criação de uma div para sobrepor o video-->
		<div class="conteudo">
			<h1> Burguer Rush</h1>
		<p> Bateu uma fome? O melhor está aqui</p>
		<a href="#pedidostext"> Fazer pedido</a> 
	</div>

	<!-- <<section class="home">
		
		<div class="haburgue">
			<img src="../acess/Captura_de_Tela__13_-removebg-preview.png" alt=""> 
		</div>
		
	</section>
	>-->
	
</div>
<!-- Criação de section do texto do cardápio-->
<section class="pedidostext" id="pedidostext">
	<h1> Nosso cardápio</h1>
	<p> Confira nossas delícias </p>

<!-- <Criação de uma classe principal para o enu dos pedidos> -->
	<div class="menu-pedidos">
		<ul>
		<li onclick="mostrar('hamburguer')">Hámburguers</li>
		<li onclick="mostrar('bebida')"> Bebidas</li>
		<li onclick="mostrar('combo')"> Combos</li>
</ul>
</div>

<!-- Criação div de itens para chamar o id com a função criada de acordo com o li -->
<div id="itens"> 
	<div id="hamburguer" class="itensclass"> 
		<p> oi teste </p>
	</div>
	<div id="bebida" class="itensclass"> 
		<p> oi teste 2</p>
	</div>
	<div id="combo" class="itensclass">
		<p> Oi teste 3</p> </div>
</div>

<!-- Classe principal para a transição do pedido com overlay -->
<!-- <div class="hamburguer" id="hamburguer">
	<div class="overlay">
		<div class = "items"></div>
		<div class = "items head">
			<p>Hambúrguer acebolado</p>
			<hr>
		</div>
		  <div class = "items price">
			  <p class="new">$20,00</p>
		  </div>
			  <button class="adicionar">Adicionar ao carrinho</button>
 -->
			<!-- <div class="overlay">
				<div class = "item2"></div>
				<div class = "items head">
					<p>X-burguer</p>
					<hr>
				</div>
				  <div class = "items price">
					  <p class="new">$20,00</p>
				  </div>
				  
				  <div class="items cart">
					  <i class="fa fa-shopping-cart"></i>
					  <button class="adicionar">Adicionar ao carrinho</button>
					</div> -->

		</div>
</body>
</div>
</html>