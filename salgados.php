<?php 
	include 'includes/conn.php';

	// Consulta SQL
	$consulta_salgados = "SELECT * FROM salgados order by id";
	$resultado_salgados = $conn->query($consulta_salgados);

	$consulta_sucos = "SELECT * FROM sucos order by id";
	$resultado_sucos = $conn->query($consulta_sucos);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5WS6MFTXR"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-Q5WS6MFTXR');
	</script>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous"></script>

	<title>Cardápio Lanchonete Doces e Delícias | Salgados</title>
	<meta name="theme-color" content="#000" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#C36532" />
	<meta name="msapplication-navbutton-color" content="#C36532" />
	<meta name="description" content="Cardápio da Lanchonete Doces e Delícias">
	<meta charset="UTF-8"/>
	<meta name="classification" content="Internet">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="cardapio, lanchonete, lanche, comida, menu">
	<meta name="robots" content="index, follow">
	<meta property="og:image" content="imagens/logo.webp" />
	<meta property="og:title" content="Cardápio Lanchonete Doces e Delícias">
	<meta name="p:domain_verify" content=""/>

	<link rel="canonical" href="" />

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/item.css" media="screen" />
	
	<script src="https://kit.fontawesome.com/10d6de9b48.js" crossorigin="anonymous"></script>
	
	<link rel="shortcut icon" href="imagens/favicon.webp">
</head>


<body>
    <div id="container">

		<?php include "menu.php"; ?>

		<section id="container-item">

			<div id="titulo-salgados" class="titulo-pagina">
				<h1>salgados</h1>
			</div>
			<div class="corpo-pagina">

				<?php
					while($row = $resultado_salgados->fetch_assoc()) {
						echo '
							<div class="item-content">
								<div class="item-nome-content">
									<span class="item-nome">'. $row["itemNome"] .'</span>
									<span class="ingredientes">'. $row["ingredientes"] .'</span>
								</div>
								<div class="item-preço"><span class="cifrão">R$</span>' . number_format($row["itemPreco1"], 2, ',', '.') . '</div>
							</div>
						';
					}
				?>

			</div>

			<div class="subtitulo-pagina">
				<h2>sucos</h2>
			</div>

			<div class="corpo-adicionais">

				<div class="titulo-item-adicionais">
					<div id="titulo-adicionais-nome">item</div>
					<div id="titulo-adicionais-preço1" class="titulo-adicionais">copo<br>300ml</div>
					<div id="titulo-adicionais-preço2" class="titulo-adicionais">vitamina<br>300ml</div>
					<div id="titulo-adicionais-preço3" class="titulo-adicionais">jarra<br>1 litro</div>
				</div>

				<?php
					while($row = $resultado_sucos->fetch_assoc()) {
						echo '
						<div class="item-adicionais">
							<div class="sucos-nome"><span class="">'.$row["itemNome"].'</span></div>
							<div id="adicionais-preço1"><span class="cifrão">R$</span> '.number_format($row["itemPreco1"], 2, ',', '.').'</div>
							<div id="adicionais-preço2"><span class="cifrão">R$</span> '.number_format($row["itemPreco2"], 2, ',', '.').'</div>
							<div id="adicionais-preço3"><span class="cifrão">R$</span> '.number_format($row["itemPreco3"], 2, ',', '.').'</div>
						</div>';
					}
					
				?>

			</div>


			<h2 class="aviso-controle">Use o controle abaixo para navegar entre as páginas:</h2>
			
			<div class="container-controle">
				<a class="botao-controle" href="pasteis.php">
					<i class="fa-solid fa-left-long"></i>
					voltar
				</a>

				<a class="botao-controle" href="index.php">
					<i class="fa-solid fa-house"></i>
					início
				</a>

				<a class="botao-controle" href="bebidas.php">
					<i class="fa-solid fa-right-long"></i>
					próximo
				</a>
			</div>
			
		</section>

		

    </div>

	<?php include "rodape.php"; ?>

</body>
</html>