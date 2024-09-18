<?php 
	include 'includes/conn.php';

	// Consulta SQL
	$consulta_bebidas = "SELECT * FROM bebidas order by id";
	$resultado_bebidas = $conn->query($consulta_bebidas);

	$consulta_cervejas = "SELECT * FROM cervejas order by id";
	$resultado_cervejas = $conn->query($consulta_cervejas);

	$consulta_doses = "SELECT * FROM doses order by id";
	$resultado_doses = $conn->query($consulta_doses);

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

	<title>Cardápio Lanchonete Doces e Delícias | Bebidas</title>
	<meta name="theme-color" content="#f90" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#f90" />
	<meta name="msapplication-navbutton-color" content="#f90" />
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

	<link rel="canonical" href="https://www.gsuweb.com.br/docesedelicias" />

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
			
			<div id="titulo-bebidas" class="titulo-pagina">
				<h1>bebidas</h1>
			</div>

			<div class="corpo-pagina">

				<?php
					while($row = $resultado_bebidas->fetch_assoc()) {
						echo '
							<div class="item-content">
								<div class="item-nome-content">
									<span class="item-nome">'.$row['bebidaNome'].' <span class="medida">'.$row['medida'].'</span></span>
									<span class="ingredientes"></span>
								</div>
								<div class="item-preço"><span class="cifrão">R$</span> '.number_format($row["valorBebida"], 2, ',', '.').'</div>
							</div>';
					}
				
				?>

			</div>




			<div class="subtitulo-pagina">
				<h2>cervejas</h2>
			</div>

			<div class="corpo-adicionais">
				<?php 
					while($row = $resultado_cervejas->fetch_assoc()) {
						echo '
						<div class="item-adicionais">
							<div class="adicionais-nome"><span class="">'.$row['nomeCerveja'].' <span class="medida">'.$row['medida'].'</span></span></div>
							<div class="adicionais-preço"><span class="cifrão">R$</span> '.number_format($row["valorCerveja"], 2, ',', '.').'</div>
						</div>';
					}
				?>

			</div>

			<div class="subtitulo-pagina">
				<h2>doses</h2>
			</div>

			<div class="corpo-adicionais">
			<?php
			while($row = $resultado_doses->fetch_assoc()) {
				echo '
					<div class="item-adicionais">
						<div class="adicionais-nome"><span class="">'.$row['doseNome'].'</span></div>
						<div class="adicionais-preço"><span class="cifrão">R$</span> '.number_format($row["valorDose"], 2, ',', '.').'</div>
					</div>
				';
			}
			?>

			</div>

			<h2 class="aviso-controle">Use o controle abaixo para navegar entre as páginas:</h2>

			<div class="container-controle">
				<a class="botao-controle" href="salgados.php">
					<i class="fa-solid fa-left-long"></i>
					voltar
				</a>

				<a class="botao-controle" href="index.php">
					<i class="fa-solid fa-house"></i>
					início
				</a>

				<a class="botao-controle botao-disabled" href="#.php">
					<i class="fa-solid fa-right-long"></i>
					próximo
				</a>
			</div>
			
			
			
		</section>

		

    </div>

	<?php include "rodape.php"; ?>

</body>
</html>