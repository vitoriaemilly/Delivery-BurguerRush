<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burguer Rush</title>
	<link rel="stylesheet" href="css/cardapio.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="js/index.js"></script>
	<script src="js/cardapio.js"></script>
</head>
<body style=" margin: 0;
  padding: 0;
  box-sizing: border-box;">
	
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

			<!-- Criação de uma div video para fundo em loop da pagina inicial-->
			</div>
				<video class="video" autoplay loop>
					<source src="video/background.mp4">
				</video>
			</div>
			
	</header>

		<!-- Criação de uma div para sobrepor o video-->
		<div class="conteudo">
			<h1> Burguer Rush</h1>
		<p> Bateu uma fome? O melhor está aqui</p>
		<a href="#pedidostext"> Fazer pedido</a> 
</div>
</div>

<!-- Criação de section do texto do cardápio-->
<section class="pedidostext" id="pedidostext">
	<h1> Nosso cardápio</h1>
	<p> Confira nossas delícias </p>
</section>

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

	<!-- id hamburguer para alocar todos os cards de hamburguer  -->
	<div id="hamburguer" class="itensclass"> 
		
	</div>


	<div id="bebida" class="itensclass"> 
	<div class="containercomida">
        <div class="card" style="--cor:yellow;">
            <div class="imgcomida">
                <img src="cardapio/sucoabacaxi.jpg">
            </div>
            <div class="conteudocomida">
                <h2> Suco de abacaxi</h2>
                <p> O nosso suco natural de abacaxi é a melhor opção
					 para quem buscar se refrescar ou servir com o acompanhamento
					  à um de nossos hamburgueres ou combos
				</p>
                     <a href="#"> Comprar</a>
            </div>
        </div>
		<div class="containercomida">
        <div class="card" style="--cor:red;">
            <div class="imgcomida">
                <img src="cardapio/sucomorango.jpg">
            </div>
            <div class="conteudocomida">
                <h2> Suco de morango</h2>
                <p> O nosso suco natural de morango é a melhor opção
					 para quem buscar se refrescar ou servir com o acompanhamento
					  à um de nossos hamburgueres ou combos</p>
                     <a href="#"> Comprar</a>
            </div>
        </div>
		<div class="containercomida">
        <div class="card" style="--cor:orange;">
            <div class="imgcomida">
                <img src="cardapio/sucolaranja.jpg">
            </div>
            <div class="conteudocomida">
                <h2> Suco de laranja</h2>
                <p> O nosso suco natural de laranja é a melhor opção
					 para quem buscar se refrescar ou servir com o acompanhamento
					  à um de nossos hamburgueres ou combos</p>
                     <a href="#"> Comprar</a>
            </div><!--  <!- div do conteudo-!> -->
        </div>
		

        </div>
        </div>
			
        </div>

    <div id="combo" class="itensclass">
		
    </div>
	
</body>
</div>

<div class="rodape">
	<p> teste </p>
	 </div>
</html>